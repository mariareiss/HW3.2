<?php
function selectcustomers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT customer_id, customer_name, customer_city, customer_phone FROM `customer`");
        $stmt->bind_param("s", $uEmail);
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
