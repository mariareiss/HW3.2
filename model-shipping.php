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
function insertShipping($sDate, $sProduct) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Shipping` (`shipping_date`, `shipping_product`, `order_id`) VALUES (?, ?,?)");
        $stmt->bind_param("ss", $sDate, $sProduct);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateShipping($sDate, $sProduct, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `shipping` set `shipping_date`= ?, `shipping_product`= ? where shipping_id = ?");
        $stmt->bind_param("ssi", $sDate, $sProduct, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteShipping($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `shipping` where shipping_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
