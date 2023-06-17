<?php
    require_once('connection.php');
    if (isset($_POST['insert'])){
        $payment_method = $_POST['payment_method'];

        $sql = "INSERT INTO `payment_method` (`payment_method`) VALUES('$payment_method')";
        if ($conn->query($sql)) {
            echo "<script>window.location.href='index.php?view_payment_method'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>
<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span>Dashboard / Insert Payment Method</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks">Insert Payment Method</span></p></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form method="post">
                    <div class="row my-2">
                        <div class="col-md-3">
                            <label for="title1" class="form-label pull-right">Insert Payment Method</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="title1" name="payment_method">
                        </div>
                        <div class="col-md-2"></div>
                    </div>                   
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="insert">Insert</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>