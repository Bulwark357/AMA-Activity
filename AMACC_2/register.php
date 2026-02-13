<?php

$username = $_POST["username"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
$birthdate = $_POST["birthdate"];
$role = $_POST["role"]; 

$current_year = 2026;

$age = $current_year - $birthdate;

echo "<h3>Registration Successful</h3>";
echo "Welcome to the site, <strong>" . $username . "</strong>!<br/>";
echo "Age: " . $age . " years old<br/>";
echo "Access Level: " . $role;

?>


