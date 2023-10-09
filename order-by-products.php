<?php
require_once("util-db.php");
require_once("model-order-by-products.php");

$pageTitle = "Order by Products";
include "view-header.php";
$orders = selectOrderByProducts($_POST['pid']);
include "view-order-by-products.php";
include "view-footer.php";
?>
