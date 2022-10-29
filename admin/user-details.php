<?php
include './header.inc.php';
include './sidebar.inc.php';

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];
    $sql = "SELECT * from register where id = $id";
    $run = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($run);
    $assignedOn  = strtotime($row['added_on']);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $row['name'] ?> - <?= $pageTitle ?></title>
</head>

<body>




    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <?php
            include './topbar.inc.php';
            ?>
            <div class="card m-4">
                <div class="card-header">
                    Full Name
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['name']  ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                    Email
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><a href="mailto:<?= $row['email']?>"> <?= $row['email']  ?></a></p>

                    </blockquote>
                </div>
            </div>
            <div class="card m-4">
                <div class="card-header">
                    Phone Number
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><a href="tel:<?= $row['phone']?>"> <?= $row['phone']  ?></a></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                    Designation
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['designation'] ?></p>

                    </blockquote>
                </div>
            </div>
            <div class="card m-4">
                <div class="card-header">
                    College/Company Name
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['college_company'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                    Current Location
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['current_location'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                    Branch/Domain
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['branch_domain'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                   Year/Experience
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['year_experience'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                Why do you want to join the Mentorship Program ?
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['why_join'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
             Briefly, share your experience in Web2 (Any demo link (Deployed Web/App/Project/UI/UX) to showcase) ?*
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['share_experience'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                Do you have experience in Web3 (Any demo link (Deployed Web/App/Project/UI/UX) to showcase) ?
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['web3_experience'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                Have you worked on the Tezos Platform ? (Y/N)
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['worked_on_tezos'] ?></p>

                    </blockquote>
                </div>
            </div>
            
            <div class="card m-4">
                <div class="card-header">
                If Yes, briefly explain your work.
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['briefly_explain'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
               LinkedIn Link (Profile)
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['linkedin'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
               Github Link (Profile)
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['github'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
               Resume (Link)
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['resume'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
               What are your expectations from the Program ?
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['expactation'] ?></p>

                    </blockquote>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-header">
                Any additional comments ?
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $row['additional_comments'] ?></p>

                    </blockquote>
                </div>
            </div>
            
        </div>
        <?php


        include './footer.inc.php';
        ?>

</body>

</html>