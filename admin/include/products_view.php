<a class="btn btn-dark m-2" href="?products=add"> add products</a>
<table class="table table-dark">

<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>img</th>
        <th>price</th>
        <th>sale</th>
        <th>seller</th>
        <th>quantity</th>
        <th>discrption</th>
        <th>date</th>
        <th>controls</th>
    </tr>
</thead>

<?php

$id = 1 ;

$select_products = $coon -> query("SELECT * FROM products");



foreach($select_products as $row_produscts){

$view_img = $row_produscts["img"];

$arr = explode("+",$view_img);

$count = count($arr);


?>

<tbody>
    <tr>
        <td><?php  echo $id++ ?></td>
        <td><?php  echo $row_produscts["name"] ?></td>
        <td> <?php  for($i=0 ; $i < $count ; $i++ ){ ?><img style="width:80px; height:80px;" src=" images/<?php  echo $arr[$i] ?>"  > <?php } ?> </td> 
        <td><?php  echo $row_produscts["price"]  ?></td>
        <td><?php  echo $row_produscts["sale"]  ?></td>
        <td><?php  echo $row_produscts["seller"]  ?></td>
        <td><?php  echo $row_produscts["quantity"]  ?></td>
        <td><?php  echo $row_produscts["discrption"]  ?></td>
        <td><?php  echo $row_produscts["date"]  ?></td>
        <td><a class="btn btn-primary" href="?products=update&&id=<?php echo $row_produscts["id"] ?>">update</a></td>
    </tr>
</tbody>

<?php  } ?>
</table>