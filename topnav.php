<?php
    require_once('connection.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_SESSION['id'])){
        $customer_id = $_SESSION['id'];
        $sql = "SELECT * FROM cart WHERE customer_id = '$customer_id' ";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);
    }
    else{
        $count = 0;
    }
   
?>


<div class="navbar1  bg-primary row text-white">
    <div class="col-md-5">
        <div class="btn btn-success">Welcome Guest</div>
        <span>Shopping Cart Total Price:
        <?php
            if(isset($_SESSION['total_discount'])){
                echo $_SESSION['total_discount'];
            }
            else{
                if(isset($_SESSION['total'])){
                    echo $_SESSION['total'];
                }
                else {
                    echo "0";
                }
            }
        ?>
        , Total Items <?= $count; ?></span>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <nav style="margin-top: 6px;">
        <?php

            
            if(isset($_SESSION['name']))
            {
        ?>
                <a href="#"><?= $_SESSION['name'];?> | </a>
                <a href="my_account.php?my_orders">My Account | </a>
                <a href="cart.php">Go to Cart | </a>
                <a href="logout.php">Logout  </a>
                <?php
            }
            else
            {
                ?>
                <a href="customer_registration.php"> Register | </a>
                <a href="contact_us.php">Contact Us | </a>
                <a href="cart.php">Go to Cart | </a>
                <a href="login.php">Login  </a>
        <?php
            }
        ?>
        </nav>
    </div>
</div>
