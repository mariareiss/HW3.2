<h1>Shipping</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Product</th>
      <th>Date</th> 
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($shipping = $shipping->fetch_assoc()){
?>
  <tr>
   <td><?php echo $shipping['shipping_id'];?></td> 
   <td><?php echo $shipping['shipping_product'];?></td>
   <td><?php echo $shipping['shipping_date'];?></td>
   
   <td><a href="products-by-customers.php?id=<?php echo $customer['customer_id'];?>">Products</a></td>
  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
