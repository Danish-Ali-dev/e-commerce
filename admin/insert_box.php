<?php
$result = false;
require_once('connection.php');
if (isset($_POST['insert'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `insert_box` (title, description) VALUES('$title', '$description')";
    if ($conn->query($sql)) {
        $result = true;
        // echo "<script> alert('Data has been inserted')</script>";
        echo "<script>window.location.href='index.php?view_box'</script>";
    }
    else{
        echo "<br>Error!!" . $conn->connect_error;
    }
    if ($result == true) {
        echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your data has been submitted Successfully!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    else{
        echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>';
    }
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="breadcrumb">
            <h5><span class="glyphicon glyphicon-retweet"></span> Dashboard / Insert Box</h5>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-tasks"> Insert Box</span></p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <form method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="title1" class="form-label pull-right">Box Title:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="title1" name="title">
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-3">
                            <label for="title2" class="form-label pull-right">Box Description:</label>
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control" id="title2" rows="10" cols="30" name="description"></textarea>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block" name="insert">Insert Box</button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
