<?php
require_once("util-db.php");
require_once("model-shipping.php");

$pageTitle = "Shipping";
include "view-header.php";
$shipping = selectShipping();
include "view-shipping.php";
include "view-footer.php";
?>
