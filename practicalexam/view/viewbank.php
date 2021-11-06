<?php

include '../model/bank_details_model.php';
?>

<!-- Crud Table -->

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto text-justify text-justify">
                <div class="row pt-md-5 mt-md-3 mb-5">
                    <div class="pt-3 pl-3 mx-auto ">
                        <a href="admin_staff.php"><i class="far fa-arrow-alt-circle-left fa-lg" style="color: black;"></i></a>
                    </div>
                    <div class="col-xl-11 col-lg-10 col-md-11 col-11 p-2 mx-auto">
                        <div>
                            <h2 class="text-center">Bank Details | VIEW</h2>
                        </div>
                    </div>
                </div>
                <div class="pl-2 pr-2">

                    <!--crud table start-->

                    <div class="w3-responsive">
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'internship');

                        if (!$conn) {
                            die("Connection Failed: " . mysqli_connect_error());
                        }

                        $result = mysqli_query($conn, "SELECT * FROM bank_details");

                        ?>
                        <?php
                        $bank_id = $_GET['bank_id'];
                        $result = mysqli_query($conn, "SELECT * FROM bank_details WHERE bank_id='$bank_id'");

                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <table id="t2" class="table table-bordered">

                                <tr>
                                    <th>#</th>
                                    <td><?php echo  $row['bank_id'] ?></td>
                                    <th>Bank Name</th>
                                    <td><?php echo  $row['bank_name'] ?></td>
                                </tr>

                                <tr>
                                    <th>Branch Name</th>
                                    <td><?php echo  $row['branch_name'] ?></td>
                                    <th>Branch Code</th>
                                    <td><?php echo  $row['branch_code'] ?></td>

                                </tr>

                                <tr>
                                    <th>Account Number</th>
                                    <td><?php echo  $row['account_number'] ?></td>
                                </tr>

                            <?php
                        }
                            ?>
                            </table>
                    </div>
                    <!-- End of Crud Table -->

                </div>
            </div>
        </div>
    </div>
</section>