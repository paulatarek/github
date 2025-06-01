<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    require "connect.php";

    $name = $_POST["N_NAME"];
    $email = $_POST["N_EMAIL"];
    $number = $_POST["N_NUMBER"];
    $msg = $_POST["N_MSG"];

    $insert_msg  = $coon -> query("INSERT INTO msg(name,email,number,msg,statues) VALUES('$name','$email','$number','$msg',0) ");


    if($insert_msg){

        echo "<div class='alert alert-success'>message sent successfully</div>";

    }else{
        
        echo "<div class='alert alert-danger'>message not-sent please enter all data</div>";
    }

}


?>