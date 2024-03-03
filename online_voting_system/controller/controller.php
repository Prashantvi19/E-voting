 <?php
    session_start();
    include("database.php");
    include("create_election.php");
    include("feedback.php");
    include("contact.php"); //  ############# Contact
    include("candidate.php"); //  ############# candidate 
    include("voter_application.php"); //  ############# voter application
    include("datasetAdminVoterOrg.php"); // ############# datasetAdminVoterOrg
    include("login.php"); // ############# login
    include("data_of_org_participate.php");// ############# Add participants
    include("signup.php");// ############# Add participants
    include("password_forgot.php"); // ############# forgot Password
    include("change_password.php"); // ############# Change Password
    include("update_email.php"); // ############# Update Email
    include("update_mobile_number.php");// ############# Update Email
    include("required_docs.php");// ############# Update Email