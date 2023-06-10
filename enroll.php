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
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>First Name</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Middle Name</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Last Name</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Suffix Name</label>
            <input type="text" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Birthday</label>
            <input type="date" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Gender</label>
            <div class="d-flex align-items-center mt-2">
                <label class="option">
                    <input type="radio" name="radio">Male
                    <span class="checkmark"></span>
                </label>
                <label class="option ms-4">
                    <input type="radio" name="radio">Female
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
  
        <div class="h3">Current Address</div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Street</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Barangay</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
          <label>City</label>
          <input type="text" class="form-control" required>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>Province</label>
          <input type="text" class="form-control" required>
    </div>
    <div class=" col-md-6 mt-md-0 mt-3">
        <label>Admit Type</label>
        <select id="sub" required>
            <option value="" selected hidden>Choose Option</option>
            <option value="old">Old Student</option>
            <option value="new">New Student</option>
            <option value="transferee">Transferee</option>
        </select>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>Grade</label>
          <select id="sub"required>
            <option value="" selected hidden>Choose Option</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
            </select>
    </div>

     <div class="col-md-6 mt-md-0 mt-3">
          <label>Program</label>
          <select id="sub"required>
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
          <label>Term</label>
          <select id="sub"required>
            <option value="" selected hidden>Choose Option</option>
            <option value="1st">1st Term</option>
            <option value="2nd">2nd Term</option>
          </select>
    </div>
    <div class="h3">This is for Transferee</div>

    <div class="col-md-6 mt-md-0 mt-3">
          <label>Last school attended</label>
          <input type="text" class="form-control" required>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>Program</label>
          <select id="sub"required>
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
          <input type="tel" class="form-control" required>
    </div>
    <div class="h3">Create Account</div>

<div class="col-md-6 mt-md-0 mt-3">
      <label>User Name</label>
      <input type="text" class="form-control" required>
</div>
<div class="col-md-6 mt-md-0 mt-3">
      <label>Password</label>
      <input type="text" class="form-control" required>
</div>
<div class="col-md-6 mt-md-0 mt-3">
      <label>Confirm Password</label>
      <input type="text" class="form-control" required>
</div>

<div class="btn btn-primary mt-3" id="submit-btn">Submit</div>
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