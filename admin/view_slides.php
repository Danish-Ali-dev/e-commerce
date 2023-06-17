<?php
    require_once('connection.php');
    if(isset($_GET['delete_slide_id'])){
        $delete_id = $_GET['delete_slide_id'];
        $sql = "DELETE FROM insert_slide WHERE id = '$delete_id' ";
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
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Slides</h5>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-tasks"> View Slides</span>
        <span style="float: right; margin-top: -7px"><a href="index.php?insert_slide" class="btn btn-danger">Insert More Slide</a></span>
    </div>
    <div class="panel-body">
        <div class="row">
            <?php
                $sql = "SELECT * FROM insert_slide";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
                {
            ?>
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center"><?php echo $row['name'] ?> </div>
                        <div class="panel-body">
                            <img src="aimages/<?php echo $row['picture'] ?>" height="100" width="200" alt="pic">
                        </div>
                        <div class="panel-footer">
                            <a href="index.php?edit_slide_id=<?php echo $row['id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="index.php?delete_slide_id=<?php echo $row['id'] ?>" class="btn btn-danger" style="float: right;"><span class="glyphicon glyphicon-trash"></span></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
        </div>
    </div>
</div>