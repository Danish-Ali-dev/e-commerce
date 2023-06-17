<div class="breadcrumb">
    <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Wishlist</h5>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> View Wishlist</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="order_table text-center">
                    <div class="container-fluid">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Sr no</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Picture</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Wishlist Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once('connection.php');
                                    $sql = "SELECT * FROM wishlist";
                                    $result = $conn->query($sql);
                                    $sno = 1;
                                    while($row = $result->fetch_assoc())
                                    {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $sno ?></th>
                                        <td>
                                            <?php
                                                $customer_id = $row['customer_id'];
                                                $sql4 = "SELECT name FROM registration WHERE id = '$customer_id' ";
                                                $result4 = $conn->query($sql4);
                                                $row4 = $result4->fetch_assoc();
                                                echo $row4['name'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                $product_id = $row['product_id'];
                                                $sql1 = "SELECT title FROM insert_product WHERE id = '$product_id' ";
                                                $result1 = $conn->query($sql1);
                                                $row1 = $result1->fetch_assoc();

                                                $sql3 = "SELECT * FROM insert_product WHERE id = '$product_id' ";
                                                $result3 = $conn->query($sql3);
                                                $row3 = $result3->fetch_assoc();
                                            ?>
                                            <img src="aimages/<?php echo $row3['image_1'] ?>" alt="product" style="border-radius: 50%" height="40" width="40"> <?= $row1['title'] ?>
                                        </td>
                                        <td>
                                            <img src="aimages/<?php echo $row3['image_1'] ?>" alt="product" height="80" width="70">
                                        </td>
                                        <td>
                                            <?= $row['quantity'] ?>
                                        </td>
                                        <td>
                                            <?= $row['date/time'] ?>
                                        </td>
                                    </tr>
                                    <?php
                            $sno++;
                            }
                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>