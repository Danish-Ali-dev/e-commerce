<?php
    require_once('connection.php');
    $sql = "SELECT * FROM insert_product";
    $result = $conn->query($sql);
    $products=array();
    while($row = $result->fetch_assoc())
    {
        array_push($products,$row);
    } 
?>
<?php
        $title = "All Products";
        require_once('head.php');
?>

<header>
    <?php
    require_once('topnav.php');
    require_once('navbar.php');
?>
</header>
<main>
    <div class="container">

<?php
    $location = "Products";
    require_once('location.php');
?>
    </div>
<div class="row">
    <?php
        for ($i=0; $i < sizeof($products); $i++) { 
            $id = $products[$i]['manufacturer'];
            $sql1 = "SELECT * FROM manufacturer_name WHERE id = '$id' ";
            $result1 = $conn->query($sql1);
            $row1 = $result1->fetch_assoc();
        ?>

    <div class="col-md-3">
        <div class="bulk-card my-5" style="margin-left:30px">
            <div class="card" style="width: 17rem;">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner carousel-fade">
                            <div class="carousel-item active"><img src="admin/aimages/<?php echo $products[$i]['image_1']; ?>" class="d-block w-100" alt="<?php echo $products[$i]['image_1']; ?>" width="100%" height="150"></div>

                            <div class="carousel-item"><img src="admin/aimages/<?php echo $products[$i]['image_2']; ?>" class="d-block w-100" alt="image" width="100%" height="150"></div>

                            <div class="carousel-item"><img src="admin/aimages/<?php echo $products[$i]['image_3']; ?>" class="d-block w-100" alt="image" width="100%" height="150"></div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden"></span></button>
                        <button
                            class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden"></span></button>
                    </div>
                <div class="card-body">
                    <p class="card-title text-center my-3"> <b> Company: </b>
                        <?= $row1['name'] ?>
                    </p>
                    <hr>
                    <h4 class="text-center">
                    <?= substr($products[$i]['title'], 0, 17) ?>
                    </h4>
                    <h6 class="text-center my-3"><b>Price:</b> Rs
                        <?php echo $products[$i]['sale_price'] ?>
                    </h6>
                    <a href="product_details.php?pro_details=<?php echo $products[$i]['id']?>"
                        class="button btn btn-secondary"><span>View Details</a>
                    <a href="product_details.php?pro_details=<?php echo $products[$i]['id']?>"
                        class="button btn btn-primary"><span><img src="images/cart-fill.svg " alt="Cart ">Add to
                            cart</a>
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