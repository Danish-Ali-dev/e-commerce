<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_customer_id'])){
        $delete_id = $_GET['delete_customer_id'];
        $sql = "DELETE FROM registration WHERE id = '$delete_id' ";
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
    <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Registration</h5>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> View Registration</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 mx-auto">
        <div class="table-responsiveS">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">Customer no</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Customer Password</th>
                            <th scope="col">Customer Country</th>
                            <th scope="col">Customer City</th>
                            <th scope="col">Customer Contact</th>
                            <th scope="col">Customer Address</th>
                            <th scope="col">Customer Picture</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Delete Customer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM registration";
                                $result = $conn->query($sql);
                                $sno = 1;
                                while($row = $result->fetch_assoc())
                                {
                            ?>
                            <tr>
                                <th scope="row"> <?php echo $sno ?></th>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['password'] ?></td>
                                <td><?php echo $row['country'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><img src="../pimages/<?php echo $row['picture'] ?>" alt="shirt" height="70" width="80"></td>
                                <td><?php echo $row['date/time'] ?></td>
                                <td><a href="index.php?delete_customer_id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
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