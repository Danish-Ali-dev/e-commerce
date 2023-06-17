<div class="row">
    <div class="col-md-12">
        <br>
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Edit Stock</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Edit Stock</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                <?php
                    require_once('connection.php');
                    if(isset($_GET['edit_stock_id'])){
                        $edit_id = $_GET['edit_stock_id'];
                        $sql = "SELECT * FROM stock WHERE stock_id = '$edit_id'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                ?>
                <div class="row">
                    <div class="col-md-3">
                        <label for="title3" class="form-label pull-right">Product Name:</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select form-control-lg" name="product_name" aria-label="Default select example" id="title3">
                        <option selected>Select a Product Name</option>
                        <?php
                            $sql2 = "SELECT * FROM insert_product";
                            $result2 = $conn->query($sql2);
                            while ($row2 = $result2->fetch_assoc()) 
                            {
                        ?>
                        <option value="<?php echo $row2['id'] ?>" 
                        <?php if($row2['id']==$row['product_id'])
                        {
                           echo "selected";
                        }
                        ?>
                        >
                        <?php echo $row2['title'] ?></option>
                        <?php
                            }
                        ?>
                    <div class="col-md-3"></div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-3">
                            <label for="title2" class="form-label pull-right">Add Quantity:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" value="<?php echo $row['quantity']; ?>" class="form-control" id="title2" name="quantity">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="edit">Edit Stock</button>
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
        $name = $_POST['product_name'];
        $quantity = $_POST['quantity'];

        $sql = "UPDATE `stock` SET `product_id` = '$name', `quantity` = '$quantity', `date/time` = CURRENT_TIME() WHERE stock_id = '$edit_id' ";
        if ($conn->query($sql)) {
            //  echo "<script> alert('Data has been updated')</script>";
            echo "<script>window.location.href='index.php?view_stock'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>