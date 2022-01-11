<?php
include '../partials/dbconnect.php';
$id=$_GET['id'];
$deletesql="delete from `contactus` where user_id='$id'";
$result=mysqli_query($conn,$deletesql);
if($result){
    header("location:contact.php");
}
else{
    echo 'try again there are some technical issues';
}
?>