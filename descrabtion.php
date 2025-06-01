<?php
require "admin/functions/connect.php";

 $id = $_GET["id"];

 $select_products = $coon -> query("SELECT * FROM products WHERE id='$id'");

 $details_products = $select_products -> fetch_assoc();

 $view_img = $details_products["img"];

 $arr = explode("+", $view_img);

 $count = count($arr);


 
 

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>




<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
</head>
<body>
<style>
 
    .pic{

        width: 100%;
        height: 70vh;
        /* background-color: aqua; */
        border: 1px solid black;
        margin-top: 40px;
     
    
    }
    .pic img{
        width: 100%;
        height: 100%;
        box-shadow: 2px 7px 10px black;
        

    }
    .desc{
        margin-top: 40px;
        text-align: justify;

    }
    .wrab{
        margin-top: 20px;
      width: 100%;
      height: 15vh;
      /* background-color: blue; */
      display: flex;
      justify-content:center;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
      

    }
    .wrab img{
     
      width: 10%;
      height: 100%;
      box-shadow: 10px 5px 5px black;
  

    }


</style>

    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div style="margin-left:30px ;" class="nav-title">
            JoGeek
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>   
            <span></span>
          </label>
        </div>
        <div class="nav-links">
          <a href="#hotels" >hotels</a>
          <a href="#about" >about us</a>
          <a href="#services" >services</a>
          <a href="#login" >login</a>
          <a href="functions/logout.php" >logout</a>
          <a href="#staff" >staff</a>
          
          
        </div>
      </div>
      <br>
      <br>

      
   


      <div  class="container">
        <div style="margin: auto;" class="row  marg">
            <div class="col-lg-7">

                <div class="pic">

           
             

                    <img id="pic"  src="admin/images/<?php echo $arr[0]  ?>" alt="descrabtion">

                  

                </div>
            </div>
            <div class="col-lg-5">

                <p class="desc">
             <?php echo  $details_products["discrption"];   ?>
                </p>
                <hr>
                <hr>
            </div>

         

       

          
        </div>
      </div>

      <div style="margin-top:30px;" class="container">
        <div class="row">
          <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img style="width: 100%; height:600px;" src="admin/images/<?php echo $arr[0]  ?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First view hotel</h5>
                    <p>the best view hotel for ever for relaxing.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img style="width: 100%; height:600px;" src="admin/images/<?php echo $arr[1]  ?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second  view hotel</h5>
                    <p>the best view hotel for ever for relaxing.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img style="width: 100%; height:600px;" src="admin/images/<?php echo $arr[2]  ?>" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third  view hotel</h5>
                    <p>the best view hotel for ever for relaxing.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span style="background-color: black;" class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span style="color: black;" class="visually-hidden">Next</span>
              </button>
            </div>
            
          </div>
        </div>
      </div>



      









      

  <div  class="footer-dark">
    <footer>
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2018</p>
        </div>
    </footer>
  </div>
    

 
  
        
        
  
        
  
  
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/all.min.js"></script>
        <script src="js/jquery-3.6.1.min.js"></script>
    
        <!-- <script src="js/main.js"></script> -->
 


       
        
    </body>
    </html>