<?php
include '../partials/dbconnect.php';
$mydata=file_get_contents("php://input");
$data=json_decode($mydata,true);

$name=$data['name'];
$mobile=$data['mobile'];
$email=$data['email'];
$msg=$data['msg'];
if(empty($name) && empty($mobile)){
    echo 'all fields are required';
}
else{
    $insertSql="INSERT INTO `contactus`(`username`,`mobile_number`,`user_email`,`user_message`)
    VALUES('$name','$mobile','$email','$msg')";
    $result=mysqli_query($conn,$insertSql);
    if($result){
        echo 'We Receive your query ,We will soon reply you';
    }
    else{
        echo 'try again some time later';
    }
}
?>