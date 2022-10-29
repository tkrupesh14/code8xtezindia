<?php
session_start();
include './admin/db.inc.php';
include './admin/functions.inc.php';



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $designation = $_POST['designation'];
    $college_company = $_POST['college-company'];
    $current_location = $_POST['current-location'];
    $branch_domain = $_POST['branch-domain'];
    $year_experience = $_POST['year-experience'];
    $why_join = $_POST['why-join'];
    $share_experience = $_POST['share-experience'];
    $web3_experience = $_POST['web3-experience'];
    $worked_on_tezos = $_POST['worked-on-tezos'];
    $briefly_explain = $_POST['briefly-explain'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $resume = $_POST['resume'];
    $expactation = $_POST['expactation'];
    $additional_comments = $_POST['additional-comments'];



    $que = "INSERT INTO register (name, email, phone, designation, college_company, current_location, branch_domain, year_experience, why_join, share_experience, web3_experience, worked_on_tezos, briefly_explain, linkedin, github, resume, expactation, additional_comments) VALUES ('$name', '$email', '$phone', '$designation', '$college_company', '$current_location', '$branch_domain', '$year_experience', '$why_join', '$share_experience', '$web3_experience', '$worked_on_tezos', '$briefly_explain', '$linkedin', '$github', '$resume', '$expactation', '$additional_comments')";
    $run = mysqli_query($connection, $que);

    if(!$run){
      echo "<script> alert('Something went wrong!')</script>";
    }else{
        echo "<script> alert('Data Inserted Successfully!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register - Code8 X Tezos Internship</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<!-- style="background-image: url(./img/bg4.jpg); background-size:cover; background-repeat:no-repeat; opacity:0.9;" -->
<body class="bg-img"  style="background-image: url(./img/bg4.jpg); background-size:cover; background-repeat:no-repeat; opacity:0.9;">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registration Form</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Enter Full Name*" name="name" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Enter Email*" name="email" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Enter Phone Number*" name="phone" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                <div class="form-check" >
                                    <input type="radio" class="form-check-input" name="designation" id="student" value="student" required> Student
                            
                                </div>
                                
                                <div class="form-check" >
                                    <input type="radio" class="form-check-input" name="designation" id="workingProfesstional" value="working professtional" required> Working Professional
                                </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Enter College/Company Name*" name="college-company" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Current Location*" name="current-location" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Branch/Domain Name*" name="branch-domain" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Year/Experience*" required name="year-experience">
                                </div>
                                <hr>
                                <div class="form-group">
                                  <textarea name="why-join" id="" cols="30" rows="4" placeholder="Why do you want to join the Mentorship Program ?" class="form-control"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <textarea name="share-experience" id="" cols="30" rows="4" placeholder="Briefly, share your experience in Web2 (Any demo link (Deployed Web/App/Project/UI/UX) to showcase) ?" class="form-control"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <textarea name="web3-experience" id="" cols="30" rows="4" placeholder="Do you have experience in Web3 (Any demo link (Deployed Web/App/Project/UI/UX) to showcase) ?*" class="form-control" required></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="" class="form-label">Have you worked on the Tezos Platform ?</label>
                                    <div class="form-check" >
                                    <input type="radio" class="form-check-input" name="worked-on-tezos" id="yes" value="yes"> Yes
                            
                                </div>
                                
                                <div class="form-check" >
                                    <input type="radio" class="form-check-input" name="worked-on-tezos" id="no" value="no"> No
                                </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <textarea name="briefly-explain" id="" cols="30" rows="4" placeholder="If Yes, briefly explain your work." class="form-control"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" name="linkedin" placeholder="LinkedIn Profile*" class="form-control form-control-user" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" name="github" placeholder="GitHub Profile*" class="form-control form-control-user" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" name="resume" placeholder="Resume Link" class="form-control form-control-user">
                                </div>
                                <hr>
                                <div class="form-group">
                                  <textarea name="expactation" id="" cols="30" rows="4" placeholder="What are your expectations from the Program ?" class="form-control"></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <textarea name="additional-comments" id="" cols="30" rows="4" placeholder="Any Additional Comments?" class="form-control"></textarea>
                                </div>
                                
                                
                                <input type="submit" name="submit" id="" value="Register" class="btn btn-primary btn-user btn-block">
                                <hr>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a> -->
                            </form>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>