<?php 
include ("Admin/connection.php");
session_start();
session_destroy();
session_unset();

header("location: CustomerPanel/index.php");
exit();
?>

