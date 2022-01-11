<?php
include '../partials/dbconnect.php';
session_start();
if(isset($_SESSION['usermail'])){
   $username=$_SESSION['usermail'];
}
else{
   header("location:login.php");
}

?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">Menu</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="about.php"> About</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="whybecomedonor.php">Why Become Donor</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="contact.php">Contact Us Queries</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logor.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="index.php"><img src="images/logo.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Welcome <?php echo $username?></a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="content pb-0">
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Donors </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th class="avatar">Donor Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>B-Group</th>
                                                <th>Address</th>
                                                <!-- <th>Status</th> -->
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                               // THIS  IS FETCHING DONOR DETAILS FROM DATA BASE 
                                                   $donorselects="select * from `donorsdetails`";
                                                   $donorresult=mysqli_query($conn,$donorselects);
                                                   $sno=1;
                                                   while($row=mysqli_fetch_assoc($donorresult)){
                                                       $id=$row['donor_id'];
                                                       $dname=$row['donor_name'];
                                                       $dmble=$row['donor_mobile'];
                                                       $demail=$row['donor_email'];
                                                       $dage=$row['donor_age'];
                                                       $dgen=$row['donor_gender'];
                                                       $dgrp=$row['donor_bgroup'];
                                                       $daddrs=$row['donor_address'];
                                                       $dstatus=$row['donor_status'];
                                                       echo ' <tr>
                                                       <td class="serial">'.$sno.'</td>
                                                       <td class="avatar">'.$dname.'</td>
                                                       <td>'.$dmble.'</td>
                                                       <td>'.$demail.'</td>
                                                       <td>'.$dage.'</td>
                                                       <td>'.$dgen.'</td>
                                                       <td>'.$dgrp.'<sub class="text-success">'.$dstatus.'</sub></td>
                                                       <td>'.$daddrs.'</td>
                                                       
                                                       <td>
                                                           <a class="btn-sm btn-primary" href="edit.php?id='.$id.'">Edit</a>
                                                       </td>
                                                       <td><a class="btn-sm btn-warning" href="delete.php?id='.$id.'">Del</a></td>
                                                   </tr>';
                                                   $sno++;
                                                   }
                                           ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2021 bloodManagement
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="#">rahul</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="assets/js/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>