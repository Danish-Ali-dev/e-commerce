<?php
    require_once('connection.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    

    $sql = "SELECT * FROM logo ORDER BY logo_id DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="admin/aimages/<?php echo $row['picture']; ?>" alt="product" width="100" height="60">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page " href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        PRODUCT CATEGORY
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                                    require_once('connection.php');
                                    $sql = "SELECT * FROM insert_product_category";
                                    $result = $conn->query($sql);
                                    while($row = $result->fetch_assoc())
                                    {
                                ?>
                        <li><a class="dropdown-item" href="product_categories.php?pro_cat=<?php echo $row['id'] ?>">
                                <?php echo $row['title']; ?> </a></li>
                        <?php
                            }        
                        ?>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page " href="all_products.php">ALL PRODUCTS</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page " href="cart.php">SHOPPING CART</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page " href="terms.php">TERMS CONDITION</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page " href="contact_us.php">CONTACT US</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page " href="help.php">HELP</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="btn btn-primary" href="cart.php"><span><img src="images/cart-fill.svg "alt="Cart "></span>&nbsp;<?= $count; ?> items in cart</a>
            </form>
        </div>
    </div>
</nav>