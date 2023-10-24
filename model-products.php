<?php
function selectProducts() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT product_id, product_name, product_price FROM `product`");        
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertProduct($pName, $pPrice) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `product` (`product_name`, `product_price`) VALUES (?, ?)");
        $stmt->bind_param("ss", $pName, $pPrice);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateProduct($pName, $pPrice, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `product` set `product_name`= ?, `product_price`= ? where product_id = ?");
        $stmt->bind_param("ssi", $pName, $pPrice, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteProduct($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `product` where product_id=?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
