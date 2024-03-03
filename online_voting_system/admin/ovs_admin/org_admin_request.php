<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<!-- <div class="container-fluid"> -->
<div class="container-fluid position-relative mx-1 d-inline-block text-center h-100 w-100">
    <h1 class="m-1">Ogr Request</h1>


    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <table class="table table-bordered table-striped">

                    <?php
                    include("../../controller/database.php");
                    $query_org = "SELECT `org_name`, `email`,`mobile_number`,`unic_id` FROM `org_admin` WHERE `user_status`= 0 ";
                    $insert = mysqli_query($dbcon, $query_org);
                    ?>

                    <thead>
                        <!-- INSERT INTO `org_admin`(`id`, `ovs_accepted_by_id`, `org_name`, `email`, `mobile_number`, `password`, `org_unic_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]') -->
                        <tr>
                            <th scope="row">S.No.</th>
                            <th scope="col">Allocate Org ID</th>
                            <th scope="col">Org Name</th>
                            <th scope="col">Email ID</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Accept </th>
                            <th scope="col">Reject</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($insert as $row) { ?>
                            <!-- <form action="../../controller/org_admin_request.php" method="post"> -->
                            <tr>

                                <th scope="row"><?php echo ++$sn; ?></th>
                                <td><?php echo $row['unic_id']; ?></td>
                                <td><?php echo $row['org_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['mobile_number']; ?></td>

                                <td><a href="../../controller/org_admin_request.php?&azyx&lop=<?php echo $row['unic_id']; ?>" class="btn btn-sm btn-secondary">Accept</a></td>
                                <td><a href="../../controller/org_admin_request.php?rxyz&lop=<?php echo $row['unic_id']; ?>" class="btn btn-sm btn-secondary">Reject</a></td>

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