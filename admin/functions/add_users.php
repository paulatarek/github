<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require "connect.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password= password_hash($_POST["password"],PASSWORD_DEFAULT);
    $phone= $_POST["phone"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    echo $priv = $_POST["priv"];

    $insert_users = $coon -> query("INSERT INTO users (name,email,password,phone,gender,address,priv)
    
     VALUES('$name','$email','$password','$phone','$gender','$address','$priv')") ;

     if($insert_users){

        header("location:../users.php");

     }

}




?>