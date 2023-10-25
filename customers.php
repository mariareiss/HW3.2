<?php
require_once("util-db.php");
require_once("model-customers.php");

$pageTitle = "Customers";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if (insertCustomers($_POST['cName'], $_POST['cCity'], $_POST['cPhone'])){
      echo '<div class="alert alert-success" role="alert">Customer added.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Edit":
    if (updateCustomer($_POST['cName'], $_POST['cCity'], $_POST['cPhone'], $_POST['cid'])){
      echo '<div class="alert alert-success" role="alert">Customer edited.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Delete":
    if (deleteCustomer($_POST['cid'])){
      echo '<div class="alert alert-success" role="alert">Customer deleted.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
  }
}
$customers = selectCustomers();
include "view-customers.php";
include "view-footer.php";
?>
