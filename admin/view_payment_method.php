<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_payment_method_id'])){
        $payment_method_id = $_GET['delete_payment_method_id'];
        $sql = "DELETE FROM payment_method WHERE payment_method_id = '$payment_method_id' ";
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
<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Payment Method</h5>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-tasks">View Payment Method</span>
        <span style="float: right; margin-top: -7px"><a href="index.php?insert_payment_method" class="btn btn-danger">Insert More Payment Method</a></span>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Sr no</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Edit Manufacturer</th>
                                <th scope="col">Delete Manufacturer</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM payment_method";
                                $result = $conn->query($sql);
                                $sno = 1;
                                while($row = $result->fetch_assoc())
                            {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $sno ?></th>
                                    <td><?php echo $row['payment_method'] ?></td>
                                    <td><?php echo $row['date/time'] ?></td>
                                    <td><a href="index.php?edit_payment_method_id=<?= $row['payment_method_id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td><a href="index.php?delete_payment_method_id=<?= $row['payment_method_id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
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