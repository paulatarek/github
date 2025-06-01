<?php
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
<link rel="stylesheet" href="css/animate.css">
</head>
<body>


<style>

.put a{
  text-decoration: none;
color: #000000;

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

      


      <header style="background-image:url(images/pexels-tamba-budiarsana-4070924.jpg) ;">
        <div class="layer"></div>
      <nav>
      <h1 class="wow fadeInLeft"  >
        Travel hotel
      </h1>
      <p class="wow fadeInRight" data-wow-delay="1s">
        To travel from one place to another for different purposes is generally called travelling.
      
      </p>
      <a  class="btn btn-primary " href="booket.php">book a room</a> 
     
      <a  class="btn btn-success" href="contact.php">contact us</a> 
      
      </nav>


      
      </header>

    
         <div class="container">
          <div class="row">
            <div class="col">
            <div class="form-group m-4">
  <!-- <label for="exampleInputEmail1">searsh</label> -->
  <input  type="text" name="searsh"  class="form-control _search" id="exampleInputEmail1" placeholder="searsh">
  <div class="container m-3">
  <div class="row">
    <div class="col">
    <div style="    display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
 " class="put">


</div>
    </div>
  </div>
</div>
</div>


<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
            </div>
          </div>
         </div>
      <form>

     



    <main >
        <div class="container">

<div style="opicty: 1; margin-top: 30px row-gap: 15px; opacity: 1;" class="row text-center cards">
<?php


$select_products = $coon -> query("SELECT * FROM products");

foreach($select_products as $row_products){

  $img_view =  $row_products["img"];

  $arr = explode("+",$img_view);


   $id_product_rate = $row_products["id"];
  $select_rate =  $coon -> query("SELECT * FROM rate WHERE id_product = '$id_product_rate'");
  $details_rate =	 $select_rate -> fetch_assoc();

 $rate_data =  $details_rate["rate"];
  

  

   
?>

<div class="col-12 col-sm-12 col-md-6 col-lg-4">
  <div id="<?php echo $row_products["name"]  ?>" class="card">
    <img src="admin/images/<?php echo $arr[0] ?>" alt="Denim Jeans" style="width:100% ; height: 300px;">
    <h1><?php echo $row_products["name"]  ?></h1>
    <p class="price"><?php echo $row_products["price"]  ?> $</p>
    <p>Some text about the hotel</p>
    <p><a class="btn btn-primary" href="descrabtion.php?id=<?php echo $row_products["id"] ?>">discribtion</a></p>

    <ul class="rev_star">
    <!-- <i class="fa-regular fa-star"></i> -->
    <i rate="1" id_product="<?php echo $row_products["id"] ?>" class="fa fa-star<?php if( $rate_data >= 1 ){echo " ";} ?>-o star_1 num"></i>
      <i rate="2"  id_product=" <?php echo $row_products["id"] ?> " class="fa fa-star<?php if( $rate_data >= 2 ){echo " ";} ?>-o  star_2 num"></i>
      <i rate="3" id_product=" <?php echo $row_products["id"] ?> " class="fa fa-star<?php if( $rate_data >= 3 ){echo " ";} ?>-o  star_3 num"></i>
      <i rate="4" id_product=" <?php echo $row_products["id"] ?> "class="fa fa-star<?php if( $rate_data >= 4 ){echo " ";} ?>-o  star_4 num"></i>
      <i rate="5" id_product=" <?php echo $row_products["id"] ?> " class="fa fa-star<?php if( $rate_data >= 5){echo " ";} ?>-o  star_5 num"></i>
    </ul>

  </div>
</div>
<?php  } ?>

    </div>
        </div>
      </main>
        
      
   
     

     <section id="about" style="height:min-content ;">
      <h1 style="text-align: center;"  ><span class="one"></span> about us <span class="two"></span></h1>
      <div style="margin-top: 50px;" class="container">
        <div class="row text-center">
          <div class="col-md-6 col-sm-12 col-lg-6">
            <h2 class="welcome">
              welcome evrey <span>body</span>
            </h2>
            <p class="p" style="text-align:justify" >
              Azerbaijan, the gem nestled between Europe and Asia,  invites you to an eclectic array of unforgettable experiences this summer. Whether it is the vibrant heart of Baku with its cosmopolitan charm, the tranquil ethnic villages showcasing cultural history, or the diverse landscapes, each corner of our nation holds an allure that's hard to resist. Coupled with an enticing
            </p>
<div  style="flex-wrap: wrap; display: flex;align-items: center;justify-content: space-between; gap: 10ox; gap-row:10px ;">
  <img class="wow fadeInUpBig" data-wow-delay="" src="images/pexels-amar-saleem-70441.jpg" style="width:120px ;height:100ox;" alt="good view">
  <img class="wow fadeInUpBig" data-wow-delay="1s" src="images/pexels-cottonbro-studio-5371484.jpg" style="width:120px ;height:100ox;" alt="good view">
  <img class="wow fadeInUpBig" data-wow-delay="2s" src="images/pexels-lina-kivaka-1520619.jpg" style="width:120px ;height:100ox;" alt="good view">
</div>

<button  style="width: 160px ; height: 50px;" class="btn btn-success m-2">CHEACK NOW</button>
  
       
           
          </div>
          <div class="col-md-6 col-sm-12 col-lg-6">
            <div  class="wow fadeInLeft" style="background-position: center; background-size: cover; width: 100%; height: 100%; background-image: url(images/pexels-tamba-budiarsana-4070924.jpg) ;"></div>
           <!-- <img src="images/ibs-academy-certificate-sample.jpg" style="height: auto; width:auto" alt=""> -->
           
          </div>


        </div>
      </div>
      <h1 style="text-align: center;"  ><span class="one"></span>  <span class="two"></span></h1>
     </section>




     <section  id="services">
      <div class="container">
          <h1 class="text-center">Services</h1>
          <div class="row">
              <div class="col-lg-4 mt-4">
                  <div class=" wow bounce card servicesText">
                      <div class="card-body">
                          <i class="fas servicesIcon fa-clock"></i>
                          <h4 class="card-title mt-3">Business Center</h4>
                          <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                              Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                      </div>
                  </div>  
              </div>
              <div class="col-lg-4 mt-4">
                  <div class=" card servicesText" >
                      <div class="wow bounce card-body" data-wow-delay="1s">
                          <i class='fas servicesIcon fa-layer-group'></i>
                          <h4 class="card-title mt-3">Room Service</h4>
                          <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                              Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                      </div>
                  </div>  
              </div>

              <div class="col-lg-4 mt-4">
                  <div class="card servicesText">
                      <div class="wow bounce card-body" data-wow-delay="2s">
                          <i class='far servicesIcon fa-check-circle'></i>
                          <h4 class="card-title mt-3">Breakfast Buffet                          </h4>
                          <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                              Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                      </div>
                  </div>  
              </div>
          </div>

          <div class="row">
              <div class="col-lg-4 mt-4">
                  <div class="card servicesText">
                      <div class="wow bounce card-body" data-wow-delay="3s">
                          <i class='fas servicesIcon fa-search'></i>
                          <h4 class="card-title mt-3">Laundry / Valet

                          </h4>
                          <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                              Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                      </div>
                  </div>  
              </div>

              <div class="col-lg-4 mt-4">
                  <div class="card servicesText">
                      <div class="wow bounce card-body" data-wow-delay="4s">
                          <i class='fas servicesIcon fa-shield-alt'></i>
                          <h4 class="card-title mt-3">Meeting rooms

                          </h4>
                          <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                              Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                      </div>
                  </div>  
              </div>

              <div class="col-lg-4 mt-4">
                  <div class="card servicesText">
                      <div class="wow bounce card-body" data-wow-delay="5s">
                          <i class='fas servicesIcon fa-wrench'></i>
                          <h4 class="card-title mt-3">Parking

                          </h4>
                          <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                              Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                      </div>
                  </div>  
              </div>
          </div>
      </div>
  </section>

  <section  id="login" class="login">
<div class="container">
  <div class="row text-center">
    <div class="col">
      <p class="wow fadeInUp">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <!-- <button class="btn btn-primary wow fadeInUp" data-wow-delay="1s">sign up</button> -->
      <a style="width: 150px;height:45px;font-size:1.3rem; text-align:center;" class="btn btn-primary wow fadeInUp" data-wow-delay="1s" href="login.php">sign up</a>
      <br>
      <br>
      <!-- <button class="btn btn-dark wow fadeInUp" data-wow-delay="2s">creat acount</button> -->
      <a style="width: 150px;height:45px;font-size:1.3rem; text-align:center;" class="btn btn-dark wow fadeInUp" data-wow-delay="2s" href="register.php">creat acount</a>
    </div>
  </div>
</div>


  </section>


  <section id="staff" class="staf manger">
    <h1 id="content" style="text-align: center  ; font-size:3rem ; text-transform: capitalize;">staf</h1>
    <div class="container">
      <div style=" row-gap: 10px;" class="row  justify-content-between box">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card cardd">
            <img class="wow flip"  src="images/pexels-andrea-piacquadio-774909.jpg" alt="John" style="width:100%;height: 250px;">
            <h2>sara nozhey</h2>
            <p class="title">hr</p>
            <p>Harvard University</p>
         
            <p><a class="btn btn-dark" href="contact.php#contact">contact</a></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card cardd">
            <img class="wow flip" data-wow-delay="1s" src="images/pexels-pixabay-220453.jpg" alt="John" style="width:100%;height: 250px;">
            <h2>John rfek</h2>
            <p class="title">manger</p>
            <p>Harvard University</p>
       
            <p><a class="btn btn-dark" href="contact.php#contact">contact</a></p>
          </div>       
        
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card cardd">
          <img class="wow flip" data-wow-delay="2s" src="images/pexels-christina-morillo-1181686.jpg" alt="John"style="width:100%;height: 250px;">
          <h2>yassmin mongy</h2>
          <p class="title">CEO & Founder</p>
          <p>Harvard University</p>
       
          <p><a class="btn btn-dark" href="contact.php#contact">contact</a></p>
        </div>
    </div>
   
  </section>


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
    <script src="js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>
    <script src="js/main.js"></script>

    <script>
      $(function(){

        $(".star_1").click(function(){

          $(this).closest(".rev_star").find(".num").removeClass("fa fa-star").addClass("fa-regular fa-star");
          $(this).closest(".rev_star").find(".star_1").removeClass("fa-regular fa-star").addClass("fa fa-star");
        
        })
        $(".star_2").click(function(){

$(this).closest(".rev_star").find(".num").removeClass("fa fa-star").addClass("fa-regular fa-star");
$(this).closest(".rev_star").find(".star_1").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_2").removeClass("fa-regular fa-star").addClass("fa fa-star");

})
$(".star_3").click(function(){

$(this).closest(".rev_star").find(".num").removeClass("fa fa-star").addClass("fa-regular fa-star");
$(this).closest(".rev_star").find(".star_1").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_2").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_3").removeClass("fa-regular fa-star").addClass("fa fa-star");

})
$(".star_4").click(function(){

$(this).closest(".rev_star").find(".num").removeClass("fa fa-star").addClass("fa-regular fa-star");
$(this).closest(".rev_star").find(".star_1").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_2").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_3").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_4").removeClass("fa-regular fa-star").addClass("fa fa-star");

})
$(".star_5").click(function(){

$(this).closest(".rev_star").find(".num").removeClass("fa fa-star").addClass("fa-regular fa-star");
$(this).closest(".rev_star").find(".star_1").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_2").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_3").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_4").removeClass("fa-regular fa-star").addClass("fa fa-star");
$(this).closest(".rev_star").find(".star_5").removeClass("fa-regular fa-star").addClass("fa fa-star");

})

      })
$(function(){

  
  $(".num").click(function(){

var id_product = $(this).attr("id_product")
var rate = $(this).attr("rate")

console.log(id_product,rate)

$.post("functions/insert_rate.php",{

N_id_product : id_product ,
N_rate : rate

},function(){



})
  


})

})

$(function(){

  $("._search").keyup(function(){

   

    var search = $(this).val();

    console.log(search)

    if(search !=""){

      $.post("functions/search.php",{

N_search  : search 


},function(put){

$(".put").html(put)
$(".put").css("opacity",1);


})
     
    }else if (search == "") {
      $(".put").css("opacity",0);
}
    
    
 

   


  })
})

    </script>
    
</body>
</html>
<!-- <section class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s">
</section>

<section class="wow slideInRight" data-wow-offset="10"  data-wow-iteration="10">
</section> -->


