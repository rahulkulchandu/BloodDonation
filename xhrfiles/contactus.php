<?php
echo '<div class="alert text-primary" id="showconfirm">
</div>
<h1 class="text-primary my-4">Send Us a Message</h1>
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
    <div class="col-12">
        <label for="msg" class="form-label">Message:</label>
        <textarea name="msg" class="form-control" id="msg" cols="30" rows="5"></textarea>
    </div>
    <div class="col-12">
        <p name="submit" id="sbmtbtn" onclick="sendContactResponse()" class="btn btn-primary mb-2">Send Message
        </p>
    </div>
</form>';
?>