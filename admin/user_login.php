<?php
    require_once('connection.php');
    session_start();
    if (isset($_POST['login'])) {
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE user_email='$user_email' AND user_password='$password' ";
        $result = $conn->query($sql);
        $count = mysqli_num_rows($result);
        if($count>0){
            $row = $result->fetch_assoc();
            $_SESSION['name'] = $row['user_name'];
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['password'] = $row['user_password'];
            $_SESSION['country'] = $row['user_country'];
            $_SESSION['picture'] = $row['user_picture'];
            echo "<script>window.location.href='index.php?dashboard'</script>";
        }
        else{
            echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Your Email and Password is Incorrect!!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrator Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <style>
            body {
                background-color: rgb(52, 206, 142);
            }
            
            #div-panel {
                height: 320px;
                width: 350px;
                background-color: aliceblue;
                margin: auto;
                margin-top: 10%;
                border-radius: 30px;
            }
        </style>
    </head>

    <body>
        <div id="div-panel">
            <br> <br>
            <h3 class="mb-3 text-primary text-center">Admin Login</h3>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <form method="post">
                        <input type="email" class="form-control shadow-lg p-3 mb-2 bg-body rounded" placeholder="Email Address" name="user_email">
                        <input type="password" id="myInput" class="form-control shadow-lg p-3 mb-2 bg-body rounded" placeholder="Password" name="password">
                        <input type="checkbox" class="mb-3" onclick="myFunction()"> &nbsp;Show Password
                        <br>
                        <button class="btn btn-primary btn-block" name="login">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js " integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf " crossorigin="anonymous "></script>


    </html>