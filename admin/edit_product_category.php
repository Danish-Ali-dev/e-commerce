<div class="row">
    <div class="col-md-12">
        <br>
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Product Category</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Product Category</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                <?php
                    require_once('connection.php');
                    if(isset($_GET['edit_procat_id'])){
                        $edit_id = $_GET['edit_procat_id'];
                        $sql = "SELECT * FROM insert_product_category WHERE id = '$edit_id' ";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                ?>
                    <div class="row my-4">
                        <div class="col-md-4">
                            <label for="title1" class="form-label pull-right"> Product Category Title</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" value="<?php echo $row['title'] ?>" class="form-control" id="title1" name="title">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title2" class="form-label pull-right">Show as Top Product Category</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" <?php if($row['category'] == '1'){ ?> checked <?php } ?> type="radio" name="category" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" <?php if($row['category'] == '0'){ ?> checked <?php } ?> type="radio" name="category" id="inlineRadio2" value="0">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-4">
                            <label for="title1" class="form-label pull-right">Select Product Category Image</label>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="title1" name="picture">
                            <img src="aimages/<?php echo $row['picture'] ?>" alt="pic" height="70" width="90">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="row mt-4">
                        <div class="col-md-4"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="submit">Update Now</button>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require_once('connection.php');
    if (isset($_POST['submit'])){;
        $title = $_POST['title'];
        $category = $_POST['category'];
        $random_pic = strtotime("now");
        $picture = $random_pic."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$picture");

        $sql = "UPDATE insert_product_category SET title = '$title', category = '$category', picture = '$picture', `date/time` = CURRENT_TIME() WHERE id = '$edit_id' ";

        if ($conn->query($sql)) {
            $result = true;
            // echo "<script> alert('Data has been updated')</script>";
            echo "<script>window.location.href='index.php?view_product_category'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>