<?php
include '../partials/dbconnect.php';
$mydata=file_get_contents("php://input");
$data=json_decode($mydata,true);
$name=$data['name'];
$mobile=$data['mobile'];
$email=$data['email'];
$age=$data['age'];
$gender=$data['gender'];
$blood=$data['blood'];
$address=$data['address'];
if(empty($name) && empty($mobile)){
    echo 'all fields are required';
}
else{
    $token=bin2hex(random_bytes(15));
    $insertSql="INSERT INTO `donorsdetails`(`donor_name`,`donor_mobile`,`donor_email`,`token`,`donor_age`,`donor_gender`,`donor_bgroup`,`donor_address`,`donor_status`)
    VALUES('$name','$mobile','$email','$token','$age','$gender','$blood','$address','inactive')";
    $result=mysqli_query($conn,$insertSql);
    if($result){
        echo 'Your data inserted successfull';
        $subject="Activation link to insert your data in bloodManagement";
        $body=" hi $name Click this link to active your insert data link are given below http://localhost/blood%20donation/xhrfiles/activate.php?token=$token";
        $header="from:rahulkulchandu2@gmail.com";
       if(mail($email,$subject,$body,$header)){
           echo "<p class='text-success'>Please Check your mail and click the shown link</p>";
       }
       else{
           echo "<p class='text-warning'>Please Try again</p>";
       }

    }
    else{
        echo 'try again some time later';
    }
}
?>