<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'mariarei_hw3user', 'duda19.11', 'mariarei_HW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
