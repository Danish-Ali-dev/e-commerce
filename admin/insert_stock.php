<?php
    $result = false;
    require_once('connection.php');
    if (isset($_POST['add'])){
        $name = $_POST['product_name'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO `stock` (product_id, quantity) VALUES('$name', '$quantity')";
        if ($conn->query($sql)) {
            $result = true;
            // echo "<script> alert('Data has been inserted')</script>";
            // echo "<script>window.location.href='index.php?view_stock'</script>";
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
            </button>
          </div>';
        }
    }
?>
<div class="row">
    <div class="col-md-12">
        <br>
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Stock</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Stock</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <form method="post" enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-3">
                        <label for="title3" class="form-label pull-right">Product Name:</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select form-control-lg" name="product_name" aria-label="Default select example" id="title3">
                        <option selected>Select a Product Name</option>
                        <?php
                            $sql = "SELECT * FROM insert_product";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) 
                            {
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['title'] ?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-3">
                            <label for="title2" class="form-label pull-right">Add Quantity:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" min="1" id="title2" name="quantity">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="add">Add Stock</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>