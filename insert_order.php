<?php
    require_once('connection.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $customer_id =  $_SESSION['id'];

    if (isset($_SESSION['total_discount'])) {
        $total_discount = $_SESSION['total_discount'];
        $sql1 = "INSERT INTO `orders` (customer_id, amount) VALUES('$customer_id', '$total_discount')";
        $result1 = $conn->query($sql1);
    }
    elseif (isset($_SESSION['total'])) {
        $total = $_SESSION['total'];
        $sql1 = "INSERT INTO `orders` (customer_id, amount) VALUES('$customer_id', '$total')";
        $result1 = $conn->query($sql1);
    }

    $order_id =$conn-> insert_id; 
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $customer_id = $_SESSION['id'];
    $sql = "SELECT * FROM cart WHERE customer_id = '$customer_id' ";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $pro_id = $row['pro_id'];
        $quantity = $row['quantity'];
        $sale_price = $row['sale_price'];
        
        $sql2 = "INSERT INTO `order_items` (order_id, product_id, quantity, price ) VALUES('$order_id', '$pro_id', '$quantity', '$sale_price' )";
        $result2 = $conn->query($sql2);
    }

    if ($result2) {
        $sql3 = "DELETE FROM cart";
        $conn->query($sql3);
        echo "<script>window.location.href='my_account.php?my_orders'</script>";
        unset($_SESSION['total']);
        unset($_SESSION['total_discount']);
    }
?>