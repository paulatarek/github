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
    <li class="breadcrumb-item active">404 Error</li>
  </ol>


  <?php
  if(!isset($_GET["users"])){

    include "include/users_view.php";

  }elseif($_GET["users"] == "add"){

    include "include/insert_users.php";

  }elseif($_GET["users"] == "edaite"){

    include "include/edaite.php";

  }


    ?>



</div>





















<?php

include "design/footer.php";


?>