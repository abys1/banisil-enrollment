<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll</title>
    <link rel="stylesheet" href="css/enroll.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body>
<div class="wrapper rounded bg-white">

<div class="h3">Registration Form</div>
<p> We warmly welcome junior high school completes, and foreign applicants to our campuses.
Kindly fill-out the online application form for a fast and efficient admissions procedure.</p>

<div class="form">
    <form action="student_enrollment_add.php" method="POST"></form>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>First Name <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Middle Name</span></label>
            <input type="text" class="form-control" name="middlename">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Last Name <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Suffix Name</label>
            <input type="text" class="form-control" name="suffixname">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Email <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Contact Number <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="contact_number">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Birthday <span style="color: red;">*</span></label>
            <input type="date" class="form-control" name="birthday">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Gender<span style="color: red;">*</span></label>
            <div class="d-flex align-items-center mt-2">
                <label class="option">
                    <input type="radio" name="gender">Male
                    <span class="checkmark"></span>
                </label>
                <label class="option ms-4">
                    <input type="radio" name="gender">Female
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
  
        <div class="h3">Current Address</div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Street<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="street">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Barangay<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="barangay">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
          <label>City<span style="color: red;">*</span></label>
          <input type="text" class="form-control" name="city">
    </div>
    <div class="h3">Enrollment</div>
    <div class=" col-md-6 mt-md-0 mt-3">
        <label>Admit Type<span style="color: red;">*</span></label>
        <select id="sub" name="admit">
            <option value="" selected hidden>Choose Option</option>
            <option value="old">Old Student</option>
            <option value="new">New Student</option>
            <option value="transferee">Transferee</option>
        </select>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>Grade<span style="color: red;">*</span></label>
          <select id="sub" name="grade">
            <option value="" selected hidden>Choose Option</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
            </select>
    </div>

     <div class="col-md-6 mt-md-0 mt-3">
          <label>Program<span style="color: red;">*</span></label>
          <select id="sub" name="strand">
            <option value="" selected hidden>Choose Option</option>
            <option value="abm">ABM</option>
            <option value="humss">Humss</option>
            <option value="stem">Stem</option>
            <option value="eim">EIM</option>
            <option value="fbs">FBS</option>
            <option value="smaw">Smaw</option>
          </select>
    </div>

    <div class="col-md-6 mt-md-0 mt-3">
          <label>Term<span style="color: red;">*</span></label>
          <select id="sub" name="term">
            <option value="" selected hidden>Choose Option</option>
            <option value="1st">1st Term</option>
            <option value="2nd">2nd Term</option>
          </select>
    </div>
    <div class="h3">This is for Transferee</div>

    <div class="col-md-6 mt-md-0 mt-3">
          <label>Last school attended</label>
          <input type="text" class="form-control" name="last">
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>Program</label>
          <select id="sub" name="program">
            <option value="" selected hidden>Choose Option</option>
            <option value="abm">ABM</option>
            <option value="humss">Humss</option>
            <option value="stem">Stem</option>
            <option value="eim">EIM</option>
            <option value="fbs">FBS</option>
            <option value="smaw">Smaw</option>
            <option value="ict">ICT</option>
          </select>
    </div>

    <div class="col-md-6 mt-md-0 mt-3">
          <label>LRN</label>
          <input type="tel" class="form-control" name="lrn">
    </div>
    <div class="h3">Create Account</div>

<div class="col-md-6 mt-md-0 mt-3">
      <label>User Name<span style="color: red;">*</span></label>
      <input type="text" class="form-control" name="username">
</div>
<div class="col-md-6 mt-md-0 mt-3">
      <label>Password<span style="color: red;">*</span></label>
      <input type="text" class="form-control" name="password">
</div>
<div class="col-md-6 mt-md-0 mt-3">
      <label>Confirm Password<span style="color: red;">*</span></label>
      <input type="text" class="form-control" name="cfpassword">
</div>

<div class="btn btn-primary mt-3" id="submit-btn" name="btnSubmit" type="submit">Submit</div>
</div>

</div>
<script>
  $(document).ready(function() {
  $("#submit-btn").click(function() {
    // Show a popup message
    alert("Thank you for submitting the form!");

    // Reset the form
    $("form")[0].reset();
  });
});

</script>
</body>
</html>