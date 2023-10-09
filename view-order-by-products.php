<h1>Order By Products</h1>
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
while ($orders = $orders->fetch_assoc()){
?>
  <tr>
   <td><?php echo $order['product_id'];?></td> 
   <td><?php echo $order['product_name'];?></td> 
   <td><?php echo $order['product_price'];?></td>   
   <td><?php echo $order['order_date'];?></td>   
   <td><?php echo $order['order_quantity'];?></td>   
   <td><?php echo $order['store_name'];?></td>   
  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
