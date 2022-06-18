<?php
session_start();
unset($_SESSION['user']);
header("Location: ../snapshop/signin.php");

?>