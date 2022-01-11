<?php
include '../partials/dbconnect.php';
session_start();
if(isset($_SESSION['usermail'])){
   $username=$_SESSION['usermail'];
}
else{
   header("location:login.php");
}

// THIS IS FOR FETCH DATA FROM THE SEND ID AND PRINT PREVIOUS DATA INTO VALUES
$id=$_GET['id'];
$donorselects="select * from `donorsdetails` where donor_id='$id'";
$donorresult=mysqli_query($conn,$donorselects);
$row=mysqli_fetch_assoc($donorresult);
    $dname=$row['donor_name'];
    $dmble=$row['donor_mobile'];
    $demail=$row['donor_email'];
    $dage=$row['donor_age'];
    $daddrs=$row['donor_address'];
    $dgen=$row['donor_gender'];
    $dgrp=$row['donor_bgroup'];
    $dsts=$row['donor_status'];

?>

<?php
// THIS IS FOR INSERT UPDATED DATA INTO DATABASE
if(isset($_POST['newsubmit'])){
    $id=$_GET['id'];
    $newname=$_POST['newname'];
    $newmbl=$_POST['newmbl'];
    $newemail=$_POST['newemail'];
    $newage=$_POST['newage'];
    $newgender=$_POST['newgender'];
    $newblood=$_POST['newblood'];
    $newaddress=$_POST['newaddress'];
    $newstatus=$_POST['newstatus'];
   
    //  `donor_mobile` = '$newmobile', `donor_email` = '$newemail', `donor_gender` = '$newgender', `donor_bgroup` = '$newblood', `donor_address` = '$newaddress', 

    $newupdatesql="UPDATE `donorsdetails` SET donor_name='$newname' , donor_mobile='$newmbl' , donor_email='$newemail' , donor_age='$newage' , donor_gender='$newgender' , donor_bgroup='$newblood' , donor_address='$newaddress' , donor_status='$newstatus' WHERE donor_id = $id";
    $newresult=mysqli_query($conn,$newupdatesql);
    if($newresult){
        // echo 'error';
        header("location:index.php");
    }
    else{
        echo 'Try again after some time';
    }
}
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Donor Details Page</title>
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
                        <a href="about.php">About</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="whybecomedonor.php">Why Become Donor</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="contact.php"> Contact Us Queries</a>
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
                    <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
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
            <div class="animated fadeIn">
                <form method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"><strong>Donors Details</strong><small> Edit</small></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="name"
                                            class=" form-control-label">Name</label><input type="text" id="name"
                                            name="newname" value="<?php echo $dname?>" class="form-control"></div>

                                    <div class="form-group"><label for="mobile"
                                            class=" form-control-label">Mobile</label><input type="text"
                                            value="<?php echo $dmble?>" id="mobile" name="newmbl"
                                            class="form-control">
                                    </div>

                                    <div class="form-group"><label for="email"
                                            class=" form-control-label">Email</label><input type="email"
                                            value="<?php echo $demail?>" name="newemail" id="email"
                                            class="form-control">
                                    </div>

                                    <div class="form-group"><label for="age"
                                            class=" form-control-label">Age</label><input type="number"
                                            value="<?php echo $dage?>" name="newage" id="age" class="form-control">
                                    </div>

                                    <div class="form-group"><label for="gender" class="form-label">Gender</label>
                                        <select class="form-control" name="newgender" id="gender">
                                            <option selected><?php echo $dgen?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div class="form-group"> <label for="blood" class="form-label">Blood Group</label>
                                        <select class="form-control" name="newblood" id="blood">
                                            <option selected><?php echo $dgrp?></option>
                                            <option value="A+">A+</option>
                                            <option value="A-">B+</option>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>

                                    <div class="form-group"><label for="address" class="form-label">Address</label>
                                        <textarea name="newaddress" class="form-control" id="address" cols="30"
                                            rows="5"><?php echo $daddrs?></textarea>
                                    </div>
                                    <div class="form-group"> <label for="status" class="form-label">Status</label>
                                        <select class="form-control" name="newstatus" id="status">
                                            <option selected><?php echo $dsts?></option>
                                            <option value="inactive">inactive</option>
                                            <option value="active">active</option>
                                        </select>
                                    </div>

                                    <button id="payment-button" type="submit" name="newsubmit"
                                        class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <form>
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
                        Designed by <a href="#">Rahul</a>
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