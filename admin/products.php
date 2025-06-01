<?php
include "design/navbar.php";
include "design/sidebar.php";


?>



<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">products</li>
  </ol>


    <?php

    if(!isset($_GET["products"])){

        include "include/products_view.php";

    }elseif($_GET["products"] == "add"){

      include "include/add_products.php";

    }elseif($_GET["products"] == "update"){

      include "include/update_products.php";
      
    }



    ?>


</div>





















<?php
include "design/footer.php";





?>