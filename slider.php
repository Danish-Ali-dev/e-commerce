<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
    require_once('connection.php');
    $sql = "SELECT * FROM insert_slide ORDER BY id DESC LIMIT 3";
    $result = $conn->query($sql);
    $pics=array();
    while($row = $result->fetch_assoc())
    {
        array_push($pics,$row);
    }
?>
    <div class="carousel-item active">
      <img src="admin/aimages/<?php echo $pics[0]['picture']; ?>" width="100%" height="600" class="d-block w-100" alt="product">
    </div>
    <div class="carousel-item">
      <img src="admin/aimages/<?php echo $pics[1]['picture']; ?>" width="100%" height="600" class="d-block w-100" alt="product">
    </div>
    <div class="carousel-item">
      <img src="admin/aimages/<?php echo $pics[2]['picture']; ?>" width="100%" height="600" class="d-block w-100" alt="product">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>