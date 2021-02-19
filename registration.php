<?php

    ## sesssion start
    session_start();

    ## Data Base connection
    include_once "config.inc.php";

    ## getting info
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = trim($_POST["full_name"], "<{[()]}>@#$%^&*~`:/?|+=");
        $email = trim($_POST["email"], "<{[()]}>#$%^&*~`:/?|+=");
        $phone_number = trim($_POST["phone_number"], "<{[()]}>@#$%^&*~`:/?|+=");
        $stream = $_POST["stream"];
        $subject = $_POST["subject"];
        $tution_mode = $_POST["tution_mode"];
        $qualification = $_POST["qualification"];
        $address = trim($_POST["address"], "<{[()]}>@#$%^&*~`:/?|+=");
        $pwd = trim($_POST["password"], "<{[()]}>@#$%^&*~`:/?|+=");

        ## checking if the email and phone number is already taken
    $s = "SELECT * FROM 'users' WHERE email = '$email'";
    // $p = "SELECT * FROM users WHERE phone_number = '$phone_number'";

    $result = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");

    if (mysqli_num_rows($result)>0) {
        echo'<h2 style="color:red">this email or phone number already registered, please try with a different one.</h2>';
    } else{
        $reg = "INSERT INTO users(fullname, email, phone_number, stream, subject, tution_mode, qualification, address, pwd) VALUES('$fullname', '$email', '$phone_number', '$stream', '$subject', '$tution_mode', '$qualification', '$address', '$pwd')";
        mysqli_query($con, $reg);
        echo"Registration done!";
    }}
    else{
        die("Something went wrong !");
    }
?>