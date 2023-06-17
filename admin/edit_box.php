<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Box</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks">Insert Box</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <form method="post">
                    <?php
                        require_once('connection.php');
                        if(isset($_GET['edit_box_id'])){
                            $edit_id = $_GET['edit_box_id'];
                            $sql = "SELECT * FROM insert_box WHERE id = $edit_id";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                    ?>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title1" class="form-label pull-right">Box Title:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" value="<?php echo $row['title'] ?>" class="form-control" id="title1" name="title">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title2" class="form-label pull-right">Box Description:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $row['description'] ?>" id="title2" name="description">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="insert">Update Box</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once('connection.php');
if (isset($_POST['insert'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "UPDATE `insert_box` SET `title` = '$title', `description` = '$description', `date/time` = CURRENT_TIME() WHERE id = '$edit_id' ";
    if ($conn->query($sql)) {
        $result = true;
        // echo "<script> alert('Data has been updated')</script>";
        echo "<script>window.location.href='index.php?view_box'</script>";
    }
    else{
        echo "<br>Error!!" . $conn->connect_error;
    }
?>