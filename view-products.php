<h1>Products</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th> 
        <th></th>
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
    <td>
      <form method=post"action="order-by-products.php">
        <input type="hidden" name="pid" value="<?php echo $order['product_id'];?>">
        
  <button type="submit" class="btn btn-primary">Orders</button>
</form>
    </td>
  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
