<?php
require_once("util-db.php");
require_once("model-products.php");

$pageTitle = "Products";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']){
    case "Add":
    insertProduct($_POST['pName'], $_POST['pPrice']);
    break;
  }
}

$products = selectProducts();
include "view-products.php";
include "view-footer.php";
?>
