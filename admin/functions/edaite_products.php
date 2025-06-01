<?php   

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require "connect.php";

    echo $id = $_POST["id"];

    $name = $_POST["name"];

     $price = $_POST["price"];
 
    $sale = $_POST["sale"];
  
      $seller = $_POST["seller"];
  
     $quantity = $_POST["quantity"];
  
     $discrabtion = $_POST["discrabtion"];
    

    $img = $_FILES["img"]["name"];

    $count=count($img);
    $img_form = $img[0];
      

    if(empty($img_form)){
        

        $update = $coon -> query("UPDATE products SET name='$name',price='$price',sale='$sale',
        seller='$seller',quantity='$quantity',discrption='$discrabtion' WHERE id = '$id'");
         if($update){
            header("location:../products.php");
            }

    }

    if(!empty($img_form)){
        //   echo "not empty";
        for($i = 0 ; $i < $count ; $i++ ){

            if( $_FILES["img"]["error"][$i] == 0 ){
    
                $extentions = array("png","gif","jpg","jpeg","jfif");
    
                $img_exe = pathinfo($img[$i],PATHINFO_EXTENSION);
    
                if(in_array( $img_exe , $extentions )){
    
                    if($_FILES["img"]["size"][$i]  <= 3000000 ){
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
          }
        
          
          
          
          
                  
          
          
          $select_users = $coon -> query("SELECT * FROM products WHERE id ='$id'");
        
          $details_users  = $select_users -> fetch_assoc();
          
          $img = $details_users["img"];
          
          $arr = explode("+",$img );
          //  echo $arr[0];
           $count = count($arr);
          
              
              
              
              
              $update_new = $coon -> query("UPDATE products SET name='$name',price='$price',sale='$sale',
              seller='$seller',quantity='$quantity',discrption='$discrabtion',img='$insert_img' WHERE id = '$id'");
              for($i=0 ; $i < $count ; $i++ ){
                unlink("../images/$arr[$i]");
             }
            
              if($update_new){
              
                  header("location:../products.php");
          }


 
}



?>