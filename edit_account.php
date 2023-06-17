    <main>
        <h1 class="text-center mb-3 display-4"> <b> Edit Your Account </b> </h1>
            <form method="post" enctype='multipart/form-data'>
                    <?php
                        require_once('connection.php');
                        if (isset($_GET['edit_account'])) {
                            if(!isset($_SESSION)) 
                            { 
                                session_start(); 
                            }
                            $edit_id = $_SESSION['id'];
                            $sql = "SELECT * FROM registration WHERE id = '$edit_id' ";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                    ?>
                <div class="container">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?= $row['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail12" class="form-label">Customer Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" name="email" value="<?= $row['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail15" class="form-label">Customer Country</label>
                        <input type="text" class="form-control" id="exampleInputEmail15" aria-describedby="emailHelp" name="country" value="<?= $row['country'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword16" class="form-label">Customer City</label>
                        <input type="text" class="form-control" id="exampleInputPassword16" name="city" value="<?= $row['city'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword17" class="form-label">Customer Contact</label>
                        <input type="text" class="form-control" id="exampleInputPassword17"   name="contact" value="<?= $row['contact'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword18" class="form-label">Customer Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword18"  name="address" value="<?= $row['address'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword19" class="form-label">Customer Image</label>
                        <input type="file" class="form-control" id="exampleInputPassword19" name="picture">
                        <img src="pimages/<?= $row['picture'] ?>" alt="User Pic" height="300">
                    </div>
                    <?php
                        }
                    ?>
                    <div class="text-center">
                        <button class="btn btn-primary mb-3" name="update"> <span><img src="images/registartion icon.jpg" width="20"></span> Update Now</button>
                    </div>
                </div>
            </form>
    </main>
<?php
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $random_nums = strtotime("now");
        $picture = $random_nums."_".$_FILES ['picture'] ['name'];
        $temp_pic = $_FILES ['picture'] ['tmp_name'];
        move_uploaded_file($temp_pic, "pimages/$picture");

        $sql="UPDATE registration SET `name` = '$name', `email` = '$email', country = '$country', city = '$city', `contact` = '$contact', `address` = '$address', `picture` = '$picture', `date/time` = CURRENT_TIME() WHERE id = '$edit_id' ";
        if($conn->query($sql)){
            // echo "<script>window.location.href='index.php?view_products'</script>";
             echo "<script> alert('Data has been updated')</script>";
        }
        else{
            echo "<br>Error!". $conn->connect_error;
        }
    }