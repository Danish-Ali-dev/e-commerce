<?php
    $result = false;
    require_once('connection.php');
    if (isset($_POST['insert_coupon'])){
        $code = $_POST['code'];
        $discount = $_POST['discount'];

        $sql = "INSERT INTO `coupon` (`coupon_code`, `coupon_discount`) VALUES('$code', '$discount')";
        if ($conn->query($sql)) {
            echo "<script>window.location.href='index.php?view_coupon'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb">
                <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Coupon</h5>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Coupon</span></p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <form method="post" enctype='multipart/form-data'>
                        <div class="row my-4">
                            <div class="col-md-3">
                                <label for="title1" class="form-label pull-right"> Coupon Code</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="title1" name="code" placeholder="Enter Coupon Code">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-3">
                                <label for="title3" class="form-label pull-right">Coupon Discount</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="title3" name="discount" placeholder="Enter discount in RS">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" name="insert_coupon">Insert Coupon</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>