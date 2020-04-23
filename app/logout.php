<?php
session_start();
session_destroy();
$_SESSION['sesion'] == '';

echo 'You have been logged out. <a href="/">Go back</a>';
