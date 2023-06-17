<div class="order_table text-center container">
                    <div class="mt-4">
                        <h1>My Orders</h1>
                    </div>
                    <h5>Your Orders on one place</h5>
                    <p>If you have any questions, please feel free to <a href="contact_us.php"
                            style="text-decoration: none;">contact us</a>, our customer service center is working for you
                        24/7.</p>
                    <div class="container-fluid">
                        <hr>
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">Sr no</th>
                                    <th scope="col">Order Number</th>
                                    <th scope="col">Due Amount</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(!isset($_SESSION)) 
                                { 
                                    session_start(); 
                                }
                                $customer_id = $_SESSION['id'];
    
                                $sql = "SELECT * FROM orders WHERE customer_id = '$customer_id' ";
    
                                $result = $conn->query($sql);
                                $sno = 1;
                                while($row = $result->fetch_assoc())
                                {
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?= $sno ?>
                                    </th>
                                    <td>
                                        <?= $row['order_id'] ?>
                                    </td>
                                    <td>
                                        <?= $row['amount'] ?>
                                    </td>
                                    <td>
                                        <?= $row['date/time'] ?>
                                    </td>
                                    <td>
                                    <?php if($row['status'] == 0){
                                        echo "Unpaid";
                                    }
                                    elseif ($row['status'] == 1) {
                                        echo "Processing";
                                    }
                                    else{
                                        echo "Paid";
                                    }
                                    ?>
                                    </td>
                                    <td>
                                        <a href="order_details.php?order_detail=<?= $row['order_id']; ?>" class="btn btn-primary">
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                            </svg>
                                        </a>
                                        <a href="my_account.php?payment=<?= $row['order_id'] ?>" class="btn btn-primary">
                                            <i class="bi bi-credit-card"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
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
            </div>