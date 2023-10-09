<?php
function selectOrderByProducts($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.product_id, product_name, product_price, order_date, order_quantity, store_name FROM `product` p join `order` o on o.product_id = p.product_id where o.product_id=?");        
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
