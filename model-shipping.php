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
        $stmt = $conn->prepare("INSERT INTO `Shipping` (`shipping_date`, `shipping_product`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sDate, $sProduct);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateShipping($sDate, $sProduct, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `shipping` set `shipping_date`= ?, `shipping_product`= ? where shipping_id = ?");
        $stmt->bind_param("ssi", $sDate, $sProduct, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteShipping($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `shipping` where shipping_id=?");
        $stmt->bind_param("i", $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
