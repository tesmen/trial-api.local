<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["favanimal"] = $_SESSION;
$sessId = session_id();

echo "Session variables are set. $sessId <br>";

var_dump( $_SESSION);
?>
