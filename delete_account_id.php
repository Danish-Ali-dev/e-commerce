<?php
    require_once('connection.php');
    if(isset($_GET['delete_account'])){
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        $delete_id = $_SESSION['id'];
        $sql = "DELETE FROM registration WHERE id = '$delete_id' ";
        if($conn->query($sql)){
            // echo "<script> alert('Data has been Deleted Successfully')</script>";
            $result = true;
        }
        else{
            echo "<br>Error";
        }
        if ($result == true) {
            echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your data has been Deleted Successfully!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            require_once('logout.php');
        }
        else{
            echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Your Account is not deleted Successfully!!! Please Try again...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button> </div>';
        }
    }
?>