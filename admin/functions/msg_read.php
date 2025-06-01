<?php

require "connect.php";

$msg_id = $_POST["N_msg_id"];

$updat_statues = $coon -> query("UPDATE msg SET statues = 1 WHERE id ='$msg_id'");

if($updat_statues){

    echo "<div> massege send </div> ";

}


?>