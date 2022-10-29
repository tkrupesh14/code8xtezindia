<?php
include './header.inc.php';
include './sidebar.inc.php';
if(isset($_SESSION['TEAM_IS_LOGIN'])){
    redirect('speakers.php');
}
$id = "";
$msg = "";
$name = "";
$designation = "";
$image = "";
$linkedin = "";
$twitter = "";




if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
    $type = $_GET['type'];
  $id = $_GET['id'];
  $row = mysqli_fetch_assoc( mysqli_query($connection, "SELECT * FROM speakers WHERE id = $id "));
  $name = $row['name'];
  $designation = $row['designation'];

  $linkedin = $row['linkedin'];
  $twitter = $row['twitter'];
 
}

if(isset($_POST['submitBtn'])){
   
    if($id == ''){

    $sql = "SELECT * FROM speakers WHERE name = '$name' ";
  }else{
    $sql = "SELECT * FROM speakers WHERE name = '$name' AND id != $id";
    
  }
  if(mysqli_num_rows(mysqli_query($connection, $sql))>0){
    $msg = "Task Alredy Exists.";
  }else{
    if($id == ''){
      
      $sql =" INSERT INTO speakers (name,designation,image, linkedin, twitter) 
      values('$name', '$designation', '$image', '$linkedin', '$twitter' )"; 
    }else{
        $que = mysqli_query($connection, "UPDATE speakers
        set  name = '$name',
        designation = '$designation',
        linkedin = '$linkedin',
        twitter = '$twitter',
      
        where id=$id");
        redirect('speakers.php');
    
      }

      $run = mysqli_query($connection, $sql);
      redirect('speakers.php');
    }
}
?>

<head>
    <title>Manage Task - <?= $pageTitle?></title>
    <style>
      #container {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }
    </style>
</head>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php
        include './topbar.inc.php';
        ?>
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">
                <?php
                    if(isset($_GET['type']) == 'update'){
                        echo "Update";
                    }else{
                        echo "Add";
                    }
                ?>
                Speaker</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                           
                            <form class="user" method="POST">
                                <div class="row">
                                <div class="form-group col-4">
                                    <input type="text" class="form-control "
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Speaker Name" name="name" value="<?= $name?>">
                                </div>
                                <div class="form-group col-4">
                                   <input type="text" placeholder="Enter Designation" name="designation" class="form-control ">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="file" name="image" accept="image/*" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="linkedin" class="form-control" id="" placeholder="enter linkedin">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="twitter" class="form-control" id="" placeholder="enter twitter">
                                </div>
                               
                               
                                
                                
                                <input type="submit" name="submitBtn" id="" value="<?php
                    if(isset($_GET['type']) == 'update'){
                        echo "Update";
                    }else{
                        echo "Add";
                    }
                ?> Speaker" class="btn btn-primary btn-user btn-block">
                                <hr>
                                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a> -->
                                </div>
                            </form>
                            <div class="text-center font-weight-bold text-danger"><?= $msg?></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    <?php
    include './footer.inc.php';
    ?>