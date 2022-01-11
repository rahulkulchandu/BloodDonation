<?php
include '../partials/dbconnect.php';
$token=$_GET['token'];
$activesql="select * from `donorsdetails` where token='$token'";
$activeresult=mysqli_query($conn,$activesql);
if($activeresult){
    $updatesql="update `donorsdetails` SET donor_status='active' where token='$token'";
    $updateresult=mysqli_query($conn,$updatesql);
    if($updateresult){
        header("location:../index.php");
    }
    else{
        echo 'Not Activated Try Again';
    }
}
?>