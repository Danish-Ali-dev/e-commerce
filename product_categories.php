<?php
    require_once('connection.php');
    if(isset($_GET['pro_cat'])) {
        $pro_cat_id = $_GET['pro_cat'];
        $sql = "SELECT * FROM insert_product_category WHERE id = '$pro_cat_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();    
        $pic=$row['picture'];
        $label = $row['title'];

        $sql1 = "SELECT * FROM insert_product WHERE product_category = '$pro_cat_id' ";
        $result1 = $conn->query($sql1);
        $pro_cat = array();
        while($row1 = $result1->fetch_assoc()){
            array_push($pro_cat, $row1);
        }

    }
    $title = $row['title'];
    require_once('head.php');
?>
    <header>
        <?php
        require_once('topnav.php');
        require_once('navbar.php');
    ?>
    </header>
    <main>
        <br>
        <div class="container">
            <div class="pic my-5">
                <img src="admin/aimages/<?php echo $pic; ?>" alt="<?php echo $pic; ?>" width="100%" height="400px">
            </div>
        </div>
        <?php
                require_once('label.php');
        ?>
            <div class="row">
                <?php
                    
                    for ($i=0; $i < sizeof($pro_cat); $i++) { 
                ?>
            <div class="col-md-3">
                <div class="bulk-card my-5" style="margin-left:30px">
                    <div class="card" style="width: 18rem;">
                        <img src="admin/aimages/<?= $pro_cat[$i]['image_1'] ?>" width="100%" height="400" class="card-img-top" alt="product picture">
                        <div class="card-body">
                        <?php
                            $id = $pro_cat[$i]['manufacturer'];
                            $sql2 = "SELECT * FROM manufacturer_name WHERE id = '$id' ";
                            $result2 = $conn->query($sql2);
                            $row2 = $result2->fetch_assoc();
                        ?>
                            <p class="card-title text-center my-3"> <b> Company: </b>
                                <?= $row2['name'] ?>
                            </p>
                            <hr>
                            <h4 class="text-center">
                                <?= $pro_cat[$i]['title'] ?>
                            </h4>
                            <h6 class="text-center my-3"><b>Price:</b> Rs
                                <?php echo $pro_cat[$i]['sale_price'] ?>
                            </h6>
                            <a href="product_details.php?pro_details=<?php echo $pro_cat[$i]['id']?>" class="button btn btn-secondary"><span>View Details</a>
                            <a href="product_details.php?pro_details=<?php echo $pro_cat[$i]['id']?>" class="button btn btn-primary"><span><img src="images/cart-fill.svg " alt="Cart ">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                    }
                ?>
    </div>
    </main>
    <footer class=" mt-5 line" style="font-size: 15px;">
        <?php
                require_once('footer.php');
            ?>
    </footer>
    <?php
            require_once('bottom.php');
        ?>