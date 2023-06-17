<?php
    require_once('connection.php');
    $key = $_GET['search_id'];
    $sql = "SELECT title FROM insert_product WHERE title LIKE '%$key%' ";
    echo $sql;
    $result = $conn->query($sql);
    $values = array();
    while ($row = $result->fetch_assoc()) {
        array_push($values, $row);
    }
    echo json_encode($values);
?>