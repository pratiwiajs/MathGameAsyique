<?php
session_start();

setcookie("name", "", 0, "/", "");

setcookie("email", "", 0, "/", "");

$_SESSION['new'] = 1;

echo "<script>window.location.href='index.php'</script>";
?>
