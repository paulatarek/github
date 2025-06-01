<form class="p-3" method="post" action="functions/add_users.php">
  <div class="form-group ">

    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="name">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" placeholder="email"  class="form-control" id="exampleInputEmail1" >
  </div>
      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" placeholder="phone"  class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address"  placeholder="address" class="form-control" id="exampleInputEmail1" >
  </div>
<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">number</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
<?php


    $select_users = $coon->query("SELECT * FROM admin");

    foreach($select_users as $row_users): ?>
    
      <option value="<?php echo $row_users['number']  ?>" ><?php echo $row_users['name'] ?></option>
      <?php   endforeach ?>
    
    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>