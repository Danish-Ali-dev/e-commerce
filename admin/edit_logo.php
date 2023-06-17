<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Edit Logo</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Edit Logo</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                <?php
                    require_once('connection.php');
                    if(isset($_GET['edit_logo_id'])){
                        $edit_id = $_GET['edit_logo_id'];
                        $sql = "SELECT * FROM logo WHERE logo_id = '$edit_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                ?>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title3" class="form-label pull-right">Select Logo Image</label>
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
                            <button class="btn btn-primary btn-block" name="edit">Edit Logo</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['edit'])){
        $random_pic = strtotime("now");
        $picture = $random_pic."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$picture");

        $sql = "UPDATE `logo` SET `picture` = '$picture', `date/time` = CURRENT_TIME() WHERE logo_id = '$edit_id'";
        if ($conn->query($sql)) {
            // echo "<script> alert('Data has been inserted')</script>";
            echo "<script>window.location.href='index.php?view_logo'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>