<?php 
session_start();
unset($_SESSION['auth']);
unset($_SESSION['user']);
unset($_SESSION['role']);
header('location:index.php');
