<?php
require_once("util-db.php");
require_once("model-products.php");

$pageTitle = "Products";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if (insertProduct($_POST['pName'], $_POST['pPrice'])){
      echo '<div class="alert alert-success" role="alert">Product added.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Delete":
    if (deleteProduct($_POST['pid'])){
      echo '<div class="alert alert-success" role="alert">Product deleted.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
  }
}

$products = selectProducts();
include "view-products.php";
include "view-footer.php";
?>
