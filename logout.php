<?php if (!isset($SESSION)) session_start();
$_SESSION['_lgn']='';
unset($_SESSION['_lgn']);
session_destroy();
echo "<script>window.location.href='index.php';<script>";
?>