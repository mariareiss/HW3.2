<h1>Products</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th> 
      </tr>
    </thead>
    <tbody>
<?php
while ($product = $products->fetch_assoc()){
?>
  <tr>
   <td><?php echo $product['product_id'];?></td> 
   <td><?php echo $product['product_name'];?></td> 
   <td><?php echo $product['product_price'];?></td>   
  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
