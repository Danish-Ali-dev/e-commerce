<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_user_id'])){
        $delete_id = $_GET['delete_user_id'];
        $sql = "DELETE FROM users WHERE user_id = '$delete_id' ";
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
<div class="breadcrumb">
    <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Users</h5>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-tasks"> View Users</span>
        <span style="float: right; margin-top: -7px"><a href="index.php?insert_users" class="btn btn-danger">Insert More Users</a></span>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 mx-auto">
        <div class="table-responsiveS">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">User no</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">User Password</th>
                            <th scope="col">User Country</th>
                            <th scope="col">User Picture</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Edit User</th>
                            <th scope="col">Delete User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM users";
                                $result = $conn->query($sql);
                                $sno = 1;
                                while($row = $result->fetch_assoc())
                                {
                            ?>
                            <tr>
                                <th scope="row"> <?php echo $sno ?></th>
                                <td><?php echo $row['user_name'] ?></td>
                                <td><?php echo $row['user_email'] ?></td>
                                <td><?php echo $row['user_password'] ?></td>
                                <td><?php echo $row['user_country'] ?></td>
                                <td><img src="aimages/<?php echo $row['user_picture'] ?>" alt="shirt" height="70" width="80"></td>
                                <td><?php echo $row['date/time'] ?></td>
                                <td><a href="index.php?edit_user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="index.php?delete_user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
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