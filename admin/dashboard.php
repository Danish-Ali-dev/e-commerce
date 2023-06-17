<div class="row">
    <div class="col-md-12">
        <h1 class="display-3"><b>Dashboard</b></h1>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><span class="glyphicon glyphicon-retweet"></span> Dashboard</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row" style="color: white;">
    <div class="col-md-3 boxes" id="box-1">
        <div class="panel panel-primary">
            <div class="panel-heading p-heading">
                <span class="glyphicon glyphicon-th-list iconic"></span>
                <?php
                    require_once('connection.php');
                    $sql1 = "SELECT * FROM insert_product";
                    $result1 = $conn->query($sql1);
                    $count1 = mysqli_num_rows($result1);

                ?>
                <div style="float: right; margin-top: -15px;"><span style="font-size: 40px;"><?=$count1?></span> <br> <span>Products</span></div>
            </div>
            <div class="panel-footer">
                <div>
                    <a href="index.php?view_products">View Details<span class="glyphicon glyphicon-circle-arrow-right" style="float: right; color: #337AB7; font-size: 17px;"></span> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 boxes" id="box-2">
        <div class="panel" style="background-color: #5CD85C;">
            <div class="panel-heading p-heading">
                <span class="glyphicon glyphicon-comment iconic" style="color: white;"></span>
                <?php
                    require_once('connection.php');
                    $sql2 = "SELECT * FROM registration";
                    $result2 = $conn->query($sql2);
                    $count2 = mysqli_num_rows($result2);

                ?>
                <div style="float: right; margin-top: -15px;"><span style="font-size: 40px; margin-left: 40px;"><?= $count2 ?></span> <br> <span>Customers</span></div>
            </div>
            <div class="panel-footer">
                <div>
                    <a href="index.php?view_registration">View Details<span class="glyphicon glyphicon-circle-arrow-right" style="float: right; color: #5CD85C; font-size: 17px;"></span> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 boxes" id="box-3">
        <div class="panel" style="background-color: #EFAD4D;">
            <div class="panel-heading p-heading">
                <span class="glyphicon glyphicon-shopping-cart iconic" style="color: white;"></span>
                <?php
                    require_once('connection.php');
                    $sql3 = "SELECT * FROM insert_product_category";
                    $result3 = $conn->query($sql3);
                    $count3 = mysqli_num_rows($result3)
                ?>
                <div style="float: right; margin-top: -15px;"><span style="font-size: 40px; margin-left: 89px;"><?= $count3 ?></span> <br> <span>Product Categories</span></div>
            </div>
            <div class="panel-footer">
                <div>
                    <a href="index.php?view_product_category">View Details<span class="glyphicon glyphicon-circle-arrow-right" style="float: right; color: #EFAD4D; font-size: 17px;"></span> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 boxes" id="box-4">
        <div class="panel" style="background-color: #D9544F">
            <div class="panel-heading p-heading">
                <span class="glyphicon glyphicon-globe iconic" style="color: white;"></span>
                <?php
                    require_once('connection.php');
                    $sql4 = "SELECT * FROM orders";
                    $result4 = $conn->query($sql4);
                    $count4 = mysqli_num_rows($result4)
                ?>
                <div style="float: right; margin-top: -15px;"><span style="font-size: 40px; margin-left: 20px;"><?= $count4 ?></span> <br> <span>Orders</span></div>
            </div>
            <div class="panel-footer">
                <div>
                    <a href="index.php?view_orders">View Details <span class="glyphicon glyphicon-circle-arrow-right" style="float: right; color: #D9544F; font-size: 17px;"></span> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col-md-8">
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
                                    $sql5 = "SELECT name FROM registration WHERE id = '$customer_id' ";
                                    $result5 = $conn->query($sql5);
                                    $row5 = $result5->fetch_assoc();
                                    echo $row5['name'];
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
    </div>
    <div class="col-md-4" style="background-color: white;">
        <br>
        <div>
            <img src="aimages/<?php echo $picture; ?>" alt="<?php echo $picture; ?>" width="270" height="150">
        </div>
        <div>
            <h4><a href=""><span class="glyphicon glyphicon-user"></span></a> Name : <?php echo $name; ?></h4>
            <h4><a href=""><span class="glyphicon glyphicon-user"></span></a> Country : <?php echo $country; ?></h4>
        </div>
    </div>
</div>