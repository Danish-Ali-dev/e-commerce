

<div class="row">
<?php
    require_once('connection.php');
    $sql = "SELECT * FROM insert_box ORDER BY id DESC LIMIT 3";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    {
?>
    <div class="col-md-4">
        <div class="box-1 box">
            <h2 class="text-center text-captilized"><?php echo $row['title']; ?></h2>
            <p><?php echo $row['description']; ?></p>
        </div>
    </div>
    <?php
    }
    ?>

</div>