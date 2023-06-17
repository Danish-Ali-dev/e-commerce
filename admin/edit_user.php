    <div class="row">
        <div class="col-md-12">
            <br>
            <div class="breadcrumb">
                <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Edit User</h5>
            </div>
        </div>
    </div>
    <h1 class="text-center my-3 display-4"> <b> Edit User </b> </h1>
    <form method="post" enctype='multipart/form-data'>
        <?php
            require_once('connection.php');
            if(isset($_GET['edit_user_id'])){
            $edit_id = $_GET['edit_user_id'];
            $sql = "SELECT * FROM users WHERE user_id = '$edit_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input type="text" class="form-control" value="<?php echo $row['user_name'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="u_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail12" class="form-label">User Email</label>
            <input type="email" class="form-control" value="<?php echo $row['user_email'] ?>" id="exampleInputEmail12" aria-describedby="emailHelp" name="u_email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail13" class="form-label">User Password</label>
            <input type="text" class="form-control" value="<?php echo $row['user_password'] ?>" id="exampleInputEmail13" aria-describedby="emailHelp" name="u_password">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail15" class="form-label">User Country</label>
            <input type="text" class="form-control" value="<?php echo $row['user_country'] ?>" id="exampleInputEmail15" aria-describedby="emailHelp" name="u_country">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword19" class="form-label">User Image</label>
            <input type="file" class="form-control" id="exampleInputPassword19" name="u_picture">
            <img src="aimages/<?php echo $row['user_picture'] ?>" alt="shirt" height="70" width="80">
        </div>
        <?php
            }
        ?>
        <div class="text-center">
            <button class="btn btn-primary" name="register"> <span><img src="images/registartion icon.jpg" width="20"></span>Edit</button>
        </div>
    </form>

<?php
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

        $sql = "UPDATE `users` SET user_name = '$name', user_email = '$email', user_password = '$password', user_country = '$country', user_picture = '$picture', `date/time` = CURRENT_TIME() WHERE user_id = '$edit_id'";
        if ($conn->query($sql)) {
            // echo "<script> alert('Data has been inserted')</script>";
            echo "<script>window.location.href='index.php?view_users'</script>";
        }
        else{
            echo "<br>Error!!" . $conn->connect_error;
        }
    }
?>