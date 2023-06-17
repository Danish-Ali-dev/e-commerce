<?php 
require_once('connection.php');
if (isset($_GET['pro_details'])) {
    $id=$_GET['pro_details'];
    $sql = "SELECT * FROM insert_product WHERE id = '$id' ";
    $result=$conn->query($sql);
    $row_p_d=$result->fetch_assoc();
}

$title="Product Details";
require_once('head.php');
?>
<style>
    .product_features {
        background-color: aquamarine;
        border: 1px solid black;
        border-radius: 8px;
        padding: 10px;
    }
    
    .product_desc {
        background-color: aquamarine;
        border: 1px solid black;
        border-radius: 8px;
        padding: 10px;
    }
</style>
<header>
    <?php
        require_once('topnav.php');
        require_once('navbar.php');
?>
</header>
<main><br>
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators"><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button></div>
                    <div class="carousel-inner carousel-fade">
                        <div class="carousel-item active"><img src="admin/aimages/<?php echo $row_p_d['image_1']; ?>" class="d-block w-100" alt="<?php echo $row_p_d['image_1']; ?>" width="100%" height="300"></div>
                        <div class="carousel-item"><img src="admin/aimages/<?php echo $row_p_d['image_2']; ?>" class="d-block w-100" alt="image" width="100%" height="300"></div>
                        <div class="carousel-item"><img src="admin/aimages/<?php echo $row_p_d['image_3']; ?>" class="d-block w-100" alt="image" width="100%" height="300"></div>
                    </div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden"></span></button>
                    <button
                        class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden"></span></button>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="background-color: white;">
            <div class="container">
                <form method="post">
                    <div class="row mt-3 text-center" style="font-size: 30px;">
                        <div class="col-md-12">
                            <?=$row_p_d['title'] ?>
                            <input type="text" hidden="true" value="<?= $row_p_d['title'] ?>" class="form-control" id="pro_title" name="pro_title">
                            <input type="text" hidden="true" value="<?=$row_p_d[ 'id'] ?>" class="form-control" id="quantity" name="pro_id">
                        </div>
                    </div>
                        <div class="row mt-3">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">
                                <label for="quantity" class="pull-right">Quantity:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" min="1" class="form-control" id="quantity" name="quantity" required="">
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row mt-3 text-center" style="font-size: 30px;">
                            <div class=" col-md-12 ">Price:<?=$row_p_d['sale_price']?>
                            <input type="number" hidden="true" value="<?=$row_p_d[ 'sale_price']?>" class="form-control" id="sale_price" name="sale_price" required="">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success" name="cart">Add to Cart</button>
                            <button class="btn btn-success" name="wishlist">Add to Wishlist</button>
                        </div>
                </form>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <img src="admin/aimages/<?php echo $row_p_d['image_1']; ?>" class="d-block w-100" alt="<?php echo $row_p_d['image_1']; ?>" width="100%" height="100">
                    </div>
                    <div class="col-md-4"><img src="admin/aimages/<?php echo $row_p_d['image_2']; ?>" class="d-block w-100" alt="<?php echo $row_p_d['image_1']; ?>" width="100%" height="100">
                    </div>
                    <div class="col-md-4"><img src="admin/aimages/<?php echo $row_p_d['image_3']; ?>" class="d-block w-100" alt="<?php echo $row_p_d['image_1']; ?>" width="100%" height="100"></div>
                </div>
                </div>
                <br>
            </div>
        </div>
    </div><br>
    <div class=" row ">
        <div class=" col-md-6">
            <h2 class="text-center">Product Features</h2>
            <div class="container">
                <div class="product_features" name="product_features" id="product_features">
                    <?=$row_p_d['product_features']?>
                </div>
            </div>
        </div>
        <div class=" col-md-6">
            <h2 class="text-center">Product Description</h2>
            <div class=" container">
                <div class="product_desc" name="product_desc" id="product_desc">
                    <?=$row_p_d['product_desc']?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php $label=" You also like these products. ";
require_once('label.php');
require_once('products.php');
?>
</main>
<footer class=" mt-5 line " style=" font-size: 15px; ">
<?php
    require_once('footer.php');
?>
</footer>
<?php
    require_once('bottom.php');

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if (isset($_POST['cart'])) {
    if(isset($_SESSION['id'])){  
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];

        $customer_id = $_SESSION['id'];
        $pro_title=$_POST['pro_title'];
        $pro_id=$_POST['pro_id'];
        $quantity=$_POST['quantity'];
        $sale_price=$_POST['sale_price'];
        $sql="INSERT INTO `cart` (`pro_title`, `pro_id`, `quantity`, `sale_price`, `customer_id`) VALUES('$pro_title', '$pro_id', '$quantity', '$sale_price', '$customer_id')";
        if ($conn->query($sql))
        {
            echo "<script>window.location.href='cart.php'</script>";
        }
        else
        {
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
    else
    {
        echo "<script>window.location.href='login.php'</script>";
    }
}

if (isset($_POST['wishlist']))
{
    if(isset($_SESSION['id'])){  
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        $customer_id = $_SESSION['id'];
        $product_id=$_POST['pro_id'];
        $quantity=$_POST['quantity'];
        $sql1="INSERT INTO `wishlist` (`customer_id`, `product_id`, `quantity`) VALUES('$customer_id', '$product_id', '$quantity')";
        if ($conn->query($sql1)) 
        {
            echo "<script>window.location.href='my_account.php?wishlist'</script>";
        }
        else 
        {
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
    else
    {
        echo "<script>window.location.href='login.php'</script>";
    }
}





?>