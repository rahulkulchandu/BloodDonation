<?php  include 'partials/dbconnect.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Blood donation</title>

</head>

<body>
    <!-- this is spinner  -->
<!-- <div class="text-center" id="spinr">

</div> -->
    <!-- THIS IS THE SOCIAL NAVBAR AND CROUSEL -->
    <?php
     include 'partials/social.php';
     include 'partials/navbar.php';
     include 'partials/crosel.php';
   ?>

    <!-- THIS IS THE MAIN CONTAINER IN WHICH CHANGE ALL THE DATA  -->
    <div class="container py-3" id="mainContainer">

        <!-- THIS IS THE FIRST INTRO OF BLOOD DONATION  -->
        <h1 class="text-center">Welcome to BloodBank & Donar Management System</h1>
        <div class="row d-flex mt-3">
            <div class="col">
                <h2>BLOOD GROUPS</h2>
                <p class="text-wrap fs-5">Blood group of any human being will mainly fall in any one of the following
                    groups.</p>
                <ul class="fs-5">
                    <li>A positive or A negative</li>
                    <li>B positive or B negative</li>
                    <li>O positive or O negative</li>
                    <li>AB positive or AB negative</li>
                </ul>
                <p class="text-wrap fs-6">
                    A healthy diet helps ensure a successful blood donation and also makes you feel better!
                    Check out the following recommended foods to eat prior to your donation.
                </p>
            </div>
            <div class="col-5">
                <img src="images/give blood be a hero.jpg" class="img-fluid" alt="give blood be a hero">
            </div>
        </div>
        <hr>


        <!-- THIS IS THE SOME OF BLOOD DONARS LIST -->
        <h1>Some of Latest Donors</h1>
        <div class="row">
            <?php
              $latestSql="select * from `donorsdetails` where donor_status='active' ORDER by donor_id DESC LIMIT 4";
              $result=mysqli_query($conn,$latestSql);
              $exist=mysqli_num_rows($result);
              if($exist>0){
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
                  echo 'No record found';
              }
            ?>

        </div>
        <hr>



        <!-- THIS IS THE UNIVERSAL DONARS AND RECIPIENTS -->
        <div class="row d-flex mt-3">
            <div class="col">
                <h2>UNIVERSAL DONARS AND RECIPIENTS</h2>
                <p class="text-wrap fs-5">The mos common blood type is O individuals are often called 'Universal donar
                    Since
                    their blood can be transfused into persons with any blood type.those with type AB blood are called
                    'Universal recipients'
                    because they can receive blood of any type.
                </p>
            </div>
            <div class="col-3">
                <a class="btn btn-outline-primary" href="#" onclick="becomedonorfun()">Become a Donor</a>
            </div>
        </div>




    </div>


    <!-- THIS IS THE FOOTER  -->
    <?php
     include 'partials/footer.php';
   ?>


    <!-- HERE THE START JAVASCRIPT AJAX  -->
    <script>
    // this is the about us page function 
    function aboutfun() {
        document.getElementById('carouselExampleControls').style.display = "none";
        // document.getElementById('mainContainer');
        const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/about.php", true);
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                //    console.log(req.response);
                document.getElementById('mainContainer').innerHTML = req.response;
            }
        }
        req.send();
    }

    // THIS IS THE WHY BECOME DONOR PAGE
    function whybecomefun() {
        document.getElementById('carouselExampleControls').style.display = "none";
        // document.getElementById('mainContainer');
        const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/whybecomedonor.php", true);
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                //    console.log(req.response);
                document.getElementById('mainContainer').innerHTML = req.response;
            }
        }
        req.send();
    }

    // THIS IS THE BECOME DONOR FROM FUNCTION 
    function becomedonorfun() {
        document.getElementById('carouselExampleControls').style.display = "none";
        // document.getElementById('mainContainer');
        var req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/becomedonor.php", true);
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                //    console.log(req.response);
                document.getElementById('mainContainer').innerHTML = req.response;
            }
        }
        req.send();
    }

    // THIS IS FOR INSERT THE BLOOD DONOR DETAILS 
    function insertdata() {
        console.log("click submit");
        let name = document.getElementById('name').value;
        let mobile = document.getElementById('mobileNumber').value;
        let email = document.getElementById('email').value;
        let age = document.getElementById('age').value;
        let gender = document.getElementById('gender').value;
        let blood = document.getElementById('blood').value;
        let address = document.getElementById('address').value;
        console.log(address);

        const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/insertdonor.php", true);
        req.setRequestHeader("content-Type", "application/json");
        req.onprogress = function() {
            console.log("Processing");
            // document.getElementById('spinr').innerHTML="<strong>Loading...</strong>
            //      <div class="spinner-border" role="status" aria-hidden="true"></div>";
        }
        req.onload = function() {
            if (req.status === 200) {
                console.log(req.response);
                  document.getElementById('showconfirm').innerHTML=req.response;
                document.getElementById("myform").reset();
            }
        }
        // CREATE JAVASCRIPT OBJECT
        const mydata = {
                name: name,
                mobile: mobile,
                email: email,
                age: age,
                gender: gender,
                blood: blood,
                address: address
            };
        // CONVERT INTO JSON FORMAT
        const data=JSON.stringify(mydata);
            // console.log(data);
            req.send(data);
    }
    
// THIS IS THE CONTACT US FORM
    function contactusfun(){
        document.getElementById('carouselExampleControls').style.display = "none";
        const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/contactus.php", true);
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                console.log(req.response);
                  document.getElementById('mainContainer').innerHTML=req.response;
               
            }
        }
      req.send();
    }

// THIS IS THE CONTACT US FORM SUBMITTED
     function sendContactResponse(){
        console.log("click submit");
        let name = document.getElementById('name').value;
        let mobile = document.getElementById('mobileNumber').value;
        let email = document.getElementById('email').value;
        let msg = document.getElementById('msg').value;
        console.log(msg);

        const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/contactResponse.php", true);
        req.setRequestHeader("content-Type", "application/json");
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                console.log(req.response);
                  document.getElementById('showconfirm').innerHTML=req.response;
                document.getElementById("myform").reset();
            }
        }
        // CREATE JAVASCRIPT OBJECT
        const mydata = {
                name: name,
                mobile: mobile,
                email: email,
                msg: msg
            };
        // CONVERT INTO JSON FORMAT
        const data=JSON.stringify(mydata);
            console.log(data);
            req.send(data);
     }


    // THIS IS THE ALL DONORS LIST
 function fetchalldonorsfun(){
    document.getElementById('carouselExampleControls').style.display = "none";
        // document.getElementById('mainContainer');
        const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/alldonors.php", true);
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                //    console.log(req.response);
                document.getElementById('mainContainer').innerHTML = req.response;
            }
        }
        req.send();
}

// THIS IS THE SEARCH FUNCTION 
    function searchfun(){
        document.getElementById('carouselExampleControls').style.display = "none";
        const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/search.php", true);
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                console.log(req.response);
                  document.getElementById('mainContainer').innerHTML=req.response;
               
            }
        }
      req.send();
    }


   // THIS IS THE SEARCH RESPONSE FUNCTION 
  function searchResponseFun(){
    let bgroup=document.getElementById('blood').value;
    // console.log(bgroup);
    const req = new XMLHttpRequest();
        req.open("POST", "xhrfiles/searchresponse.php", true);
        req.setRequestHeader("content-Type","application/json");
        req.onprogress = function() {
            console.log("Processing");
        }
        req.onload = function() {
            if (req.status === 200) {
                console.log(req.response);
                  document.getElementById('searchdonor').innerHTML=req.response;
               
            }
        }
            // CREATE JAVASCRIPT OBJECT
        const mydata={
            bgroup:bgroup
        }
        // CONVERT JAVASCRIPT INTO JSON OBJECT 
        const data=JSON.stringify(mydata);
        console.log(data);
      req.send(data);
  }


    </script>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>