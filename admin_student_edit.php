<!-- Edit Modal HTML -->
<?php
include 'dbcon.php';

if (isset($_GET['user_id'])) {
  $user_id = $_GET['user_id'];

  $query = "SELECT * FROM tbl_userinfo WHERE user_id = '$user_id' LIMIT 1";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    echo "No records found in the tbl_userinfo table.";
    exit();
  }
} else {
  echo "No user ID provided.";
  exit();
}

if (isset($_POST['btnSave'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $grade = $_POST['grade'];
  $strand = $_POST['strand'];
  $lrn = $_POST['lrn'];

  // Check if user_id is provided
  if (!isset($_GET['user_id'])) {
    echo "No user ID provided.";
    exit();
  }

  $user_id = $_GET['user_id'];

  // Validation

  $query = "SELECT user_id FROM tbl_userinfo WHERE user_id = '$user_id' LIMIT 1";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $updateQuery = "UPDATE tbl_userinfo SET firstname = '$firstname', lastname = '$lastname', grade = '$grade', strand = '$strand', lrn = '$lrn' WHERE user_id = '$user_id'";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult && mysqli_affected_rows($conn) > 0) {
      header("Location: admin_student.php?msg=Record updated successfully");
      exit();
    } else {
      echo "Error updating record or no matching record found.";
    }
  } else {
    echo "No records found in the tbl_userinfo table.";
  }

  mysqli_close($conn);
}
?>

<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="#" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">Edit Student Info</h4>
          <a href="admin_student.php"><button type="button" class="close" data-dismiss="modal" 
          aria-hidden="true">&times;</button></a>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo isset($row['firstname']) ? $row['firstname'] : '' ?>">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo isset($row['lastname']) ? $row['lastname'] : '' ?>">
          </div>
          <div class="mb-3">
                <label class="form-label">Grade:</label>
                <select class="form-select" name="grade" >
                <option value="" disabled selected>Select Grade</option>
                <option value="grade11">Grade 11</option>
                <option value="grade12">Grade 12</option>
                <option value="transferee">Transferee</option>
                </select>
          </div>
          <div class="mb-3">
                  <label class="form-label">Strand/Program: </label>
                  <select class="form-select" name="strand">
                  <option value="" disabled selected>Select Strand</option>
                  <option value="abm">ABM</option>
                  <option value="stem">STEM</option>
                  <option value="humms">HUMMS</option>
                  <option value="eim">EIM</option>
                  <option value="fbs">FBS</option>
                  <option value="smaw">SMAW</option>
                  </select>
          </div>
          <div class="mb-3">
                    <label class="form-label">LRN</label>
                    <input type="text" class="form-control" name="lrn" id="lrn" value="<?php echo isset($row['lrn']) ? $row['lrn'] : '' ?>">
          </div>
        <div class="modal-footer">
          <a href="admin_student.php"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a> 
          <input type="submit" class="btn btn-info" value="Save" name="btnSave">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End edit -->