<?php
include 'error.reporting.inc.php';
include 'class.autoloader.inc.php';
if(isset($_POST["submit"])) {

    //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantaite SgnupContr class

    $signup = new Signupcontr($uid, $pwd, $pwdRepeat, $email);

    //Running error handlers and user signup
    $signup->signupUser();


    //Going back to front page 
    header("location: ../index.php?error=none");
}
