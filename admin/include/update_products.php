<?php

$id = $_GET["id"];

$select_products = $coon -> query("SELECT * FROM products WHERE id = '$id'");

$details_products = $select_products -> fetch_assoc();





?>


<form method="post" action="functions/edaite_products.php" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $details_products["id"] ?>">
    

  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="name"
  value="<?php echo $details_products["name"] ?>"
    >
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" name="price" placeholder="price"  class="form-control" id="exampleInputEmail1"
    value="<?php echo $details_products["price"] ?>"
    >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="number" name="sale" placeholder="sale"  class="form-control" id="exampleInputEmail1"
    value="<?php echo $details_products["sale"] ?>"
    >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">seller</label>
    <input type="text" name="seller"  class="form-control" id="exampleInputEmail1" placeholder="seller"
    value="<?php echo $details_products["seller"] ?>"
    >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">quantity</label>
    <input type="number" name="quantity" placeholder="quantity"  class="form-control" id="exampleInputEmail1"
    value="<?php echo $details_products["quantity"] ?>"
    >
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="img[]" multiple class="form-control" id="exampleInputEmail1"
    
    >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">discrabtion</label>
    <input type="text" name="discrabtion"  placeholder="discrabtion" class="form-control" id="exampleInputEmail1" 
    value="<?php echo $details_products["discrption"] ?>"
    >
  </div>





  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>