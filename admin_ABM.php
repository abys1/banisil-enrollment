<?php
include 'dbcon.php';

$sql = "SELECT tbl_userinfo.user_id, tbl_userinfo.firstname, tbl_userinfo.lastname, tbl_userinfo.grade, tbl_userinfo.strand, tbl_userinfo.lrn, tbl_user_level.level
FROM tbl_userinfo
JOIN tbl_user_level ON tbl_user_level.user_level_id = tbl_userinfo.user_id
WHERE tbl_user_level.level = 'STUDENT' AND tbl_userinfo.strand = 'ABM'";

$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/logo.jpg" class="img-fluid"/><br>Banisil National High School</br></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="admin_dashboard.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Dashboard</span></a>
                </li>
		
                <li class="">
                    <a href="admin_student.php"><i class="fas fa-user"></i><span>Student</span></a>
                </li>

                <li class="">
                    <a href="admin_teacher.php"><i class="fas fa-user"></i><span>Teachers</span></a>
                </li>
                
                <li class="">
                    <a href="admin_pending.php"><i class="fas fa-user"></i><span>Pending Enroll Student</span></a>
                </li>
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">school</i> Program/Strand
                    </a>
                    
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="admin_ABM.php">ABM</a>
                        </li>
                        <li>
                            <a href="admin_STEM.php">STEM</a>
                        </li>
                        <li>
                            <a href="admin_HUMMS.php">HUMMS</a>
                        </li>
                        <li>
                            <a href="admin_EIM.php">EIM</a>
                        </li>
                        <li>
                            <a href="admin_FBS.php">FBS</a>
                        </li>
                        <li>
                            <a href="admin_SMAW.php">SMAW</a>
                        </li>
                    </ul>
                </li>


                    </ul>
                </li>
               
            
               
               
            </ul>

           
        </nav>
		
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" 
								  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" id="button-addon2">
                                      <i class="fas fa-search"></i>
                                  </button>
                                  
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                           
                            </li>
                            <li class="nav-item">
                     
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
								<img src="img/admin.png" style="width:40px; border-radius:50%;"/>
								<span class="xp-user-live"></span>
								</a>
								<ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="#">
										  <span class="material-icons">
person_outline
</span>Profile

										</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
settings
</span>Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
logout</span>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
               
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		   
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   
		   <div class="main-content">
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Manage Student</h2>
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Grade</th>
          <th>Program/Strand</th>
          <th>LRN</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          $sql = "SELECT tbl_userinfo.user_id, tbl_userinfo.firstname, tbl_userinfo.lastname, tbl_userinfo.grade, tbl_userinfo.strand, tbl_userinfo.lrn, tbl_user_level.level
          FROM tbl_userinfo
          JOIN tbl_user_level ON tbl_user_level.user_level_id = tbl_userinfo.user_id
          WHERE tbl_user_level.level = 'STUDENT' AND tbl_userinfo.strand = 'ABM'";

          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_assoc($result))
          {
            ?>
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></td>
            <td><?php echo $row['grade']; ?></td>
            <td><?php echo $row['strand']; ?></td>
            <td><?php echo $row['lrn'] ?></td>
            <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal">
            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#viewEmployeeModal" class="view" data-toggle="modal">
            <i class="material-icons" data-toggle="tooltip" title="View">&#xE8F4;</i>
            </a>
          </td>
    </tr>
        <?php
            }
              ?>  
      </tbody>
    </table>
    <div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Edit Student Info</h4>
          <button type="button" class="close" data-dismiss="modal" 
		  aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname">
          </div>
          <!-- <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control">
          </div> -->
          <div class="mb-3">
                <label class="form-label">Grade:</label>
                <select class="form-select" name="grade">
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
                    <input type="text" class="form-control" name="lrn" id="lrn">
          </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Delete Employee</h4>
          <button type="button" class="close" data-dismiss="modal" 
		  aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
	</div>
  </div>
				
		   
			  </div>
			 
			 
			 <!---footer---->
			 
			 
		</div>
		

</div>
</div>


<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>


