<?php 
session_start();
if(isset($_SESSION['usermail'])){
   $username=$_SESSION['usermail'];
}
else{
   header("location:login.php");
}
include '../partials/dbconnect.php';
$selectbecome="select *from `xhrdata`";
$becomeResult=mysqli_query($conn,$selectbecome);
$becomerow=mysqli_fetch_assoc($becomeResult);
$becomedata=$becomerow['why_become_donor'];

// HERE THE UPDATE QUERY 
if(isset($_POST['becomesubmit'])){
    $newbecome=$_POST['newbecome'];
    $newbecome=str_replace("'","&lsquo;",$newbecome);
    $newbecome=str_replace("'","&rsquo;",$newbecome);
    // $newbecome=str_replace("<","&lt;",$newbecome);
    // $newbecome=str_replace(">","&gt;",$newbecome);
    $updatesql="UPDATE `xhrdata` SET `why_become_donor`='$newbecome'";
    $updateresult=mysqli_query($conn,$updatesql);
    if($updateresult){
        header("location:whybecomedonor.php");
    }
}
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Why Become Donor</title>
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
                <form action="whybecomedonor.php" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"><strong>Blood Management</strong><small> Why Become Donor Form</small>
                                </div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="about"
                                            class=" form-control-label">Why Become Donor--</label><textarea name="newbecome" id="about" rows="10"
                                             class="form-control"><?php echo $becomedata ?></textarea>
                                    </div>
                                    <button id="payment-button" type="submit" name="becomesubmit"
                                        class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Update</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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