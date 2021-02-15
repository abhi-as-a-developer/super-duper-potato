<?php

    ## sesssion start
    session_start();

    ## database connection
    $hostdb = "localhost";
    $userdb = "root";
    $pwddb = "";
    $namedb = "users";

    $con = mysqli_connect($hostdb, $userdb, $pwddb, $namedb);

    if ($con -> connect_error) {
        die("Failed to connect to the databse " . $con -> connection_error);
    }

    ## getting info
    $fullname = $_POST["full_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $stream = $_POST["stream"];
    $subject = $_POST["subject"];
    $tution_mode = $_POST["tution_mode"];
    $qualification = $_POST["qualification"];
    $address = $_POST["address"];
    $pwd = $_POST["password"];

    // ## checking if the email and phone number is already taken
    // $s = "SELECT * FROM users WHERE email = '$email' OR SELECT * FROM users WHERE phone_number = '$phone_number'";
    // // $p = "SELECT * FROM users WHERE phone_number = '$phone_number'";

    // $result = mysqli_query($con, $s);
    // $num = mysqli_num_rows($result);

    // if ($num == 1) {
    //     die("this email or phone number already registered, please try with a different one.")
    // else{
    //     $reg = "INSERT INTO users(fullname, email, phone_number, stream, subject, tution_mode, qualification, address, pwd) VALUES('$fullname', '$email', '$phone_number', '$stream', '$subject', '$tution_mode', '$qualification', '$address', '$pwd')";
    //     mysqli_query($con, $reg);
    //     echo"Registration done!";
    // }

    $reg = "INSERT INTO users(fullname, email, phone_number, stream, subject, tution_mode, qualification, address, pwd) VALUES('$fullname', '$email', '$phone_number', '$stream', '$subject', '$tution_mode', '$qualification', '$address', '$pwd')";
        mysqli_query($con, $reg);
        echo"Registration done!";

?>