<?php
    $title = "Login";
    require_once('head.php');

    require_once('connection.php');
    session_start();
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $e_password = MD5($password);

        $sql = "SELECT * FROM registration WHERE `email`='$email' AND `password`='$e_password' ";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);
        if($count>0){
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['picture'] = $row['picture'];
            $_SESSION['password'] = $row['password'];
            echo "<script>window.location.href='index.php'</script>";
        }
        else{
            echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Your Email and Password is Incorrect!!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
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
                $location = "Login";
                require_once('location.php');
            ?>
        </div>
        <h1 class="text-center mb-3 display-4"> <b> Login </b> </h1>
        <form method="post"> <br>
            <div class="container">
                <div class="container">
                    <div class="mb-3">
                        <label for="exampleInputEmail12" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp"
                            name="email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="myInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="myInput" aria-describedby="emailHelp"
                            name="password" required="">
                        <input type="checkbox" class="my-3" onclick="myFunction()"> &nbsp;Show Password
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary mb-1" name="login">
                            <i class="bi bi-person-fill"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> 
                            Login
                        </button> <br>
                        <a href="customer_registration.php" style="text-decoration: none; font-size: 18px;">If you are
                            new then register here</a>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </div>
</main>
<footer class=" mt-5 line" style="font-size: 15px;">
    <?php
            require_once('footer.php');
        ?>
    <script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</footer>
<?php
        require_once('bottom.php');
    ?>