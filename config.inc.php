<?php

## database connection
$hostdb = "localhost";
$userdb = "root";
$pwddb = "";
$namedb = "users";

$con = mysqli_connect($hostdb, $userdb, $pwddb, $namedb);

if ($con -> connect_error) {
    die("Failed to connect to the databse " . $con -> connection_error);
}

?>