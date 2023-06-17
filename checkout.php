<?php
    $title = "Check Out";
    require_once('head.php');
?>
<header>
    <?php
        require_once('topnav.php');
        require_once('navbar.php');

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
    ?>
</header>
<main>
    <div class="container">
        <?php
            $location = "Check Out";
            require_once('location.php');
        ?>
        <div class="text-center">
            <h1 class="display-4"> <b> Payment Option for you </b> </h1>
        </div>
        <div>
            <p class="text-center">If you have any voucher then apply voucher below</p>
        </div>    
            <div class="col-md-6 mx-auto">
                <form method="post">
                    <div class="row">
                        <div class="col-md-3 pull-right">
                            <label for="coupon" class="pull-right"> <b> Coupon Code:</b></label>
                        </div>
                    <div class="col-md-4">
                        <input type="text" id="coupon" class="form-control" placeholder="Enter Coupon Code" name="code">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-dark" name="apply">Apply Coupon</button>
                    </div>
                </form>
                <br>
            </div>
                        <?php
                            if (isset($_SESSION['total_discount'])) {
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sr.</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                            <td><b>Total</b></td>
                                            <td><b></b></td>
                                            <td><b></b></td>
                                            <td><b></b></td>
                                            <td><b></b></td>
                                            <td><b><?= $_SESSION['total_discount'] ?></b></td>
                                        </tr>
                                        </table>
                                        <?php
                                            }
                                        ?>
                            </tbody>
                        </table>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="insert_order.php" class="btn btn-primary mb-3" style="text-decoration: none; font-size: 17px;">Proceed to Order</a>
    </div>
    <br>
</main>
<footer class=" mt-5 line" style="font-size: 15px;">
    <?php
        require_once('footer.php');
    ?>
    
</footer>
<?php
    require_once('bottom.php');

if(isset($_POST['apply'])){
    $code = $_POST['code'];
    $sql = "SELECT * FROM coupon WHERE coupon_code = '$code' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $coupon_discount = $row['coupon_discount'];
    $total_dis = $_SESSION['total'] - $coupon_discount;

    $_SESSION['total_discount'] = $total_dis;
    return;
    }
?>