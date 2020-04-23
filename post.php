<?php

$usuario = $_POST['username'];
$pass = $_POST['password'];
var_dump($usuario);
var_dump($pass);

$salida = shell_exec('whoami');
echo "$salida";
