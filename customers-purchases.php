<?php
require_once("util-db.php");
require_once("model-customers-purchases.php");

$pageTitle = "Customers Purchases";
include "view-header.php";
$customers = selectCustomers();
include "view-customers-purchases.php";
include "view-footer.php";
?>
