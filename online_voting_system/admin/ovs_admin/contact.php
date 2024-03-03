<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<!-- <div class="container-fluid"> -->
<div class="container-fluid position-relative mx-1 d-inline-block text-center h-100 w-100">
    <h1 class="m-1">Contact</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <table class="table table-bordered table-striped">
                    <?php
                    // print_r($_GET);
                    // die;
                    session_start();
                    include("../../controller/database.php");
                    $user_belong = $_SESSION['user_belong'];
                    if (isset($_GET['id'])) {
                        $query_org = "SELECT `active_id`, `name`, `email`, `subject`, `messages`, `date` FROM `contact` WHERE `user_type`= 1 AND `user_belong` = '$user_belong'" ;
                    } else {
                        $query_org = "SELECT `active_id`, `name`, `email`, `subject`, `messages`, `date` FROM `contact` WHERE `user_type`= 2 OR `user_belong` ='public' ";
                    }
                    $insert = mysqli_query($dbcon, $query_org);
                    // print_r($insert->fetch_assoc());
                    $sn = 1;
                    //    die;
                    ?>


                    <thead>
                        <!-- INSERT INTO `contact`(`id`, `active_id`, `name`, `email`, `subject`, `messages`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]') -->
                        <tr>
                            <th>S.No.</th>
                            <th scope="col">Active ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date</th>
                            <!-- <th scope="col">Read Messages</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($insert as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $sn++; ?></th>
                                <td><?php echo $row['active_id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['messages']; ?></td>
                                <td><?php echo $row['date']; ?></td>

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