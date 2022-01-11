<?php
echo '  <h1 class="text-primary my-4">Search Donor</h1>
<form class="row g-3 my-2" id="myform">
    <div class="col-6">
        <label for="blood" class="form-label">Blood Group :</label>
        <select class="form-control" name="blood" id="blood">
            <option>Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">B+</option>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
    </div>
    <div class="col-12">
        <p name="submit" id="sbmtbtn" onclick="searchResponseFun()" class="btn btn-primary mb-2">Search
        </p>
    </div>
</form>

<div class="row" id="searchdonor">

</div>
';
?>