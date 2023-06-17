<?php
    require_once('connection.php');
    if(isset($_POST['register'])){
        $name = $_POST['c_name'];
        $email = $_POST['c_email'];
        $password = $_POST['c_password'];
        $e_password = MD5($password);
        $country = $_POST['c_country'];
        $city = $_POST['c_city'];
        $contact = $_POST['c_contact'];
        $address = $_POST['c_address'];
        $random_nums = strtotime("now");
        $picture = $random_nums."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "pimages/$picture");

        $sql1 = "SELECT * FROM registration WHERE email = '$email' ";
        $result1 = $conn->query($sql1);
        $count = mysqli_num_rows($result1);
        if ($count > 0) {
            echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Your Email is already taken ... Please try a different Email!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        else {
            $sql = "INSERT INTO `registration` (name, email, password, country, city, contact, address,picture) VALUES('$name', '$email', '$e_password', '$country', '$city', '$contact', '$address', '$picture')";

            if ($conn->query($sql)) {
                echo "<script>window.location.href='login.php'</script>";
            }
            else{
                echo "<br>Error!!" . $conn->connect_error;
            }
        }  
    }

    $title = "Registartion";
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
        <div class="row my-3">
            <?php
                $location = "Register";
                require_once('location.php');
            ?>
        </div>
        <h1 class="text-center display-4"> <b> Register A New Account </b> </h1>
        <form method="post" enctype='multipart/form-data'>
            <div class="container">
                <div class="container">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="c_name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail12" class="form-label">Customer Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp"
                            name="c_email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail13" class="form-label">Customer Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail13"
                            aria-describedby="emailHelp" name="c_password" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail15" class="form-label">Customer Country</label>
                        <input type="text" class="form-control" id="exampleInputEmail15" aria-describedby="emailHelp"
                            name="c_country" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword16" class="form-label">Customer City</label>
                        <input type="text" class="form-control" id="exampleInputPassword16" name="c_city" required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword17" class="form-label">Customer Contact</label>
                        <input type="text" class="form-control" id="exampleInputPassword17" name="c_contact"
                            required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword18" class="form-label">Customer Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword18" name="c_address"
                            required="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword19" class="form-label">Customer Image</label>
                        <input type="file" class="form-control" id="exampleInputPassword19" name="picture" required="">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary mb-3" name="register">
                            <i class="bi bi-person-fill"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Register</button>
                    </div>
                </div>
            </div>
        </form>
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