<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<!-- <div class="container-fluid"> -->
<div class="container-fluid position-relative mx-1 d-inline-block text-center " style="overflow:scroll; overflow:hidden; padding-right: 13rem !important; ">
    <h1 class="m-1">OVS Admin</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive ">
                <?php
                include("../../controller/database.php");
                $query_org = "SELECT `unic_id`, `name`, `email`, `mobile_number`, `deactivated_by_OVS`, `create_date`, `created_by_id` FROM `ovs_admin` WHERE `user_status`= 1";
                $insert = mysqli_query($dbcon, $query_org);
                // print_r($insert->fetch_assoc());
                $sn = 1;
                //    die;
                ?>


                <table class="table table-bordered">
                    <table class="table table-bordered table-striped">
                       <!--SELECT `id`, `unic_id`, `name`, `email`, `mobile_number`, `password`, `deactivated_by_OVS`, `user_status`, `create_date`, `deactivated_date`, `created_by_id` FROM `ovs_admin` WHERE 1 -->
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">OVS ID</th>
                                <th scope="col">Admin Name</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Created By OVS ID</th>
                                <th scope="col">Time/Date</th>
                                <th scope="col">Deactivate</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($insert as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $sn++; ?></th>
                                <td><?php echo $row['unic_id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile_number']; ?></td>
                                <td><?php echo $row['created_by_id']; ?></td>
                                <td><?php echo $row['create_date']; ?></td>

                                <!-- <td><a href="../../controller/org_admin_request.php?&azyx&lop=<?php
                                                                                                    //  echo $row['unic_id']; 
                                                                                                    ?>" class="btn btn-sm btn-secondary">Accept</a></td>
                                    <td><a href="../../controller/org_admin_request.php?rxyz&lop=<?php
                                                                                                    // echo $row['unic_id'];
                                                                                                    ?>" class="btn btn-sm btn-secondary">Reject</a></td> -->

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->
<?php include("../navbar_footer/footer.php"); ?>