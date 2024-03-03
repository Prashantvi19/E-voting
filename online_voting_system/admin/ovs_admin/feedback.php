<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<!-- <div class="container-fluid"> -->
<div class="container-fluid position-relative mx-1 d-inline-block text-center h-100 w-100" style="overflow:scroll; overflow:hidden; padding-right: 13rem !important; ">
    <h1 class="m-1">Feedback</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12 w-100">
            <div class="bg-light rounded h-100 w-100 table-responsive">
                <?php
                include("../../controller/database.php");
                $query_org = "SELECT  `active_id`, `name`, `email`, `ovs_admin_id`, `reply`, `rating`, `address_feedback`, `date`, `reply_date` FROM `feedback` ";
                $insert = mysqli_query($dbcon, $query_org);
                // print_r($insert->fetch_assoc());
                $sn = 1;
                //    die;
                ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <!-- SELECT `id`, `active_id`, `name`, `email`, `ovs_admin_id`, `reply`, `rating`, `address_feedback`, `date`, `reply_date` FROM `feedback` WHERE 1 -->
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Active ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <!-- <th scope="col">Profile</th> -->
                            <th scope="col">Rate</th>
                            <th scope="col">feedback</th>
                            <th scope="col">Time/Date</th>
                            <!-- <th scope="col">ovs_admin_id</th> -->
                            <!-- <th scope="col">Reply</th>
                            <th scope="col">Reply Time/Date</th>
                            <th scope="col">Reply (Submit/Edite/Update)</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($insert as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $sn++; ?></th>
                                <td><?php echo $row['active_id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['rating']; ?></td>
                                <td><?php echo $row['address_feedback']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <!-- <td><?php // echo $row['ovs_admin_id']; ?></td>
                                <td><?php //echo $row['reply']; ?></td>
                                <td><?php //echo $row['reply_date']; ?></td>
                                <td></td> -->

                                <!-- <td><a href="../../controller/org_admin_request.php?&azyx&lop=<?php
                                                                                                    //  echo $row['unic_id']; 
                                                                                                    ?>" class="btn btn-sm btn-secondary">Accept</a></td>
                                    <td><a href="../../controller/org_admin_request.php?rxyz&lop=<?php
                                                                                                    // echo $row['unic_id'];
                                                                                                    ?>" class="btn btn-sm btn-secondary">Reject</a></td> -->

                            </tr>
                            <!-- </form> -->
                        <?php } ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->
<?php include("../navbar_footer/footer.php"); ?>