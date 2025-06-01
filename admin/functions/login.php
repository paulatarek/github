<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require "connect.php";

    $email = $_POST["email"];
   $password = $_POST["password"];

    $select_users = $coon -> query("SELECT * FROM users WHERE email='$email'");

    $count_email =  $select_users -> num_rows;

    $details_users = $select_users -> fetch_assoc();

$password_sql = $details_users["password"];
 $id_sql = $details_users["id"];

 if( $count_email > 0){

 if(password_verify($password , $password_sql  )){



    header("location:../index.php");

    $_SESSION["login"] = $id_sql;
 }else{
    header("location:../login.php?error=passowrd in correct");
 }


}else{
    header("location:../login.php?error=email in correct");
}
}




?>