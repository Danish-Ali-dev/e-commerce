<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_POST['change'])){
        $customer_id = $_SESSION['id'];
        $password = $_SESSION['password'];
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        echo "<br>";
        $e_old_password = MD5($old_password);
        $e_new_password = MD5($new_password);
        if ($password  == $e_old_password) {
            $sql = "UPDATE `registration` SET `password` = '$e_new_password', `date/time` = CURRENT_TIME() WHERE id = '$customer_id' ";
            $conn->query($sql);
            echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your Password in Changed Sucessfully....
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            return;
        }
        else {
            echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Your Old Password in Incorrect!! Please Try again....
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button> </div>';
        }
    }
?>
<h1 class="text-center">Change Your Password</h1>
<form method="post">
    <div class="container">
        <div class="container">
            <div class="mb-3">
                <label for="old_password" class="form-label">Enter Your old Password</label>
                <input type="password" class="form-control" id="old_password" name="old_password" required="">
                <input type="checkbox" class="my-3" onclick="myFunction1()"> &nbsp;Show Password
            </div>
            <div class="mb-3">
                <label for="txtNewPassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="txtNewPassword" name="new_password" required="">
                <input type="checkbox" class="my-3" onclick="myFunction2()"> &nbsp;Show Password
            </div>
            <div class="mb-3">
                <label for="txtConfirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="txtConfirmPassword"name="confirm_password" required="">
                <input type="checkbox" class="my-3" onclick="myFunction3()"> &nbsp;Show Password
            </div>
            <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></div>
            <div class="text-center">
                <button class="btn btn-primary mb-1" name="change"> <span><img src="images/registartion icon.jpg" width="20"></span>Change Password</button>
            </div>
        </div>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        function myFunction1() {
            var x = document.getElementById("old_password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function myFunction2() {
            var x = document.getElementById("txtNewPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function myFunction3() {
            var x = document.getElementById("txtConfirmPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script>
    function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
    </script>
    