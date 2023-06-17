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

        $sql = "INSERT INTO insert_product (title, manufacturer, product_category, image_1, image_2, image_3, purchase_price, sale_price, keywords, product_desc, product_features) VALUES('$title', '$manufacturer', '$product_category', '$image_1', '$image_2', '$image_3', '$purchase_price', '$sale_price', '$keywords', '$product_desc', '$product_features')";
        if($conn->query($sql)){
            echo "<script>window.location.href='index.php?view_products'</script>";
        }
        else{
            echo "<br>Error!". $conn->connect_error;
        }
    }

?>
    <div class="breadcrumb">
        <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Product</h5>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Products</span></div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <form method="post" enctype='multipart/form-data'>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="title" class="form-label">Product Title</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="title3" class="form-label">Select a Manufacturer</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select form-control-lg" name="manufacturer" aria-label="Default select example" id="title3">
                            <option selected>Select a Manufacturer</option>
                            <?php
                                require_once('connection.php');
                                $sql = "SELECT * FROM manufacturer_name";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) 
                                {
                            ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
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
                                <select class="form-select form-control-lg" name="product_category" aria-label="Default select example" id="title3">
                            <option selected>Select a Product Category</option>
                            <?php
                                require_once('connection.php');
                                $sql = "SELECT * FROM insert_product_category";
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
                        <div class="col-md-3"></div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title6" class="form-label">Product Image 1</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image_1" class="form-control" id="title6">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title7" class="form-label">Product Image 2</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image_2" class="form-control" id="title7">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title8" class="form-label">Product Image 3</label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image_3" class="form-control" id="title8">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title9" class="form-label">Product Purchase Price</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="purchase_price" id="title9" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title10" class="form-label">Product Sale Price</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="sale_price" id="title10" class="form-control">
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <label for="title11" class="form-label">Product Keywords</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="keywords" id="title11" class="form-control">
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
                                        <textarea class="form-control" id="floatingTextarea" rows="5" cols="2" placeholder="Add Prdouct Description" name="product_desc"></textarea>
                                    </div>
                                    <div id="features" class="tab-pane fade">
                                        <textarea class="form-control" id="floatingTextarea" rows="5" cols="2" placeholder="Add Prdouct Features" name="product_features"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" name="insert">Insert Product</button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>