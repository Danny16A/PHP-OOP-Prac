<?php 

if(isset($_POST["submit"]))
{
    $uid = $_POST["username"];
    $pwd = $_POST["password"];

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-controller.classes.php";

    $signup = new LoginController($uid, $pwd);

    $signup->loginUser();


    header("location: ../index.php?error=none");
}