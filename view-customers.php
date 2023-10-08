<h1>Customers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>City</th>
      <th>Phone</th>  
      </tr>
    </thead>
    <tbody>
<?php
while ($customer = $customers->fetch_assoc()){
?>
  <tr>
   <td><?php echo $customers['customer_id'];?></td> 
   <td><?php echo $customers['customer_name'];?></td>
   <td><?php echo $customers['customer_city'];?></td>
   <td><?php echo $customers['customer_phone'];?></td>    
  </tr>
<?php
}  
?>
    </tbody>
  </table>
</div>
