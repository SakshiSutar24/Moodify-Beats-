<?php
session_start();
session_destroy();
header("Location: sutar.php");
exit();
?>