<?php
$pass = "1232";
$hash = '$2y$10$pSU6id/0S2RuG.9q.Ka0huFOeO6JefBHTiNfQSSYPfJSu1Gq2uz56';

if (password_verify($pass, $hash)) {
    echo "Пароль верный!";
}
