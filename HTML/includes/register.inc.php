<?php
   if(isset($_POST["submit"])){

    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $IdNumber = $_POST['idNumber'];
    $Day = $_POST['day'];
    $Month = $_POST['month'];
    $Year = $_POST['year'];
    $Gender = $_POST['gender'];
    $Race = $_POST['race'];
    $BloodType = $_POST['bloodType'];
    $Street = $_POST['street'];
    $City = $_POST['city'];
    $Town = $_POST['town'];
    $PostalCode = $_POST['PostalCode'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $CPassword = $_POST['cPassword'];


    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputRegistration($Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Phone, $Email, $Password, $CPassword) !== false){
      header("location: ../End-user HTML/registration.php?error=emptyinput");
      exit();
    }

    if (invalidName($Fname, $Lname) !== false){
      header("location: ../End-user HTML/registration.php?error=invalidname");
      exit();
    }

    if (invalidPhone($Phone) !== false){
      header("location: ../End-user HTML/registration.php?error=invalidphone");
      exit();
    }

    if (invalidEmail($Email) !== false){
      header("location: ../End-user HTML/registration.php?error=invalidemail");
      exit();
    }



    if (passwordMatch($Password, $CPassword) !== false){
      header("location: ../End-user HTML/registration.php?error=passwordsdontmatch");
      exit();
    }

    if (userExist($conn, $IdNumber, $Email ) !== false){
      header("location: ../End-user HTML/registration.php?error=alreadyexist");
      exit();
    }

    createUser($conn, $Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Phone, $Email, $Password, $CPassword);

   }else{
    header("location: ../End-user HTML/registration.php");
   }