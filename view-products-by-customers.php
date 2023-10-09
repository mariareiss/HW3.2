<h1>Products By Customers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th> 
      <th>Date</th> 
      <th>Quantity</th> 
      <th>Store</th> 
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
   <td><?php echo $product['order_date'];?></td>   
   <td><?php echo $product['order_quantity'];?></td>   
   <td><?php echo $product['store_name'];?></td>   
  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
