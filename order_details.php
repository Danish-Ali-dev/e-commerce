<?php
        $title = "Order Details";
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
            <div class="row my-3">
            <?php
                $location = "Order Details";
                require_once('location.php');

                if (isset($_GET['order_detail'])) {
                    $order_detail_id = $_GET['order_detail'];
                    $sql = "SELECT * FROM order_items WHERE order_id = '$order_detail_id'";
                    $result = $conn->query($sql);
                }
            ?>
            </div>
        </div>
        <div class="order_table text-center container">
            <div class="mt-4">
                <h1>Order Details</h1>
            </div>
            <p>Your Orders on one place</p>
            <p>If you have any questions, please feel free to <a href="contact_us.php" style="text-decoration: none;">contact us</a>, our customer service center is working for you 24/7.</p>
            <div class="container-fluid">
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sr no</th> 
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Picture</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sno = 1;
                            while($row = $result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            <th scope="row"><?= $sno ?></th>
                            <td>
                                <?php
                                    $product_id = $row['product_id'];
                                    $sql2 = "SELECT title FROM insert_product WHERE id = '$product_id' ";
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();

                                    $sql3 = "SELECT * FROM insert_product WHERE id = '$product_id' ";
                                    $result3 = $conn->query($sql3);
                                    $row3 = $result3->fetch_assoc();
                                ?>
                                    <img src="admin/aimages/<?php echo $row3['image_1'] ?>" alt="product" style="border-radius: 50%" height="40" width="40"> <?= $row2['title'] ?>
                            </td>
                            <td><img src="admin/aimages/<?php echo $row3['image_1'] ?>" alt="product" height="70" width="80"></td>
                            <td><?= $row['price'] ?></td>
                            <td><?= $row['quantity'] ?></td>
                            <td><?= $row['quantity'] *  $row['price'] ?></td>
                        <?php
                            $sno++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
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
    ?>