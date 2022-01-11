<?php
include '../partials/dbconnect.php';

echo ' <div class="row">';
$fetchSql="select *from `donorsdetails` where donor_status='active'";
$result=mysqli_query($conn,$fetchSql);
$existDonors=mysqli_num_rows($result);
if($existDonors>0){
    while($row=mysqli_fetch_assoc($result)){
       $donor_name=$row['donor_name'];
       $donor_mobile=$row['donor_mobile'];
       $donor_email=$row['donor_email'];
       $donor_age=$row['donor_age'];
       $donor_gender=$row['donor_gender'];
       $donor_bgroup=$row['donor_bgroup'];
       $donor_address=$row['donor_address'];
            echo '<div class="col-md-3 mt-3">
            <div class="card" style="height:456px">
                <a href=""><img style="height: 180px;" src="images/blood-1.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title">'.$donor_name.'</h5>
                    <p class="my-1"><strong>Mobile no :</strong>'.$donor_mobile.'</p>
                    <p class="my-1"><strong>Email :</strong>'.$donor_email.'</p>
                    <p class="my-1"><strong>Gender :</strong>'.$donor_gender.'</p>
                    <p class="my-1"><strong>Age :</strong>'.$donor_age.'</p>
                    <p ><strong>Blood Group :</strong>'.$donor_bgroup.'</p>
                    <p><strong>Address :</strong>'.$donor_address.'</p>
                </div>
            </div>
        </div>';
    }
}
else{
    echo '<div class="jumbotron">
    <h1 class="display-4">Sorry!</h1>
    <p class="lead">There are no data found please become a donor.</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="#" role="button" onclick="becomedonorfun()">Become Donor</a>
  </div>';
}


echo '</div>';

?>