<?php
session_start();
ob_start();

unset($_SESSION['idP']);
header("Location: index.php"); 
