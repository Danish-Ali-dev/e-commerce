<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_payment_id'])){
        $delete_id = $_GET['delete_payment_id'];
        $sql = "DELETE FROM payment WHERE payment_id = '$delete_id' ";
        if($conn->query($sql)){
            // echo "<script> alert('Data has been Deleted Successfully')</script>";
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
<style>
    table {
        display: inline-block;
        overflow: auto;
}
</style>
<div class="breadcrumb">
    <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Payments</h5>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> View Payments</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10 mx-auto">
        <div class="table-responsiveS">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">Payment no</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Due Amount</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Transaction Id No</th>
                            <th scope="col">Payment Date</th>
                            <th scope="col">Delete Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $sql5 = "SELECT * FROM payment";
                                $result5 = $conn->query($sql5);
                                $sno = 1;
                                while($row5 = $result5->fetch_assoc())
                                {
                            ?>
                            <tr>
                                <th scope="row"> <?php echo $sno ?></th>
                                <td>
                                    <?php
                                        $customer_id = $row5['customer_id'];
                                        $sql11 = "SELECT name FROM registration WHERE id = '$customer_id' ";
                                        $result11 = $conn->query($sql11);
                                        $row11 = $result11->fetch_assoc();
                                        echo $row11['name'];
                                    ?>
                                </td>
                                <td><?php echo $row5['order_id'] ?></td>
                                <td><?php echo $row5['amount'] ?></td>
                                <td><?php 
                                    $payment_method = $row5['payment_method'];
                                    $sql1 = "SELECT payment_method FROM payment_method WHERE payment_method_id = $payment_method";
                                    $result1 = $conn->query($sql1);
                                    $row1 = $result1->fetch_assoc();
                                    echo $row1['payment_method'];
                                ?></td>
                                <td><?php echo $row5['transaction_id'] ?></td>
                                <td><?php echo $row5['date/time'] ?></td>
                                <td><a href="index.php?delete_payment_id=<?= $row5['payment_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
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