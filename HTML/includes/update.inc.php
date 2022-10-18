<?php

session_start();

if(isset($_POST['update'])){
   
  $id = $_SESSION["id"];

   $Street = $_POST["street"];
   $Town = $_POST["town"];
   $City = $_POST["city"];
   $PostalCode = $_POST["PostalCode"];
   $Phone = $_POST["phone"];
   $Email = $_POST["email"];
   $Password = $_POST["password"];
   $CPassword = $_POST["cPassword"];
   

   include_once "conn.inc.php";
   include_once "functions.inc.php";


   if(invalidEmail($Email) !== false){
    header("location: ../End-User HTML/profile.php?error=invalidemail");
     exit();
   }

   if (emptyInputUpdate($Street, $Town, $City, $PostalCode, $Phone, $Email, $Password, $CPassword) !== false){
    header("location: ../End-User HTML/profile.php?error=emptyinputs");
    exit();
  }else{
    header("location: ../End-User HTML/profile.php?error=none");
    exit();
  }

        $passHashed = password_hash($Password, PASSWORD_DEFAULT);

       $sql = "UPDATE users SET Street = '$Street', Town = '$Town', City= '$City', PostalCode = '$PostalCode', PhoneNumber = '$Phone',
       Email = '$Email', Password= '$passHashed' WHERE id = '$id' LIMIT 1";
       

       $results = mysqli_query($conn,$sql);

       if($results == true){

        $_SESSION['Street'] = $Street;
        $_SESSION['Town'] = $Town;
        $_SESSION['City'] = $City;
        $_SESSION['PostalCode'] = $PostalCode;
        $_SESSION['Email'] = $Email;
        $_SESSION['Password'] = $Password;
        $_SESSION['CPassword'] = $CPassword;
       
       header("Location: ../End-User HTML/profile.php");
       exit;

       }else{
        echo "ok not updated";
       }

}