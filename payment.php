<?php
    require_once('connection.php');
    if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
    if (isset($_GET['payment'])) {
        $customer_id = $_SESSION['id'];
        $order_id = $_GET['payment'];
        $sql = "SELECT * FROM orders WHERE order_id = '$order_id' AND `customer_id` = '$customer_id' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();  
        $amount = $row['amount'];   
    }   
?>
                    <form method="post">
                        <div class="container shadow p-3 mb-3 bg-body rounded">
                            <h1 class="text-center my-4 display-5"> <b> Please Confirm Your Payment </b> </h1>
                            <div class="mb-3">
                                <label class="form-label">Order Id:</label>

                                <input type="number" value="<?= $order_id ?>" class="form-control" disabled>

                                <input type="number" value="<?= $order_id ?>" name="order_id" class="form-control" hidden="true">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Due Amount:</label>

                                <input type="number" value="<?= $amount ?>" class="form-control" disabled>

                                <input type="number" value="<?= $amount ?>" name="amount" class="form-control" hidden="true">

                            <div class="mb-3">
                                <label class="form-label">Select Payment Method:</label>

                                <select class="form-control" name="method_id" required="">

                                <option selected>Select Payment Method</option>
                            <?php
                                require_once('connection.php');
                                $sql = "SELECT * FROM payment_method";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) 
                                {
                            ?>
                                <option value="<?= $row['payment_method_id'] ?>"><?= $row['payment_method'] ?></option>
                            <?php
                                }
                            ?>

                            </select>
                            </div>
                            <div class="my-3">
                                <label class="form-label">Transaction/Reference Id:</label>

                                <input type="number" class="form-control" placeholder="Enter your Transaction id" name="trans_id" required="">

                            </div>
                            <div class="text-center">

                            <button class="btn btn-primary" name="payment">Confirm Payment</button> 
                            <!-- <span><img src="images/registartion icon.jpg" width="20"></span> -->

                            </div>
                        </div>
                    </form>
    <?php

    if(isset($_POST['payment'])) {
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        $customer_id = $_SESSION['id'];
        $order_id = $_POST['order_id'];
        $method_id = $_POST['method_id'];
        $amount = $_POST['amount'];
        $trans_id = $_POST['trans_id'];
            
        $sql = "INSERT INTO `payment` (customer_id, order_id, payment_method, amount ,transaction_id) VALUES('$customer_id', '$order_id', '$method_id', '$amount', '$trans_id')";
        $conn->query($sql);
        $sql5 = "UPDATE `orders` SET `status` = '1' WHERE order_id = '$order_id' ";
        if ($conn->query($sql5)) {
            echo "<script>window.location.href='my_account.php?my_orders'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
    ?>