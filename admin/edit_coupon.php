<div class="row">
        <div class="col-md-12">
            <div class="breadcrumb">
                <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Edit Coupon</h5>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Edit Coupon</span></p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <form method="post">
                    <?php
                    require_once('connection.php');
                    if(isset($_GET['edit_coupon_id'])){
                        $edit_id = $_GET['edit_coupon_id'];
                        $sql = "SELECT * FROM coupon WHERE coupon_id = '$edit_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                    ?>
                        <div class="row my-4">
                            <div class="col-md-3">
                                <label for="title1" class="form-label pull-right"> Coupon no</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value=<?= $row['coupon_code']; ?> id="title1" name="code" placeholder="Enter Coupon Code">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-3">
                                <label for="title3" class="form-label pull-right">Coupon Discount</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" value=<?= $row['coupon_discount']; ?> class="form-control" id="title3" name="discount" placeholder="Enter discount in RS">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <?php
                            }
                        ?>
                        <div class="row mt-4">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" name="update_coupon">Edit Coupon</button>
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
    if (isset($_POST['update_coupon'])){
        $code = $_POST['code'];
        $discount = $_POST['discount'];

        $sql = "UPDATE `coupon` SET `coupon_code` = '$code', `coupon_discount` = '$discount', `date/time` = CURRENT_TIME() WHERE coupon_id = '$edit_id' ";
        if ($conn->query($sql)) {
            echo "<script>window.location.href='index.php?view_coupon'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>