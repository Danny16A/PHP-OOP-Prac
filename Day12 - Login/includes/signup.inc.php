<?php 

if(isset($_POST["submit"]))
{
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";

    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);

    $signup->signupUser();


    header("location: ../index.php?error=none");
}