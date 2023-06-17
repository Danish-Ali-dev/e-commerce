<div class="row">
    <div class="col-md-12">
        <br>
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Slide</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Slide</span></p></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                    <?php
                        require_once('connection.php');
                        if (isset($_GET['edit_slide_id'])) {
                            $edit_id = $_GET['edit_slide_id'];
                            $sql = "SELECT * FROM insert_slide WHERE id = '$edit_id' ";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                    ?>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title1" class="form-label pull-right">Slide Name:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" value="<?php echo $row['name'] ?>" class="form-control" id="title1" name="name">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title2" class="form-label pull-right">Slide Image:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="title2" name="picture">
                            <img src="aimages/<?php echo $row['picture'] ?>" height="100" width="200" alt="pic">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <?php
                            }
                        ?>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="submit">Update Now</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    $result = false;
    require_once('connection.php');
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $random_pic = strtotime("now");
        $picture = $random_pic."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$picture");
        $url = $_POST['url'];

        $sql = "UPDATE `insert_slide` SET  `name` = '$name', picture = '$picture', url = '$url', `date/time` = CURRENT_TIME() WHERE id = '$edit_id' ";
        if ($conn->query($sql)) {
            $result = true;
            // echo "<script> alert('Data has been updated')</script>";
            echo "<script>window.location.href='index.php?view_slides'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
        if ($result == true) {
            echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been submitted Successfully!!
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