<?php
require_once("util-db.php");
require_once("model-shipping.php");

$pageTitle = "Shipping";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    if (insertShipping($_POST['sDate'], $_POST['sProduct'], $_POST['sOrder'])){
      echo '<div class="alert alert-success" role="alert">Shipping added.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Edit":
    if (updateShipping($_POST['sDate'], $_POST['sProduct'], $_POST['sid'])){
      echo '<div class="alert alert-success" role="alert">Shipping edited.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
    case "Delete":
    if (deleteShipping($_POST['sid'])){
      echo '<div class="alert alert-success" role="alert">Shipping deleted.</div>';
    } else {
      echo '<div class="alert alert-error" role="alert">Error</div>';      
    }
    break;
  }
}

$shipping = selectShipping();
include "view-shipping.php";
include "view-footer.php";
?>
