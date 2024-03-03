<?php include("../navbar_footer/navbar.php");
session_start(); ?>
<!-- Blank Start -->
<div class="container-fluid position-relative d-inline-block text-center " style="overflow:scroll; overflow:hidden; padding-right: 13rem !important; ">
    <h1 class="m-1">List Sub-Admins</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <?php
                //                     print_r($_GET);
                // die;
                $user_belong = $_SESSION['user_belong'];
                include("../../controller/database.php");
                // SELECT `id`, `user_belong`, `user_id`, `unic_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at` FROM `login_data` WHERE 1

                $query_org = "SELECT `unic_id`, `email`, `password`, `created_at` FROM `login_data` WHERE `user_type` = 3 AND `user_belong`= '$user_belong'";

                $insert = mysqli_query($dbcon, $query_org);
                // print_r($insert->fetch_assoc());
                $sn = 1;
                //    die;
                ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.No.</th>
                            <th scope="col">Allocated ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Time/Date</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($insert as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $sn++; ?></th>
                                <td><?php echo $row['unic_id']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td><a href="../../controller/sub_admin_delete.php?&subddzyx&lop=<?php echo $row['unic_id']; ?>" class="btn btn-sm btn-secondary">Delete</a></td>

                                <!-- <td><a href="../../controller/org_admin_request.php?rxyz&lop=<?php // echo $row['unic_id']; ?>" class="btn btn-sm btn-secondary">Reject</a></td> -->

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