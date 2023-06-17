<?php
    $result = false;
    require_once('connection.php');
    if(isset($_POST['register'])){
        $name = $_POST['u_name'];
        $email = $_POST['u_email'];
        $password = $_POST['u_password'];
        $country = $_POST['u_country'];
        $random_nums = strtotime("now");
        $picture = $random_nums."_".$_FILES ['u_picture'] ['name'];
        $temp_pic = $_FILES ['u_picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "aimages/$picture");

        $sql = "INSERT INTO `users` (user_name, user_email, user_password, user_country, user_picture) VALUES('$name', '$email', '$password', '$country', '$picture')";
        if ($conn->query($sql)) {
            // echo "<script> alert('Data has been inserted')</script>";
            echo "<script>window.location.href='index.php?view_users'</script>";
            $result = true;
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
        if ($result == true) {
            echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been Submitted Successfully!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }
          else{
            echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button> </div>';
          }
    }
?>
    <div class="row">
        <div class="col-md-12">
            <br>
            <div class="breadcrumb">
                <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert User</h5>
            </div>
        </div>
    </div>
    <h1 class="text-center my-3 display-4"> <b> Register A New User </b> </h1>
    <form method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="u_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail12" class="form-label">User Email</label>
            <input type="email" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" name="u_email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail13" class="form-label">User Password</label>
            <input type="password" class="form-control" id="exampleInputEmail13" aria-describedby="emailHelp" name="u_password">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail15" class="form-label">User Country</label>
            <input type="text" class="form-control" id="exampleInputEmail15" aria-describedby="emailHelp" name="u_country">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword19" class="form-label">User Image</label>
            <input type="file" class="form-control" id="exampleInputPassword19" name="u_picture">
        </div>
        <div class="text-center">
            <button class="btn btn-primary" name="register"> <span><img src="images/registartion icon.jpg" width="20"></span>Register</button>
        </div>
    </form>