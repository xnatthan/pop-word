<?php
session_start();
session_destroy();

echo "<script>";
echo "window.location.href = '../login.html';";
echo "</script> ";
?>
