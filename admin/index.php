<?php
    session_start();
    if(isset($_SESSION['email'])){  // yha SESSION ma jo 5 chiza ha wha sa koi b compare kr skta ha
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $country = $_SESSION['country'];
        $picture = $_SESSION['picture']; 
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Admin Panel</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }
            
            body {
                background-color: #E6E6E6;
            }
            
            #nav-1 {
                background-color: black;
                --bs-gutter-x: 0rem;
                margin-bottom: 0px;
                padding-right: 0px;
                width: 1349px;
            }
            
            #nav-1 a {
                color: red;
            }
            
            #nav-2 {
                /* width: 80%; */
                padding: 10px 5px;
                background-color: black;
            }
            
            .row {
                margin-right: 0px;
            }
            
            #nav-2 a {
                color: red;
            }
            
            #nav-2 a:hover {
                background-color: black;
            }
            
            .p-heading {
                padding: 20px;
            }
            
            .iconic {
                font-size: 50px;
            }
            
            label {
                font-size: 17px;
            }

            th , td{
                text-align: center;
            }

        </style>
    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <?php
                include('topnav.php')
            ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
            <?php
                include('sidebar.php');
            ?>
            </div>
            <div class="col-md-10" style="background-color: #F9F9F9;">
                <?php
                if(isset($_GET['dashboard'])){
                    include('dashboard.php');
                }
                if(isset($_GET['insert_products'])){
                    include('insert_products.php');
                }
                if(isset($_GET['insert_slide'])){
                    include('insert_slide.php');
                }
                if(isset($_GET['insert_box'])){
                    include('insert_box.php');
                }
                if(isset($_GET['insert_product_category'])){
                    include('insert_product_category.php');
                }
                if(isset($_GET['insert_manufacturer'])){
                    include('insert_manufacturer.php');
                }
                if(isset($_GET['view_box'])){
                    include('view_box.php');
                }
                if(isset($_GET['view_manufacturer'])){
                    include('view_manufacturer.php');
                }
                if(isset($_GET['view_slides'])){
                    include('view_slides.php');
                }
                if(isset($_GET['view_product_category'])){
                    include('view_product_category.php');
                }
                if(isset($_GET['view_products'])){
                    include('view_products.php');
                }
                if(isset($_GET['edit_product_id'])){
                    include('edit_products.php');
                }
                if(isset($_GET['edit_slide_id'])){
                    include('edit_slide.php');
                }
                if(isset($_GET['edit_box_id'])){
                    include('edit_box.php');
                }
                if(isset($_GET['edit_procat_id'])){
                    include('edit_product_category.php');
                }
                if(isset($_GET['edit_manufacturer_id'])){
                    include('edit_manufacturer.php');
                }
                if(isset($_GET['delete_manufacturer_id'])){
                    include('view_manufacturer.php');
                }
                if(isset($_GET['delete_procat_id'])){
                    include('view_product_category.php');
                }
                if(isset($_GET['delete_box_id'])){
                    include('view_box.php');
                }
                if(isset($_GET['delete_slide_id'])){
                    include('view_slides.php');
                }
                if(isset($_GET['delete_product_id'])){
                    include('view_products.php');
                }
                if(isset($_GET['insert_users'])){
                    include('insert_users.php');
                }
                if(isset($_GET['view_users'])){
                    include('view_users.php');
                }
                if(isset($_GET['delete_user_id'])){
                    include('view_users.php');
                }
                if(isset($_GET['edit_user_id'])){
                    include('edit_user.php');
                }
                if(isset($_GET['insert_stock'])){
                    include('insert_stock.php');
                }
                if(isset($_GET['view_stock'])){
                    include('view_stock.php');
                }
                if(isset($_GET['delete_stock_id'])){
                    include('view_stock.php');
                }
                if(isset($_GET['edit_stock_id'])){
                    include('edit_stock.php');
                }
                if(isset($_GET['insert_logo'])){
                    include('insert_logo.php');
                }
                if(isset($_GET['view_logo'])){
                    include('view_logo.php');
                }
                if(isset($_GET['delete_logo_id'])){
                    include('view_logo.php');
                }
                if(isset($_GET['edit_logo_id'])){
                    include('edit_logo.php');
                }
                if(isset($_GET['insert_coupon'])){
                    include('insert_coupon.php');
                }
                if(isset($_GET['view_coupon'])){
                    include('view_coupon.php');
                }
                if(isset($_GET['delete_coupon_id'])){
                    include('view_coupon.php');
                }
                if(isset($_GET['edit_coupon_id'])){
                    include('edit_coupon.php');
                }
                if(isset($_GET['view_registration'])){
                    include('view_registration.php');
                }
                if(isset($_GET['delete_customer_id'])){
                    include('view_registration.php');
                }
                if(isset($_GET['insert_payment_method'])){
                    include('insert_payment_method.php');
                }
                if(isset($_GET['view_payment_method'])){
                    include('view_payment_method.php');
                }
                if(isset($_GET['delete_payment_method_id'])){
                    include('view_payment_method.php');
                }
                if(isset($_GET['edit_payment_method_id'])){
                    include('edit_payment_method.php');
                }
                if(isset($_GET['view_orders'])){
                    include('view_orders.php');
                }
                if(isset($_GET['edit_order_id'])){
                    include('edit_order.php');
                }
                if(isset($_GET['order_detail'])){
                    include('view_order_details.php');
                }
                if(isset($_GET['view_payments'])){
                    include('view_payments.php');
                }
                if(isset($_GET['delete_payment_id'])){
                    include('view_payments.php');
                }
                if(isset($_GET['view_wishlist'])){
                    include('view_wishlist.php');
                }
            ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

    </html>

    <?php
    }
    else{
        echo "<script>window.location.href='user_login.php'</script>";
    }
?>