<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require "connect.php";

    $name = $_POST["name"];

     $price = $_POST["price"];
 
    $sale = $_POST["sale"];
  
      $seller = $_POST["seller"];
  
     $quantity = $_POST["quantity"];
  
     $discrabtion = $_POST["discrabtion"];

      $img = $_FILES["img"]["name"];

 $count = count($img);

    for($i = 0 ; $i < $count ; $i++ ){

        if( $_FILES["img"]["error"][$i] == 0 ){

            $extentions = array("png","gif","jpg","jpeg","jfif");

            $img_exe = pathinfo($img[$i],PATHINFO_EXTENSION);

            if(in_array( $img_exe , $extentions )){

                if($_FILES["img"]["size"][$i]  <= 5000000 ){
                    $new_name = md5(uniqid()).".".$img_exe;
                    $img_ar[]=$new_name;
                    echo"<br>";
                    // print_r($img_ar);
                   $insert_img = implode("+",$img_ar);
                    move_uploaded_file($_FILES['img']['tmp_name'][$i],"../images/".$new_name);



                }else{
                    header("location:../products.php?page=add&error=file too long");
            }


            }else{
                header("location:../products.php?page=add&error=file not supported");
        }

        }else{
            header("location:../products.php?page=add&error=file not uplouded");
    }
 

    }

 $insert_products = $coon -> query("INSERT INTO products(name,price,sale,seller,quantity,discrption,img) 
 VALUES('$name','$price','$sale','$seller','$quantity','$discrabtion','$insert_img')");

 if($insert_products){

    header("location:../products.php");
    
 }



}



?>