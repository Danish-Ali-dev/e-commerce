<?php
    $title = "My Account";
    require_once('head.php');
?>
<header>
    <?php
            require_once('topnav.php');
            require_once('navbar.php');
        ?>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            <?php
                    $location = "My Account";
                    require_once('location.php');

                    $pic = $_SESSION['picture'];
                ?>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-12 nav-class">
                <figure>
                    <img src="pimages/<?= $pic ?>" alt="pic" height="200" width="225">
                </figure>
                <h4 class="text-center mb-3">Name : <?= $_SESSION['name'] ?></h4>
                <section class="shadow p-3 mb-3 bg-body rounded">
                    <div class="container">
                        <div class="my-3">
                            <a href="my_account.php?my_orders">My Orders</a>
                        </div>
                        <div class="my-3">
                            <a href="my_account.php?pay_offline">Play Offline</a>
                        </div>
                        <div class="my-3">
                            <a href="my_account.php?edit_account">Edit Account</a>
                        </div>
                        <div class="my-3">
                            <a href="my_account.php?change_password">Change Password</a>
                        </div>
                        <div class="my-3">
                            <a href="my_account.php?wishlist">My Wishlist</a>
                        </div>
                        <div class="my-3">
                            <a href="my_account.php?delete_account">Delete Account</a>
                        </div>
                        <div class="my-3">
                            <a href="logout.php">Log Out</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8 form-class col-sm-12">
            <?php
                if(isset($_GET['my_orders'])){
                    include('my_orders.php');
                }
                if(isset($_GET['pay_offline'])){
                    include('pay_offline.php');
                }
                if(isset($_GET['edit_account'])){
                    include('edit_account.php');
                }
                if(isset($_GET['delete_account'])){
                    include('delete_account.php');
                }
                if(isset($_GET['wishlist'])){
                    include('wishlist.php');
                }
                if(isset($_GET['delete_wishlist_id'])){
                    include('wishlist.php');
                }
                if(isset($_GET['change_password'])){
                    include('change_password.php');
                }
                if(isset($_GET['payment'])){
                    include('payment.php');
                }
            ?>
        </div>
    </div>
</main>
<footer class="mt-5 line" style="font-size: 15px;">
    <?php
                require_once('footer.php');
            ?>
</footer>
<?php
            require_once('bottom.php');
        ?>