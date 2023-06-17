<?php
    $result = false;
    require_once('connection.php');
    if (isset($_POST['insert'])){
        $name = $_POST['name'];
        $status = $_POST['status'];
        $random_pic = strtotime("now");
        $picture = $random_pic."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$picture");

        $sql = "INSERT INTO `manufacturer_name` (`name`, `status`, `picture`) VALUES('$name', '$status', '$picture')";
        if ($conn->query($sql)) {
            // echo "<script> alert('Data has been inserted')</script>";
            $result = true;
            echo "<script>window.location.href='index.php?view_manufacturer'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
        if ($result == true) {
          echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your data has been Submitted Successfully!!
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
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Manufacturer</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Manufacturer</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title1" class="form-label pull-right"> Manufacturer Name</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="title1" name="name">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title2" class="form-label pull-right">Show as Top Manufacturer</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
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
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="insert">Insert Manufacturer</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>