<?php
session_start();

$_SESSION['login'] = 'admin';

session_regenerate_id();
var_dump(session_id());
var_dump($_SESSION);