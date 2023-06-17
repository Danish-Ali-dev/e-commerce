    <div class="breadcrumb">
        <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Product</h5>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Products</span></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <form method="post" enctype='multipart/form-data'>
                    <?php
                        require_once('connection.php');
                        if (isset($_GET['edit_product_id'])) {
                            $edit_id = $_GET['edit_product_id'];
                            $sql = "SELECT * FROM insert_product WHERE id = '$edit_id' ";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                    ?>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="title" class="form-label">Product Title</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" value="<?php echo $row['title'] ?>" id="title" name="title" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="title3" class="form-label">Select a Manufacturer</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select form-control-lg"  name="manufacturer" aria-label="Default select example" id="title3">
                            <option selected>Select a Manufacturer</option>
                            <?php
                                require_once('connection.php');
                                $sql1 = "SELECT * FROM manufacturer_name";
                                $result1 = $conn->query($sql1);
                                while ($row1 = $result1->fetch_assoc()) 
                                {
                            ?>
                            <option value="<?php echo $row1['id'];?>" <?php if($row['manufacturer']==$row1['id']){?> selected <?php } ?> ><?php echo $row1['name'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title55" class="form-label"> Product Category</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select form-control-lg"  name="product_category" aria-label="Default select example" id="title3">
                            <option selected>Select a Product Category</option>
                            <?php
                                $sql2 = "SELECT * FROM insert_product_category";
                                $result2 = $conn->query($sql2);
                                while ($row2 = $result2->fetch_assoc()) 
                                {
                            ?>
                            <option value="<?php echo $row2['id'] ?>" <?php if($row['product_category']==$row2['id']){?> selected <?php } ?>><?php echo $row2['title'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title6" class="form-label">Product Image 1</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image_1" class="form-control" id="title6">
                                <img src="aimages/<?php echo $row['image_1'] ?>" alt="shirt" height="70" width="80">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title7" class="form-label">Product Image 2</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image_2" class="form-control" id="title7">
                                <img src="aimages/<?php echo $row['image_2'] ?>" alt="shirt" height="70" width="80">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title8" class="form-label">Product Image 3</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image_3" class="form-control" id="title8">
                                <img src="aimages/<?php echo $row['image_3'] ?>" alt="shirt" height="70" width="80">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title9"class="form-label">Product Purchase Price</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="purchase_price" value="<?php echo $row['purchase_price'] ?>"  id="title9" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title10" class="form-label">Product Sale Price</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" value="<?php echo $row['sale_price'] ?>" name="sale_price" id="title10" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title11" class="form-label">Product Keywords</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" value="<?php echo $row['keywords'] ?>" name="keywords" id="title11" placeholder="new T-Shirt" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <label for="title12" class="form-label">Product Keywords</label>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav nav-tabs" style="font-size: 14px;">
                                    <li class="active"><a data-toggle="tab" href="#description">Prdouct Description</a></li>
                                    <li><a data-toggle="tab" href="#features">Prdouct Features</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="tab-pane fade in active">
                                        <textarea class="form-control"  name="product_desc" id="floatingTextarea" rows="5" cols="2"><?php echo $row['product_desc'] ?></textarea>
                                    </div>
                                    <div id="features" class="tab-pane fade">
                                        <textarea class="form-control" id="floatingTextarea"  name="product_features" rows="5" cols="2"><?php echo $row['product_features'] ?></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="row mt-4">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" value="insert" name="insert">Update Product</button>
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
    if (isset($_POST['insert'])){
        $title = $_POST['title'];
        $manufacturer = $_POST['manufacturer'];
        $product_category = $_POST['product_category'];

        $random_pic = strtotime("now");
        $image_1 = $random_pic."_".$_FILES ['image_1'] ['name'];
        $temp_pic = $_FILES ['image_1'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$image_1");

        $random_pic = strtotime("now");
        $image_2 = $random_pic."_".$_FILES ['image_2'] ['name'];
        $temp_pic = $_FILES ['image_2'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$image_2");

        $random_pic = strtotime("now");
        $image_3 = $random_pic."_".$_FILES ['image_3'] ['name'];
        $temp_pic = $_FILES ['image_3'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$image_3");

        $purchase_price = $_POST['purchase_price'];
        $sale_price = $_POST['sale_price'];
        $keywords = $_POST['keywords'];
        $product_desc = $_POST['product_desc'];
        $product_features = $_POST['product_features'];

        $sql="UPDATE insert_product SET `title` = '$title', `manufacturer` = '$manufacturer', product_category = '$product_category', image_1 = '$image_1', `image_2` = '$image_2', image_3 = '$image_3', `purchase_price` = '$purchase_price', `sale_price` = '$sale_price', `keywords` = '$keywords', `product_desc` = '$product_desc', `product_features` = '$product_features', `date/time` = CURRENT_TIME() WHERE id = '$edit_id' ";
        if($conn->query($sql)){
            echo "<script>window.location.href='index.php?view_products'</script>";
        }
        else{
            echo "<br>Error!". $conn->connect_error;
        }
    }
?>  