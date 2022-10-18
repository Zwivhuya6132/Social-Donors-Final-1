<?php

function emptyInputRegistration($Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode, $Phone, $Email, $Password, $CPassword) {
  $result = "";

  if (empty($Fname) || empty($Lname) || empty($IdNumber) || empty($Day) || empty($Month) || empty($Year) || empty($Gender) || empty($Race) || empty($BloodType) || empty($Street) || empty($City) || empty($Town) || empty($PostalCode) || empty($Phone) || empty($Email) || empty($Password) || empty($CPassword)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function emptyInputUpdate($Street, $Town, $City, $PostalCode, $Phone, $Email, $Password, $CPassword) {
  $result = "";

  if (empty($Street) || empty($Town) || empty($City) || empty($PostalCode) || empty($Phone) || empty($Email) || empty($Password) || empty($CPassword)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function invalidName($Fname, $Lname) {
  $result = "";

  if (!preg_match("/^[a-zA-Z]*$/",$Fname, $Lname)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function invalidEmail($Email) {
  $result = "";

  if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function invalidPhone($Phone) {
  $result = "";

  if (!preg_match("/^[0-9]*$/",$Phone)) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;
}

function passwordMatch($Password, $CPassword) {
  $result = "";

  if ($Password !== $CPassword) {
    $result = true;
  }else {
    $result = false;
  }

  return $result;

}

function userExist($conn, $IdNumber, $Email){
  $sql = "SELECT * FROM users WHERE IdNumber = ? OR Email =?;";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../End-user HTML/registration.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $IdNumber, $Email );
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)) {
    return $row;

  }else{
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}

function createUser($conn, $Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode,$Phone, $Email, $Password){
  $sql = "INSERT INTO users (Fname, Lname, IdNumber, Day, Month, Year, Gender, Race, BloodType, Street, City, Town, PostalCode,PhoneNumber, Email, Password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../End-user HTML/registration.php?error=stmtfailed");
    exit();
  }

  $passHashed = password_hash($Password, PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $Fname, $Lname, $IdNumber, $Day, $Month, $Year, $Gender, $Race, $BloodType,$Street, $City, $Town, $PostalCode,$Phone, $Email, $passHashed);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("Location: ../End-User HTML/Login.php?Error=none");
  exit();
}

function emptyInputLogin($Email, $Password){
  $result = "";
  if (empty($Email) || empty($Password)) {
    $result = true;
  }else {
    $result = false;
  }
  return $result;
}


function loginUser($conn, $Email, $Password) {

  $unhashedpass = $Password;

  $uidExists = userExist($conn, $Email, $Email);

  if ($uidExists === false) {
    header("location: ../End-user HTML/Login.php?error=invalidusername");
    exit();
  }


  $uidExists = userExist($conn, $Email, $Email);


    $passHashed = $uidExists["Password"];
    $checkPass = password_verify($Password, $passHashed);

    if ($checkPass === false) {
      header("location: ../End-user HTML/Login.php?error=wronglogin");
      exit();
    }
    else if ($checkPass === true) {
      session_start();
      $_SESSION["id"] = $uidExists["id"];
      $_SESSION["Fname"] = $uidExists["Fname"];
      $_SESSION["Lname"] = $uidExists["Lname"];
      $_SESSION["IdNumber"] = $uidExists["IdNumber"];
      $_SESSION["Day"] = $uidExists["Day"];
      $_SESSION["Month"] = $uidExists["Month"];
      $_SESSION["Year"] = $uidExists["Year"];
      $_SESSION["Gender"] = $uidExists["Gender"];
      $_SESSION["Race"] = $uidExists["Race"];
      $_SESSION["BloodType"] = $uidExists["BloodType"];
      $_SESSION["Street"] = $uidExists["Street"];
      $_SESSION["City"] = $uidExists["City"];
      $_SESSION["Town"] = $uidExists["Town"];
      $_SESSION["PostalCode"] = $uidExists["PostalCode"];
      $_SESSION["Email"] = $uidExists["Email"];
      $_SESSION["PhoneNumber"] = $uidExists["PhoneNumber"];
      $_SESSION["Password"] = $uidExists["Password"];
      $_SESSION["CPassword"] = $uidExists["CPassword"];
      header("location: ../End-user HTML/Home.php");
      exit();
    }
}