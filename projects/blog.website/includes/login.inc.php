<?php
include 'error.reporting.inc.php';
include 'class.autoloader.inc.php';
if(isset($_POST["submit"])) {

    //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // Instantaite SgnupContr class

    $login = new Logincontr($uid, $pwd);

    //Running error handlers and user signup
    $login->loginUser();


    //Going back to front page 
    header("location: ../index.php?error=none");
}
