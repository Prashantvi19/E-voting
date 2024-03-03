<!-- There is inclided file  -->

<div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" id="org_select" data-wow-delay="0.9s">
    <div class="row g-3">
        <div class="col-xl-12">
            <h1 class="m-0 text-center">OVS</h1>
        </div>
        <?php
        $query_org = " SELECT `id`,`org_name` FROM `org_admin`";
        include("../../controller/database.php");
        $insert = mysqli_query($dbcon, $query_org);
        ?>
        <!-- INSERT INTO `org_participate`(`id`, `user_belong`, `org_email_id`, `org_mobile_number`, `first_name`, `middle_name`, `last_name`, `email_by_voter`, `mobile_number_by_voter`, `password`)-->
        <div class="col-xl-12">
            <select class="form-select bg-light border-0 " name="user_belong" style="height:55px;">
                <option selected disabled>Select election Organization</option>
                <?php foreach ($insert as $row) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['org_name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-12">
            <input type="text" class="form-control bg-light border-0" id="org_id" name="org_email_id" placeholder="Organization Allocated ID" style="height: 55px;">
        </div>
        <div class="col-12">
            <input type="text" class="form-control bg-light border-0" id="default_user_password" name="default_user_password" placeholder="Allocated Password" style="height: 55px;">
        </div>
        <div class="col-12">
            <input class="btn btn-dark w-100 py-3" id="org_next" type="button" value="Next">
        </div><br>
    </div>
</div>