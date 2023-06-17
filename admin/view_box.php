<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_box_id'])){
        $delete_id = $_GET['delete_box_id'];
        $sql = "DELETE FROM insert_box WHERE id = '$delete_id' ";
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
        <br>
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Box</h5>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-tasks"> View Boxes</span>
        <span style="float: right; margin-top: -7px"><a href="index.php?insert_box" class="btn btn-danger">Insert More Box</a></span>
    </div>
    <div class="panel-body">
        <div class="row">
            <?php
                $sql = "SELECT * FROM insert_box";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center"><?php echo $row['title'] ?></div>
                    <div class="panel-body"><?php echo $row['description'] ?></div>
                   
                    <div class="panel-footer">
                        <a href="index.php?edit_box_id=<?php echo $row['id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="index.php?delete_box_id=<?php echo $row['id'] ?>" style="float: right;" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>

            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>