<?php
include '../partials/dbconnect.php';
$id=$_GET['id'];
$deletesql="delete from `donorsdetails` where donor_id='$id'";
$result=mysqli_query($conn,$deletesql);
if($result){
    header("location:index.php");
}
else{
    echo 'try again there are some technical issues';
}
?>