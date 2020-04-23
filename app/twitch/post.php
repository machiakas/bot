<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
var_dump($usuario);
var_dump($pass);

$salida = shell_exec('whoami');
echo "$salida";
