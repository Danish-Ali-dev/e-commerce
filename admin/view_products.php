<?php
    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_product_id'])){
        $delete_id = $_GET['delete_product_id'];
        $sql = "DELETE FROM insert_product WHERE id = '$delete_id' ";
        if($conn->query($sql)){
            // echo "<script> alert('Data has been Deleted Successfully')</script>";
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
<head>
<style>
    table {
        display: inline-block;
        overflow: auto;
}
</style>
</head>
<div class="breadcrumb">
    <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / View Products</h5>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-tasks"> View Products</span>
        <span style="float: right; margin-top: -7px"><a href="index.php?insert_products" class="btn btn-danger">Insert More Products</a></span>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 mx-auto">
        <div class="table-responsiveS">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">Product no</th>
                            <th scope="col">Product Title</th>
                            <th scope="col">Product Manufacturer</th>
                            <th scope="col">Product Category</th>
                            <th scope="col">Product Image 1</th>
                            <th scope="col">Product Image 2</th>
                            <th scope="col">Product Image 3</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Sold</th>
                            <th scope="col">Product Keywords</th>
                            <th scope="col">Product Date</th>
                            <th scope="col">Edit Product</th>
                            <th scope="col">Product Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM insert_product";
                                $result = $conn->query($sql);
                                $sno = 1;
                                while($row = $result->fetch_assoc())
                                {
                            ?>
                            <tr>

                                <th scope="row">
                                    <?php echo $sno ?>
                                </th>
                                <td>
                                    <?php echo $row['title'] ?>
                                </td>
                                <td>
                                    <?php
                                        $manu_id = $row['manufacturer'];
                                        $sql1 = "SELECT name FROM manufacturer_name WHERE id = '$manu_id' ";
                                        $result1 = $conn->query($sql1);
                                        $row1 = $result1->fetch_assoc();
                                        echo $row1['name'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $pro_cat_id = $row['product_category'];
                                        $sql2 = "SELECT title FROM insert_product_category WHERE id = '$pro_cat_id' ";
                                        $result2 = $conn->query($sql2);
                                        $row2 = $result2->fetch_assoc();
                                        echo $row2['title'];
                                    ?>
                                </td>
                                <td><img src="aimages/<?php echo $row['image_1'] ?>" alt="shirt" height="70" width="80"></td>
                                <td><img src="aimages/<?php echo $row['image_2'] ?>" alt="shirt" height="70" width="80"></td>
                                <td><img src="aimages/<?php echo $row['image_3'] ?>" alt="shirt" height="70" width="80"></td>
                                <td>
                                    <?php echo $row['purchase_price'] ?>
                                </td>
                                <td>
                                    <?php echo $row['sale_price'] ?>
                                </td>
                                <td>
                                    <?php echo $row['keywords'] ?>
                                </td>
                                <td>
                                    <?php echo $row['date/time'] ?>
                                </td>
                                <td><a href="index.php?edit_product_id=<?php echo $row['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td><a href="index.php?delete_product_id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                            <?php
                                $sno++;
                                }
                            ?>
                    </tbody>
                </table>
                </table>
            </div>
        </div>
    </div>
</div>