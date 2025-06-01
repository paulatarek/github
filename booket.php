
<?php
session_start(); 
require "admin/functions/connect.php";


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
    #tickets{
    width: 100%;
    min-height: 20vh;

  }
  .border{
    width: 100%;
height: auto;
border : 1px solid black ; 
  }
</style>

    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div style="margin-left:30px ;" class="nav-title">
           <a style="margin-left:30px ;text-decoration: none; color:white;"  class="nav-title" href="index.php"> JoGeek</a>
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
          <a href="index.php#hotels" >hotels</a>
          <a href="index.php#about" >about us</a>
          <a href="index.php#services" >services</a>
          <a href="index.php#login" >login</a>
          <a href="index.php#staff" >staff</a>
          
          
        </div>
      </div>

      
      <header style="background-image:url(images/pexels-jonas-togo-2907196.jpg) ;height: 100vh;">
        <div class="layer"></div>
      <nav>
      <h1>
        Travel hotel
      </h1>
      <p style="font-size:30px ;text-transform: capitalize;">
        booket room now 
      
      </p>
      <button id="scroll"  style="font-size: 20px ; font-weight:bolder; " class="btn btn-success ">
       <a style="text-decoration: none; color:white;" href="#tickets">my tickets</a>
      </button>
  
      </nav>
      
      </header>
<div style="border:0.5px solid black;  padding: 20px;  margin-top: 20px;"  class="container ">
  <div class="row">
    <div class="col-sm-12 col-lg-12 col-md-12 col-12">

      <form id="booket" method="post" action="functions/insert_booking.php">
        <div class="form-group ">
      
          <label for="exampleInputEmail1">first name</label>
          <input type="text" name="first_name"  class="form-control" id="exampleInputEmail1" placeholder="first name">
        </div>
        <br>
        
        <div class="form-group ">
      
          <label for="exampleInputEmail1">last name</label>
          <input type="text" name="last_name"  class="form-control" id="exampleInputEmail1" placeholder="last name">
        </div>
        <br>
       
          <div class="form-group">
          <label for="exampleInputEmail1">cheak in </label>
          <input type="date" name="cheak_in" placeholder="cheak in"  class="form-control" id="exampleInputEmail1" >
          <br>
          <label for="exampleInputEmail1">cheakin out </label>
          <input type="date" name="cheakin_out" placeholder="cheak out"  class="form-control" id="exampleInputEmail1" >
        </div>
        <br>
      
            <div class="form-group">
          <label for="exampleInputEmail1">room</label>
          <select name="room" class="form-control" id="exampleFormControlSelect1" >
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
 
          </select>
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">adults</label>
          <select name="adults" class="form-control" id="exampleFormControlSelect1" >
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
 
          </select>
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">childreen</label>
          <select name="childreen" class="form-control" id="exampleFormControlSelect1" >
            
            <option value="1">1</option>
            <option value="1">2</option>
            <option value="1">3</option>
            <option value="1">4</option>
            <option value="1">5</option>
 
          </select>
        </div>
        
    
      <br>
     
    
       <div class="form-group">
          <label for="exampleInputEmail1"> Address</label>
          <input type="text" name="address"  placeholder="address" class="form-control" id="exampleInputEmail1" >
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1"> phone</label>
          <input type="text" name="phone"  placeholder="phone" class="form-control" id="exampleInputEmail1" >
        </div>
        <br>

      
      
     
        <input type="submit" name="submit" class="btn btn-primary" value="Add">
      <!--   <button type="submit" class="btn btn-primary">Submit</button> -->

      <div>

      <h1 class="m-2" style="text-align:center; color:white; background-color: <?php  if(isset($_GET["sucsses"])){ echo "green";} elseif(isset($_GET["incorrect"])){ echo "red";}?> ; ">

      <?php if(isset($_GET["sucsses"])){

        echo $_GET["sucsses"];

      } elseif(isset($_GET["incorrect"])){
echo $_GET["incorrect"];
      }
      
      ?>
      </h1>

      </div>
      </form>

   

      
      

    </div>
  </div>
</div>

<?php  

if(isset($_SESSION["vale"])){
  $id_users = $_SESSION["vale"];
  $select_tickets = $coon -> query("SELECT * FROM booking WHERE id_users = '$id_users'") ;





foreach($select_tickets  as $row_tickets){




?>

<section id="tickets">

        <div class="container">
          <div class="row">
            <div  class="col-12 border">

<h2 style="text-align:center;">
  hellow mr <?php echo $row_tickets["first_name"] ?>
</h2>

<h3>
  your tickets completed 
</h3>
<ul>
  <li>time chek in : <?php echo $row_tickets["cheak_in"]  ?></li>
  <li>time chek out : <?php echo $row_tickets["cheak_out"]  ?></li>
  <hr>
  <li>rooms: <?php echo $row_tickets["room"] ?> room</li>
  <li>pric one night : 400$</li>
  <li> finish  : 1200$</li>

  <h2  class="btn btn-success ">print ticket</h2>
</ul>
            </div>
          </div>
        </div>
        <br>
        <?php } ?>
      </section>
     
        <?php } ?>

     

<div  class="footer-dark">
  <footer>
      <div class="container">
          <div class="row">
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