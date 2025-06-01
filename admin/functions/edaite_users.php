<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    require "connect.php";

    
    $id = $_POST["id"];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password= password_hash($_POST["password"],PASSWORD_DEFAULT);
    $phone= $_POST["phone"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    echo $priv = $_POST["priv"];

    $edaite_users = $coon -> query("UPDATE users SET name='$name',email='$email',password='$password',
    phone='$phone',gender='$gender',address='$address',priv='$priv' WHERE id='$id'");
    

     if($edaite_users){

        header("location:../users.php");

     }

}






?>