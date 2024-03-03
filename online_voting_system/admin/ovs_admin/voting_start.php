<!-- INSERT INTO `login_data`(`id`, `user_belong`, `user_id`, `unic_id`, `email`, `contact_number`, `user_type`, `password`, `user_status`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')
INSERT INTO `sub_admin`(`id`, `org_id`, `email`, `date`, `created_by`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]') -->
<?php include("../navbar_footer/navbar.php"); ?>
<!-- Blank Start -->
<!-- <div class="container-fluid"> -->
<div class="container-fluid position-relative mx-1 d-inline-block text-center h-100 w-100" >
    <h1 class="m-1">Voting Start/Stop</h1>
    <div class="row bg-light h-100 w-100">
        <div class="ps-1 col-lg-12">
            <div class="bg-light rounded h-100 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <!-- user_belong/org_id, unic_id(email), contact_number:- null, user_type, user_status, -->
                        <tr>
                            <th scope="row">Action:- </th>
                            <th scope="col">Start Voting</th>
                            <th scope="col">End Voting</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Action button</th>                            
                            <td><a href="../../controller/voting_end_start.php?&vstzyx" class="btn btn-sm btn-secondary">Vote Start</a></td>
                            <td><a href="../../controller/voting_end_start.php?&vEnzyx" class="btn btn-sm btn-secondary">End Voting</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Blank End -->
<?php include("../navbar_footer/footer.php"); ?>