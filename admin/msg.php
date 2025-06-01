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
    <li class="breadcrumb-item active">msg</li>
  </ol>


  <table class="table table-dark">

  <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>statues</th>
        <th>controls</th>

        
    </tr>
  </thead>

  <?php 

  $select_msg = $coon -> query("SELECT * FROM msg");

  $id = 1;

  foreach($select_msg as $row_msg){

 

   ?>

  <tbody>
    <tr>
        <td><?php echo $id++ ?></td>
        <td><?php echo $row_msg["name"]  ?></td>
        <td><?php echo $row_msg["email"]  ?></td>
        <td><?php echo $row_msg["number"]  ?></td>
        <td class="msg_status"><?php if( $row_msg["statues"] == 0){echo "unread";}else{echo "read";} ?></td>
        <td>
            <!-- Button trigger modal -->
<button type="button" msg-id="<?php echo $row_msg["id"] ?>" class="btn btn-primary msg_read" data-toggle="modal" data-target="#exampleModal<?php echo $row_msg["id"]   ?>">
view msg 
</button>

<!-- Modal -->
<div class="modal text-body  fade" id="exampleModal<?php echo $row_msg["id"]   ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php  echo $row_msg["name"]  ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php  echo $row_msg["msg"]  ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </td>
    </tr>
  </tbody>


  <?php } ?>

  </table>

  


</div>












<?php

include "design/footer.php";




?>