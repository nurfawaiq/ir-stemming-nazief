<?php
$db_name = "stemming";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";
$conn = mysqli_connect($db_host, $db_user, $db_pass);
if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}
$db_selected = mysqli_select_db($conn, $db_name);
if (!$db_selected) {
  die('Cannot access ' . $db_name . ': ' . mysqli_error($conn));
}
?>