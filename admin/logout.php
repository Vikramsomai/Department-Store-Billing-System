<?php
session_start();
include('function.inc.php');
unset($_SESSION['users']);
redirect('login.php');
?>