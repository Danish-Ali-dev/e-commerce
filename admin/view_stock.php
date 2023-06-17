<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_stock_id'])){
        $delete_id = $_GET['delete_stock_id'];
        $sql = "DELETE FROM stock WHERE stock_id = '$delete_id' ";
        if($conn->query($sql)){
            $result = true;
        }
        else{
            echo "<br>Error". $conn->connect_error;
        }
        if ($result == true) {
            echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been Deleted Successfully!!
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
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Stock</h5>
        </div>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-tasks"> View Stock</span>
        <span style="float: right; margin-top: -7px"><a href="index.php?insert_stock" class="btn btn-danger">Insert More Stock</a></span>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Stock no:</th>
                                <th scope="col">Product Name:</th>
                                <th scope="col">Stock Quantity:</th>
                                <th scope="col">Stock Type:</th>
                                <th scope="col">Date/Time:</th>
                                <th scope="col">Edit Stock</th>
                                <th scope="col">Delete Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM stock";
                                $result = $conn->query($sql);
                                $sno = 1;
                                while($row = $result->fetch_assoc())
                            {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $sno ?></th>
                                    <td>
                                    <?php
                                        $product_id = $row['product_id'];
                                        $sql1 = "SELECT title FROM insert_product WHERE id = '$product_id' ";
                                        $result1 = $conn->query($sql1);
                                        $row1 = $result1->fetch_assoc();
                                        echo $row1['title'];
                                    ?>
                                    </td>
                                    <td><?php echo $row['quantity'] ?></td>
                                    <td>
                                        <?php if ($row['type'] == 1) {
                                            echo "added";
                                        }
                                        else{
                                            echo "sold";
                                        }
                                        ?> 
                                    </td>
                                    <td><?php echo $row['date/time'] ?> </td>
                                    <td><a href="index.php?edit_stock_id=<?php echo $row['stock_id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td><a href="index.php?delete_stock_id=<?php echo $row['stock_id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                                </tr>
                                <?php
                                    $sno++;
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>