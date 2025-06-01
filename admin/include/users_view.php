 
<?php


 $id = $_SESSION["login"];

$select_priv = $coon -> query("SELECT * FROM users WHERE id='$id'");

$detail_users =  $select_priv -> fetch_assoc() ;

$priv_login =  $detail_users["priv"];



?>

<a class="btn btn-primary m-2" href="?users=add">add users</a>
<table class="table table-dark">



<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <!-- <th>password</th> -->
        <th>phone</th>
        <th>address</th>
        <th>gender</th>
        <th>priv</th>
        <th>control</th>
    </tr>
</thead>

<?php

$select_users = $coon -> query("SELECT * FROM users");

$id = 1;

foreach($select_users  as $row_users){





?>



<tbody>
    <tr>
        <td><?php echo $id++  ?></td>
        <td><?php echo $row_users["name"] ?></td>
        <td><?php echo $row_users["email"]  ?></td>
        <td><?php echo $row_users["phone"]  ?></td>
        <td><?php echo $row_users["address"]  ?></td>
        <td><?php if($row_users["gender"] == 0){echo "male";}else{echo "female";} ?></td>
        <td>
            <?php if($row_users["priv"] == 300) {echo "owner";} ?>
            <?php if($row_users["priv"]== 200) {echo "admin";} ?>
            <?php if($row_users["priv"]== 100) {echo "user";}?>
        </td>
        <td>
            <a <?php if( $priv_login < $row_users["priv"]){echo "hidden";}  ?>  class="btn btn-success " href="?users=edaite&&id=<?php echo $row_users["id"] ?>">edaite</a>

            <!-- Button trigger modal -->
<button type="button" <?php if( $priv_login < $row_users["priv"]){echo "hidden";}  ?> class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row_users["id"] ?>">
  delete
</button>

<!-- Modal -->
<div class="modal fade text-body" id="exampleModalCenter<?php echo $row_users["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title-dark" id="exampleModalLongTitle"> <?php echo $row_users["name"] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      are you sure delete thhis users <?php echo $row_users["name"] ?> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-danger">delete</button> -->
        <a href="functions/delete_users.php?id=<?php echo$row_users['id'] ?>" class="btn btn-danger">confirm</a>
      </div>
    </div>
  </div>
</div>
        </td>
    </tr>
    
</tbody>

<?php } ?>
</table>