<h1>Customers Purchases</h1>
<div class="card-group">


<?php
while ($customer = $customers->fetch_assoc()){
?>
    <div class="card">    
    <div class="card-body">
      <h5 class="card-title"><?php echo $customer['customer_name'];?></h5>
      <p class="card-text">
      <ul class="list-group">
  <?php
    $products= selectProductsByCustomers($customer['customer_id']);
  while ($product = $products->fetch_assoc(){
 ?>
         <li class="list-group-item"><?php echo $product['product_name'];?> - <?php echo $product['product_price'];?> -  <?php echo $product['order_date'];?> - <?php echo $product['store_name'];?></li>
         
 <?php
  }
  ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Phone: <?php echo $customer['customer_phone'];?></small></p>
    </div>
  </div>
  
<?php
}  
?>
</div>
