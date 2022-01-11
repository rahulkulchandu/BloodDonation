<?php
include '../partials/dbconnect.php';
$aboutSql="Select *from `xhrdata`";
$result=mysqli_query($conn,$aboutSql);
$row=mysqli_fetch_assoc($result);
$whybwcomwdonor=$row['why_become_donor'];
echo 
'<h1 class="text-primary my-4">Why Become Donor</h1>
<p class="text-wrap mb-5 fs-5">'.$whybwcomwdonor.'</p>';
?>