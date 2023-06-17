    <?php
        $title = "Best Online Products in Pakistan | itechzonee.com";
        $label = "Latest Products In This Week";
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
            <?php
                require_once('slider.php');
            ?>
            </div>
            <br>
            <?php
                require_once('headings.php');
            ?>
            </div> <br>
            <?php
                require_once('label.php');
                require_once('products.php');
            ?>
            <div class="text-center">
                <a href="all_products.php" class="btn btn-outline-primary btn-lg text-center mb-3">See All Products</a>
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