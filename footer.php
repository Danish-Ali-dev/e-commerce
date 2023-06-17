
<footer>
    <div class="container">
    <div class="row">
        <div class="col-md-3 mb-2">
            <h4>Pages</h4>
            <a href="cart.php">Shopping Cart</a> <br>
            <a href="contact_us.php">Contact Us</a> <br>
            <a href="my_account.php?my_orders">My Account</a> <br>
            <hr>
            <h4><a href="User Section">User Section</a></h4>
            <a href="login.php">Login</a> <br>
            <a href="customer_registration.php">Register</a> <br>
            <a href="terms.php">Terms and Condition</a> <br>
            <a href="help.php">Help</a> <br>
        </div>
        <div class="col-md-3 mb-2">
            <h4 style="font-size: 23px;">Top Products Categories</h4>
            <?php
                require_once('connection.php');
                $sql = "SELECT * FROM insert_product_category";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc())
            {
            ?>
                <a href="<?= $row['title']; ?>"><?= $row['title']; ?></a> <br>
            <?php
                }
            ?>
        </div>
        <div class="col-md-3 mb-2">
            <h4>Where to find us</h4>
            <h5>iTech Zone</h5>
            <span>Pakistan</span> <br>
            <span>Lahore</span> <br>
            <span>+92 3054344650</span> <br>
            <span>dali273563@gmail.com</span> <br>
            <h5>Danish Ali</h5>
            <a href="contact_us.php" style="color: blue;">Go to Contact us page</a>
        </div>
        <div class="col-md-3 mb-2">
            <h5>Get the news</h5>
            <p>Our top rated Mobile, Laptops and other Products are very popoular in our customer the effect in the body positivity. Get updated with us</p>
            <div class="input-group">
                <input type="text">
                <div class="input-group-append">
                    <button class="btn btn-secondary btn-sm">Subscribe</button>
                </div>
            </div>
            <hr>
            <br>
            <h5>Stay in touch</h5>
        </div>
    </div>
    </div>
</footer>
<footer class="my-3 mb-0 bg-primary" style="height: 30px; color: white;">
        <p class="text-center my-0">&copy;Copyright 2021 iTech Zone | All Right Reserved</p>
    </div>
</footer>