
const navbarAdmin = document.getElementById('adminNavbar');
const ovsNavbar = `<ul class="nav list-group flex-column bg-secondary">
<li class="nav-item"> <a class="nav-link list-group-item  list-group-item-action" href="../ovs_admin/ovs_admin.php">OVS admin</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/deactivate_ovs_admin.php">OVS Admin Deactivated</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/total_org.php">Total Org</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/org_admin_request.php">Org Request</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/feedback.php">Feedback</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/contact.php">Contact</a></li>
<span>
 <hr class="dropdown-divider">
</span>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/ovs_admin_ad.php">Ad Admin</a></li>
<!-- 
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/mobile_update.php">Update Mobile</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/email_update.php">Update Email</a></li>
-->
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/pass_change.php">Change Password</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/pass_reset.php">Reset Password</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/logout.php">Logout</a></li>
</ul>`;
const orgNavbar = `<ul class="nav list-group flex-column .bg-secondary">
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/aplication_confirm.php">Voter Application Request</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/voter_form_remaining.php">Voter Application Remaining</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/total_voted_voters.php">Voted Voters list</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/total_remaining_votes.php">Remaining Voted list</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/total_voters.php">Voters list</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/total_candidates.php">Candidates list</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/candidate_request.php">Condidate Request</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/result_close.php">Result Close</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/voting_start.php">Voting Start</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/subadmin_list.php">Sub-admins list</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/create_subadmin.php">Create-Sub-admin </a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/contact.php?id="1>Contacts</a></li>
<span>
 <hr class="dropdown-divider">
</span>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/ad_participate.php">Add Participate</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/require_docment.php">Add Required Document</a></li>
<!--
 <li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/mobile_update.php">Update Mobile</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/email_update.php">Update Email</a></li>
 -->
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/pass_change.php">Change Password</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/pass_reset.php">Reset Password</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/logout.php">Logout</a></li>
</ul>`;

const orgsubadminNavbar = `
<ul class="nav list-group flex-column bg-secondary">
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/ad_participate.php">Ad Participate</a></li>
<li class="nav-item"> <a class="nav-link list-group-item list-group-item-action" href="../ovs_admin/logout.php">Logout</a></li>
</ul>`;

function addAdminNavbar(a) {
    // console.log(a)

    if (a == 5) {
        navbarAdmin.innerHTML = ovsNavbar;

    } else if (a == 2) {
        navbarAdmin.innerHTML = orgNavbar;
    } else if (a == 3) {
        navbarAdmin.innerHTML = orgsubadminNavbar;
    }
}


