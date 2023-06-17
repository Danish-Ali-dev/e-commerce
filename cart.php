<?php
    session_start();
    if(isset($_SESSION['id'])){  
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];

    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_cart_id'])){
        $delete_id = $_GET['delete_cart_id'];
        $sql = "DELETE FROM cart WHERE cart_id = '$delete_id' ";

        if($conn->query($sql)){
            $result = true;
        }
        else{
            echo "<br>Error". $conn->connect_error;
        }
        if ($result == true) {
            echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been Deleted Successfully!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }
          else{
            echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button> </div>';
          }
    }
?>

<?php
    require_once('connection.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    //$ip = $_SERVER['REMOTE_ADDR'];  issa ip get hoti ha
    // $sql = "SELECT * FROM cart WHERE ip = '$ip';    ip sa compare krna ki Query
    
    $customer_id = $_SESSION['id'];   
    $sql = "SELECT * FROM cart WHERE customer_id = '$customer_id' ";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $cart = array();
    $stotal = 0;
    while ($row = $result->fetch_assoc()) {
        array_push($cart, $row);
        $sub_total = $row['quantity'] * $row['sale_price'];
        $stotal += $sub_total;
    }
    if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
    $_SESSION['total'] = $stotal;

    $title = "Cart";
    $label = "You also like these Products";
    require_once('head.php');
?>

    <header>
        <?php
            require_once('topnav.php');
            require_once('navbar.php');
        ?>
    </header>
    <main>
        <div class="container">
            <?php
                $location = "Cart";
                require_once('location.php');
            ?>
                <div class="row">
                    <div class="col-md-12 col-sm-12" style="background-color: white">
                        <br>
                        <h2>Shopping Cart</h2>
                        <p style="opacity: 0.7;">You currently have <?= $count; ?> item(s) in your cart</p>
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
                                <?php
                                    $sno = 1;
                                    $total = 0;
                                    for ($i=0; $i < sizeof($cart); $i++) { 
                                        $sub_total = $cart[$i]['quantity'] * $cart[$i]['sale_price'];
                                        $total += $sub_total;
                                        
                                ?>
                                    <tr>
                                        <td><b><?= $sno ?></b></td>
                                        <td><b><?= $cart[$i]['pro_title'] ?></b></td>
                                        <td><b><?= $cart[$i]['quantity'] ?></b></td>
                                        <td><b><?= $cart[$i]['sale_price'] ?></b></td>
                                        <td><b><a href="cart.php?delete_cart_id=<?= $cart[$i]['cart_id']; ?>"><i class="bi bi-trash-fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path  d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                        </i></a></b></td>
                                        <td><b><?= $sub_total ?></b></td>
                                    </tr>
                                    <?php
                                    $sno++;
                                        }
                                    ?>
                                        <tr>
                                            <td><b>Total</b></td>
                                            <td><b></b></td>
                                            <td><b></b></td>
                                            <td><b></b></td>
                                            <td><b></b></td>
                                            <td><b><?= $total ?></b></td>
                                        </tr>
                            </tbody>
                        </table>
                        <div style="float: right;">
                        
                        </div>
                        <a href="index.php" class="btn btn-secondary mb-3"> <b><</b> Continue Shopping </a>
                        <div style="float: right;">
                        <?php
                            if ($count > 0) {
                        ?>
                                <a href="checkout.php" class="btn btn-primary mb-3">Proceed to checkout <b>></b></a>
                        <?php
                            }
                            else {
                        ?>
                                <a href="all_products.php" class="btn btn-primary mb-3">Add Product to Cart <b>></b></a>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
        </div>
        <br> <br>
        <?php
            require_once('label.php');
            require_once('products.php');
        ?>
    </main>
    <footer class=" mt-5 line" style="font-size: 15px;">
        <?php
            require_once('footer.php');
        ?>
    </footer>
    <?php
        require_once('bottom.php');

    }
    else{
        ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
            aria-label="Warning:">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div>
            You are not logged in. PLease <a href="login.php">Login</a> to continue 
        </div>
    </div>
    <?php
        }
    ?>