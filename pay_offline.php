<?php
        $title = "Pay Offline";
?>
    <main>
        <div class="container">
            <div class="row my-3">
            <?php
                $location = "Pay Offline";
                require_once('location.php');
            ?>
            </div>
        </div>
        <div class="order_table text-center container">
            <div class="mt-4">
                <h1>Pay Offline Using Method</h1>
            </div>
            <p>Your Orders on one place</p>
            <p>If you have any questions, please feel free to <a href="contact_us.php" style="text-decoration: none;">contact us</a>, our customer service center is working for you 24/7.</p>
            <div class="container-fluid">
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Bank Account Details</th>
                            <th scope="col">Easy Paisa,ULB,Omni,Mobi,Cash Details </th>
                            <th scope="col">Western Union Details:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bank:ubl Account No:033233433 Branch Code:0342 Branch Name: Shadra Lahore</td>
                            <td>NIC#0012334564 Mobile No: 033324563423, Name: M.T.Ahmed</td>
                            <td>Full Name: M.T.Ahmed, Mobile no:033324563423, Name: M.T.Ahmed, Country: Pakistan, N.I.C No: 001233233</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </main>