<?php
require_once("util-db.php");
require_once("model-products-by-customers.php");

$pageTitle = "Products by Customer";
include "view-header.php";
$products = selectProductsByCustomers($_GET['id']);
include "view-products-by-customers.php";
include "view-footer.php";
?>
