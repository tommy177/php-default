<?php
session_start();
$allow = false;

function getDb()
{
    static $db = '';
    if (empty($db)) {
        $db = mysqli_connect('localhost', 'GB', '111', 'shop');
    }
    return $db;
}

function get_user()
{
    return $_SESSION['login'];
}

function is_admin()
{
    return $_SESSION['login'] == 'admin';
}


function is_auth()
{
    //TODO оптимизируйте, чтобы когда пользователь авторизован, еще раз по куке не авторизоваться
    if (isset($_COOKIE['hash'])) {
        $hash = $_COOKIE["hash"];
        $sql = "SELECT * FROM `users` WHERE `hash`='{$hash}'";
        $result = mysqli_query(getDb(), $sql);
        $row = mysqli_fetch_assoc($result);
        $user = $row['login'];
        if (!empty($user)) {
            $_SESSION['login'] = $user;
            $_SESSION['id'] = $row['id'];
        }
    }
    return isset($_SESSION['login']);
}

if (is_auth()) {
    $allow = true;
    $login = get_user();
}

if (isset($_GET['logout'])) {
    setcookie('hash', '', time() - 3600, '/');
    unset($_SESSION['login']);
    header("Location: /");
    die();
}

function auth($login, $pass)
{
    $login = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($login)));
    $result = mysqli_query(getDb(), "SELECT * FROM users WHERE login = '{$login}'");
    $row = mysqli_fetch_assoc($result);
    //TODO использовать password_verify
    if ($pass == $row['pass']) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $row['id'];
        return true;
    }
    return false;
}

if (isset($_POST['ok'])) {
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['password']);
    if (auth($login, $pass)) {
        if (isset($_POST['save'])) {
            $hash = uniqid(rand(), true);
            $id = $_SESSION['id'];
            $sql = "UPDATE `users` SET `hash` = '{$hash}' WHERE `id` = {$id}";
            $result = mysqli_query(getDb(), $sql);
            setcookie("hash", $hash, time() + 3600, '/');
        }
        header("Location: /");
        die();
    } else {
        die("Не верный логин пароль");
    }
}