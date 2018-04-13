<?php
SESSION_START();
unset($_SESSION['user']);
header("location: index.php");
?>