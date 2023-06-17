<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Edit Manufacturer</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Edit Manufacturer</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                <?php
                    require_once('connection.php');
                    if(isset($_GET['edit_manufacturer_id'])){
                        $edit_id = $_GET['edit_manufacturer_id'];
                        $sql = "SELECT * FROM manufacturer_name WHERE id = '$edit_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                ?>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title1" class="form-label pull-right"> Manufacturer Name</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" value="<?php echo $row['name'] ?>" class="form-control" id="title1" name="name">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title2" class="form-label pull-right">Show as Top Manufacturer</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" <?php if($row['status']=='1') { ?> checked <?php } ?> type="radio" name="status" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" <?php if($row['status']=='0') { ?> checked <?php } ?>  type="radio" name="status" id="inlineRadio2" value="0">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title3" class="form-label pull-right">Select Manufacturer Image</label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="title3" name="picture">
                            <img src="aimages/<?php echo $row['picture'] ?>" alt="pic" height="80">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="insert">Update Manufacturer</button>
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
        $name = $_POST['name'];
        $status = $_POST['status'];
        $random_pic = strtotime("now");
        $picture = $random_pic."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$picture");

        $sql = "UPDATE `manufacturer_name` SET `name` = '$name', `status` = '$status', `picture` = '$picture', `date/time` = CURRENT_TIME() WHERE id = '$edit_id' ";
        if ($conn->query($sql)) {
            //  echo "<script> alert('Data has been updated')</script>";
            echo "<script>window.location.href='index.php?view_manufacturer'</script>";
            $result = true;
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>