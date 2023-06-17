<?php
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['country']);
    unset($_SESSION['picture']);
    session_destroy();
    header("location:user_login.php");
    // echo "<script>window.location.href='user_login.php'</script>";
?>