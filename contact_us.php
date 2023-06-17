<?php
    require_once('connection.php');
    if (isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        $to = "dali27363@gmail.com";
        $headers = "From:". $email."\r\n" .
        mail($to,$subject,$msg,$headers);
        $sql = "INSERT INTO `contact_us` (`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$msg')";
        if ($conn->query($sql)) {
            echo "<script> alert('Data has been inserted')</script>";
            // echo "<script>window.location.href='index.php?view_manufacturer'</script>";
            echo "Email successfully sent to $to...";
        } else {
            echo "Error!!<br>Email sending failed..." . $conn->connect_error;
        }
    }
    $title = "Contact Us";
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
            $location = "Contact Us";
            require_once('location.php');
        ?>
        <h1 class="text-center mt-2 display-4"> <b> Contact To Us </b> </h1>
        <p class="text-center mb-5" style="font-size: 18px;">If you have any questions,please feel free to contact
            us,our customer service center is working for you 24/7</p>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required="">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required="">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required="">
            </div>
            <div>
                <label for="msg">Message</label>
                <textarea class="form-control mb-3" id="msg" name="msg" required=""></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" name="send"> Send Message </button>
            </div>
        </form>
</main>
<footer class=" mt-5 line" style="font-size: 15px;">
    <?php
                require_once('footer.php');
            ?>
</footer>
<?php
        require_once('bottom.php');
    ?>