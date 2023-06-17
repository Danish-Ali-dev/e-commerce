<div class="breadcrumb">
    <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Orders</h5>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> View Orders</span></p></div>
    <div class="panel-body">
    <div class="order_table text-center">
            <div class="container-fluid">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Sr.</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Due Amount</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">View Details</th>
                            <th scope="col">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once('connection.php');
                            $sql = "SELECT * FROM orders";
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
                                    $sql1 = "SELECT name FROM registration WHERE id = '$customer_id' ";
                                    $result1 = $conn->query($sql1);
                                    $row1 = $result1->fetch_assoc();
                                    echo $row1['name'];
                                ?>
                            </td>
                            <td><?= $row['order_id'] ?></td>
                            <td><?= $row['amount'] ?></td>
                            <td><?= $row['date/time'] ?></td>
                            <td> <?php if($row['status'] == 0){
                                echo "Unpaid";
                            }
                            elseif($row['status'] == 1){
                                echo "Processing";
                            }
                            else{
                                echo "Paid";
                            }
                            ?> </td>
                            <td>
                            <a href="index.php?order_detail=<?= $row['order_id']; ?>"class="btn btn-primary"> <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                            </td>
                            <td><a href="index.php?edit_order_id=<?php echo $row['order_id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
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