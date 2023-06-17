<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_coupon_id'])){
        $delete_id = $_GET['delete_coupon_id'];
        $sql = "DELETE FROM coupon WHERE coupon_id = '$delete_id' ";
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
<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Coupon</h5>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> View Coupon</span>
    <span style="float: right; margin-top: -7px"><a href="index.php?insert_coupon" class="btn btn-danger">Insert More Coupon</a></span>
</div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Sr no</th>
                                <th scope="col">Coupon Code</th>
                                <th scope="col">Coupon Discount</th>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Edit Coupon</th>
                                <th scope="col">Delete Coupon</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM coupon";
                                $result = $conn->query($sql);
                                $sno = 1;
                                while($row = $result->fetch_assoc())
                            {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $sno ?></th>
                                    <td><?php echo $row['coupon_code'] ?></td>
                                    <td><?php echo $row['coupon_discount']?></td>
                                    <td><?php echo $row['date/time'] ?> </td>
                                    <td><a href="index.php?edit_coupon_id=<?php echo $row['coupon_id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td><a href="index.php?delete_coupon_id=<?php echo $row['coupon_id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
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