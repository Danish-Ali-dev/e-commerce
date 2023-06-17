<?php
    require_once('connection.php');
    if (isset($_POST['insert'])){
        $random_pic = strtotime("now");
        $picture = $random_pic."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$picture");

        $sql = "INSERT INTO `logo` (`picture`) VALUES('$picture')";
        if ($conn->query($sql)) {
            // echo "<script> alert('Data has been inserted')</script>";
            echo "<script>window.location.href='index.php?view_logo'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>
<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Logo</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Logo</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title3" class="form-label pull-right">Select Logo Image</label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="title3" name="picture">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="insert">Insert Logo</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>