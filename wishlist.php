<?php
    if(isset($_SESSION['id'])){  
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];

    $result = false;
    require_once('connection.php');
    if(isset($_GET['delete_wishlist_id'])){
        $delete_id = $_GET['delete_wishlist_id'];
        $sql = "DELETE FROM wishlist WHERE wishlist_id = '$delete_id' ";
        if($conn->query($sql)){
            // echo "<script> alert('Data has been Deleted Successfully')</script>";
            $result = true;
        }
        else{
            echo "<br>Error". $conn->connect_error;
        }
        if ($result == true) {
            echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been Deleted Successfully!!
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
</style>
<div class="order_table text-center container">
    <div class="mt-4">
        <h1>Your Wishlist</h1>
    </div>
    <h5>Your Wishlist on one place</h5>
    <p>If you have any questions, please feel free to <a href="contact_us.php" style="text-decoration: none;">contact
            us</a>, our customer service center is working for you
        24/7.</p>
    <div class="container-fluid">
        <hr>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Picture</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Wishlist Date</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!isset($_SESSION)) 
                    { 
                        session_start(); 
                    }
                    $customer_id = $_SESSION['id'];    
                    $sql = "SELECT * FROM wishlist WHERE customer_id = '$customer_id' ";
                    $result = $conn->query($sql);
                    $sno = 1;
                    while($row = $result->fetch_assoc())
                    {
                ?>
                <tr>
                    <th scope="row"> <?= $sno ?> </th>
                    <td>
                        <?php
                            $product_id = $row['product_id'];
                            $sql1 = "SELECT title FROM insert_product WHERE id = '$product_id' ";
                            $result1 = $conn->query($sql1);
                            $row1 = $result1->fetch_assoc();

                            $sql3 = "SELECT * FROM insert_product WHERE id = '$product_id' ";
                            $result3 = $conn->query($sql3);
                            $row3 = $result3->fetch_assoc();
                        ?>
                        <img src="admin/aimages/<?php echo $row3['image_1'] ?>" alt="product" style="border-radius: 50%"
                            height="40" width="40"> <?= $row1['title'] ?>
                    </td>
                    <?php
                        
                    ?>
                    <td><img src="admin/aimages/<?php echo $row3['image_1'] ?>" alt="product" height="70" width="80">
                    </td>
                    <td> <?= $row['quantity'] ?> </td>
                    <td> <?= $row['date/time'] ?> </td>
                    <td> <a href="my_account.php?delete_wishlist_id=<?php echo $row['wishlist_id'] ?>"
                            class="btn btn-danger">
                            <i class="bi bi-trash-fill"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php
                    $sno++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
}
else{
    ?>
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
        class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path
            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </svg>
    <div>
        You are not logged in. PLease <a href="login.php">Login</a> to continue
    </div>
</div>
<?php
    }
?>