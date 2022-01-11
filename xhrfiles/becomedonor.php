
<?php
echo '
<div class="alert text-primary" id="showconfirm">

</div>
<h1 class="text-primary my-4">Become a Donor</h1>
<form class="row g-3 my-2" id="myform">
    <div class="col-md-4">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
    </div>
    <div class="col-md-4">
        <label for="mobileNumber" class="form-label">Mobile Number</label>
        <input type="number" name="mobileNumber" class="form-control" id="mobileNumber">
    </div>
    <div class="col-4">
        <label for="email" class="form-label">Email Id</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="col-4">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age">
    </div>
    <div class="col-4">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-control" name="gender" id="gender">
            <option>Select Gender</option>
            <option selected value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="col-4">
        <label for="blood" class="form-label">Blood Group</label>
        <select class="form-control" name="blood" id="blood">
            <option>Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">B+</option>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option selected value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
    </div>
    <div class="col-12">
        <label for="address" class="form-label">Address</label>
        <textarea name="address" class="form-control" id="address" cols="30" rows="5"></textarea>
    </div>

    <div class="col-12">
        <p name="submit" id="sbmtbtn" onclick="insertdata()"
            class="btn btn-primary mb-2">Become Donor</p>
    </div>
</form>
';
?>