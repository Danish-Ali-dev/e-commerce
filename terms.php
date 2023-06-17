<?php
$title = "Terms ans Conditions";
require_once('head.php');
?>

<header>
    <?php
        require_once('topnav.php');
        require_once('navbar.php');
    ?>
</header>
    <main>
        <div class="container">
            <div class="row my-3">
            <?php
                $location = "Terms ans Conditions";
                require_once('location.php');
            ?>
            </div>
            <div class="row">
                <div class="col-md-2 small">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Shipping and Reshipping Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Payment Term/Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div style="background-color: white">
                        <br>
                        <div class="text-center">
                            <div class="container">
                                <h1>Shipping and Reshipping Policy</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, quidem. Blanditiis exercitationem reiciendis, cumque ipsa quaerat nisi voluptatum nihil excepturi dolorem! Atque, modi placeat! Aperiam amet repellendus obcaecati?
                                    Dolor commodi deserunt ab harum, temporibus ullam accusamus, veritatis voluptatem veniam officiis nihil placeat. Saepe quam ipsam tempore. In autem ex eaque doloremque quibusdam corporis mollitia sed labore culpa consequatur
                                    omnis veritatis dolore explicabo optio sequi deleniti, dolor voluptatibus iusto atque temporibus at natus. Eaque architecto, minima nihil hic fugit praesentium. Iure maxime ut recusandae. Ad, quam dolor eveniet tempore
                                    dolorem dolorum quas libero possimus eius hic architecto neque ea iusto illo! <br>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class=" mt-5 line" style="font-size: 15px;">
        <?php
            require_once('footer.php');
        ?>
    </footer>
    <?php
        require_once('bottom.php');
    ?>