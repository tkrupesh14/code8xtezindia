<?php
include './header.inc.php';
include './sidebar.inc.php';
if(isset($_SESSION['TEAM_IS_LOGIN'])){
    redirect('team_task.php');
}
$sql = "SELECT * from speakers";
$run = mysqli_query($connection, $sql);


if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
    $type = $_GET['type'];
    $id = $_GET['id'];
    if ($type == 'delete') {
        $que = mysqli_query($connection, "DELETE FROM speakers WHERE id = $id");
        redirect('speakers.php');
    }
    if ($type == 'active' || $type == 'deactive') {
        $status = 1;
        if ($type == 'deactive') {
            $status = 0;
        }
        $que = mysqli_query($connection, "UPDATE speakers SET status = '$status' WHERE id = $id");
        redirect('speakers.php');
    }
}
?>
<head>
    <title>Tasks - <?= $pageTitle?></title>
        
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                <h1 class="h3 mb-0 text-gray-800">Speakers</h1>
                <a href="#"id = "button" onclick="printData();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- DataTales Example -->
            <a href="./manage-speaker.php" class="d-none d-sm-inline-block btn btn-primary shadow-sm m-2"><i class="fas fa-plus-circle fa-sm text-white-50"></i> Add New Speaker</a>
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Speakers</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID #</th>
                                            <th>Name</th>
                                            <th>Designation </th>
                                            <th>Image </th>
                                            <th>Socials</th>
                                            <th>Added On</th>
                                            <th colspan="2">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID #</th>
                                            <th>Name</th>
                                            <th>Designation </th>
                                            <th>Image </th>
                                            <th>Socials</th>
                                            <th>Added On</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            if(mysqli_num_rows($run)>0){
                                                $no = 0;
                                                while ($row = mysqli_fetch_assoc($run)){

                                                    ?>
                                                        <tr>
                                                            <td ><?= $no+=1?></td>
                                                        <td><a href="./task-details.php?id=<?= $row['id']?>" > <?= $row['name'] ?> </a></td>
                                                            <td><?= $row['designation'] ?></td>
                                                            <td><?= $row['image'] ?></td>
                                                            <td> <a href="<?= $row['linkedin'] ?>" >Linkedin</a> <br> <a href="<?= $row['twitter'] ?>" >Twitter</a> </td>
                                                            <td><?=    date('d-M-Y', strtotime($row['added_on'])); ?></td>
                                                            
                                                           
                                                            <td><a href="./manage-speaker.php?id=<?= $row['id'] ?>&type=update" class="d-none d-sm-inline-block btn btn-primary shadow-sm m-2"> Edit</a></td>
                                                            <td><a href="?id=<?= $row['id'] ?>&type=delete" class="d-none d-sm-inline-block btn btn-danger shadow-sm m-2">   Delete</a></td>
                                                        </tr>

                                                    <?php
                                                }
                                            }else{

                                                ?>

                                                    <tr>
                                                    <td colspan="10" class="text-center">No Data Found</td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>


    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
        function printData()
{
let dataTable = document.getElementById('dataTable');
window.print(dataTable);
}
// $('#button').on('click',function(){
// printData();
// })

        
    </script>
    <?php
    include './footer.inc.php';
    ?>