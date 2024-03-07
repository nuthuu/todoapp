<?php
session_start();
session_destroy();
header("location:http://localhost/todoPhp/index.php?msg=logout");
?>