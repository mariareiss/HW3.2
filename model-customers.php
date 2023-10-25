<?php
function selectCustomers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT customer_id, customer_name, customer_city, customer_phone FROM `customer`");        
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertCustomer($cName, $cCity, $cPhone) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `customer` (`customer_name`, `customer_city`, `customer_phone`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $cName, $cCity, $cPhone);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateCustomer($cName, $cCity, $cPhone, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `customer` set `customer_city`= ?, `customer_phone`= ? where customer_id = ?");
        $stmt->bind_param("ssi", $cCity, $cPhone, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteCustomer($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `customer` where customer_id=?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
