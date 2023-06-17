<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span>Dashboard / Edit Payment Method</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks">Edit Payment Method</span></p></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form method="post">
                <?php
                    require_once('connection.php');
                    if(isset($_GET['edit_payment_method_id'])){
                        $payment_method_id = $_GET['edit_payment_method_id'];
                        $sql = "SELECT * FROM payment_method WHERE payment_method_id = '$payment_method_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                ?>
                    <div class="row my-2">
                        <div class="col-md-3">
                            <label for="title1" class="form-label pull-right">Edit Payment Method</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?= $row['payment_method'] ?>" id="title1" name="payment_method">
                        </div>
                        <div class="col-md-2"></div>
                    </div>       
                    <?php
                        }
                    ?>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="edit">Edit</button>
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
    if (isset($_POST['edit'])){
        $payment_method = $_POST['payment_method'];

        $sql = "UPDATE `payment_method` SET `payment_method` = '$payment_method', `date/time` = CURRENT_TIME() WHERE payment_method_id = '$payment_method_id' ";
        if ($conn->query($sql)) {
            echo "<script>window.location.href='index.php?view_payment_method'</script>";
            $result = true;
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>