<div class="breadcrumb">
    <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Order Details</h5>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> View Orders Details</span></p></div>
    <?php
        require_once('connection.php');
        if (isset($_GET['order_detail'])) {
            $order_detail_id = $_GET['order_detail'];
            $sql = "SELECT * FROM order_items WHERE order_id = '$order_detail_id'";
            $result = $conn->query($sql);
        }
    ?>
    <div class="panel-body">
    <div class="text-center">
    <div class="container-fluid">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 50px">Sr.</th> 
                            <th scope="col" class="text-center">Product Name</th>
                            <th scope="col" class="text-center">Product Picture</th>
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
                                    <img src="aimages/<?php echo $row3['image_1'] ?>" alt="product" style="border-radius: 50%" height="40" width="40"> <?= $row2['title']?>
                            </td>
                            <td>
                                <img src="aimages/<?php echo $row3['image_1'] ?>" alt="product" height="80" width="70">
                            </td>
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
    </div>
</div>