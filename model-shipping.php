<?php
function selectShipping() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT shipping_id, shipping_date, shipping_product FROM `Shipping`");        
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
