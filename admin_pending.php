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
                            <input type="search" class="form-control" placeholder="Search" id="searchInput">
                            <div class="input-group-append">
                              <button class="btn" type="submit" id="searchButton">
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
                            <span class="material-icons">person_outline</span>Profile</a>
                          </li>
                          <li>
                              <a href="admin_dashboard.php?logout=true"><span class="material-icons">logout</span>Logout</a>
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
          <h2 class="ml-lg-2">Manage Enroll Student</h2>
        </div>
       
      </div>
    </div>
    <table class="table table-striped table-hover" id="pending_table">
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
          <td>1</td>
          <td>Thomas Sue</td>
          <td>12</td>
          <td>STEM</td>
          <td>128503070025</td>
          <td>
            <a href="admin_confirm.html" class="confirm" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Confirm">&#xE5CA;</i>
            </a>
            <a href="#decline" class="decline" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Decline">&#xE5CD;</i>
            </a>
            <a href="#decline" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">create</i>
            </a>
          </td>
        </tr>
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

			  </div>
			 
			 
			 <!---footer---->
			 
			 
		</div>
		

</div>
</div>


<!----------html code compleate----------->


<script>
// Get the input element, button, and table
var input = document.getElementById("searchInput");
var button = document.getElementById("searchButton");
var table = document.getElementById("pending_table");

// Add event listener for the button click
button.addEventListener("click", function(event) {
  event.preventDefault(); // Prevent form submission

  var filter = input.value.toLowerCase();
  var rows = table.getElementsByTagName("tr");

  // Loop through all table rows and hide those that don't match the search query
  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");
    var found = false;

    for (var j = 0; j < cells.length; j++) {
      var cellValue = cells[j].textContent || cells[j].innerText;

      if (cellValue.toLowerCase().indexOf(filter) > -1) {
        found = true;
        break;
      }
    }

    if (found) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }
});
</script>


  
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


