<form method="post" action="functions/insert_products.php" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="name">
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" name="price" placeholder="price"  class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="number" name="sale" placeholder="sale"  class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">seller</label>
    <input type="text" name="seller"  class="form-control" id="exampleInputEmail1" placeholder="seller">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">quantity</label>
    <input type="number" name="quantity" placeholder="quantity"  class="form-control" id="exampleInputEmail1" >
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="img[]" multiple class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">discrabtion</label>
    <input type="text" name="discrabtion"  placeholder="discrabtion" class="form-control" id="exampleInputEmail1" >
  </div>





  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>