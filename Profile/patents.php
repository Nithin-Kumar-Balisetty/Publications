<?php  
    require "./testingpdf.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>IIITDM Dashboard</title>

        <!-- Styles -->                        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">         
        <link href="https://www.iiitdm.ac.in/Profile/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="https://www.iiitdm.ac.in/Profile/assets/css/lib/bootstrap.min.css" rel="stylesheet"> 
	<link href="https://www.iiitdm.ac.in/Profile/assets/css/site.css" rel="stylesheet" type="text/css" />		
        <link href="https://www.iiitdm.ac.in/Profile/assets/css/style.css" rel="stylesheet">
		

		<style type="text/css">
		
	.carousel{	
background: rgba(52,57,87,0.9);
//background: url(images/background.jpg) no-repeat 0 35%;
    /* will also set the opacity of the link text */  

	position: absolute;
  z-index: -1;   
 
	}
		
		
	.carousel-control.right, .carousel-control.left {
   background-image: none;
   color: #ffffff;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; // remove the gap so it doesn't close
 }

  </style>
		
		
		
		
    </head>

    <body oncontextmenu="return false" >

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="https://www.iiitdm.ac.in/Profile/dashboard.php"><img src="https://www.iiitdm.ac.in/Profile//assets/images/logo2.png" alt=""   width="230px" height="100px" /> </a></div>
                    <ul>
                        
                        
						<li><a class="sidebar-sub-toggle"><i class="fa fa-home"	 aria-hidden="true"></i>
  Dashboard  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/PayRoll/EmployeeDetails.php"  ><i class='fa fa-user'></i>Employee Profile</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/Student/StudentData.php"  ><i class='fa fa-info-circle'></i>Student Info</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
											
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-university"	 aria-hidden="true"></i>
  Academics  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/reg/reg_2101.php"  ><i class='fa fa-registered'></i>Registration</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/reg/elective_change_2101.php"  ><i class='fa fa-exchange'></i>Change of Elective</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/focus/StudAttendance.php"  ><i class='fa fa-clock-o'></i>Student Attendance</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/focus/StudLeave.php"  ><i class='fa fa-user'></i>Student Leave</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/TimeTable/Schedule.php"  ><i class='fa fa-pencil'></i>Examination</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/acad/feed/mid_sem_feedback_jan_2021.php"  ><i class='fa fa-comments'></i>Mid Sem FeedBack</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
			



							
                                <li><a href="http://www.iiitdm.ac.in/Profile/acad/result.php"  ><i class='fa fa-user-circle'></i>Results</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
											
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-user-circle"	 aria-hidden="true"></i>
  Admin  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   


								
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-briefcase"	 aria-hidden="true"></i>
  Finance & Accounts  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/Student/FeeReceipt.php"  ><i class='fa fa-address-card'></i>Fee Receipt</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
											
							</ul>
						</li> 
						 
						<li><a class="sidebar-sub-toggle"><i class="fa fa-briefcase"	 aria-hidden="true"></i>
  Computer Center  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
  
                            <ul>   






							
                                <li><a href="http://www.iiitdm.ac.in/Profile/automation/server/Complaints.php"  ><i class='fa fa-code-fork'></i>Service Request</a></li>							
								<!-- <li><a href="demography.php" >Edit Demography</a></li>
								<li><a href="funded.php" >Edit Funded Projects</a></li>
								<li><a href="publication.php" >Edit Publication</a></li>
								<li><a href="gallery.php" >Edit Past Events</a></li>
								<li><a href="tender.php" >Edit Tender Notice</a></li>
								<li><a href="alumni.php" >Edit Alumni List</a></li>
								
								<li><div>
								<form id="form" action="accountSearchEdit.php" method="post" enctype="multipart/form-data">
								<input type="text" style="float: left; height: 35px;" id="sea" name="sea" placeholder="Want to search someone you know?"  value="" /><button class="btn btn-warning" >Edit</button></form>
								</div> </li>
								-->
											
							</ul>
						</li> 
						 


						
						
						
    
                        <li><a href="logout.php?logout"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Logout</a></li>
					



                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
						
												
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <ul>

                                <li class="header-icon dib"><i class="ti-bell"></i>
                                    <div class="drop-down">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Recent Notifications</span>
                                        </div>
                                        <div class="dropdown-content-body">
                                            
                                        </div>
                                    </div>
                                </li>
                              
                                <li class="header-icon dib dropdown"><span class="user-avatar dropdown-toggle">Welcome BALISETTY NITHIN KUMAR                                        
                                        <span ><img src="https://lh3.googleusercontent.com/a/AATXAJwZjuToe6r0AWzGzCQaGHEZ9FMvA0_Z8O9mX57c=s96-c" alt="" style="width: 30px; height: 30px;object-fit: cover; border-radius: 50%;" /></span>                                        
                           <div class="dropdown-menu" style="z-index: 99999;">
    <a class="dropdown-item" href="https://www.iiitdm.ac.in/Profile/automation/PayRoll/EmployeeDetails.php"><i class="fa fa-user" aria-hidden="true"></i> <span style='font-size:14px; font-weight:bold'>Profile</span></a>
	<a href="http://www.iiitdm.ac.in/Profile/logout.php?logout" class="dropdown-item"><i class="fa fa-arrow-left" aria-hidden="true"></i><span  style='font-size:14px; font-weight:bold'>Logout</span></a>
	
    
  </div>              
                                        
                                        <i class="ti-angle-down f-s-10"></i></span>
                                    <div class="drop-down dropdown-profile">
                                        
                                        <div class="dropdown-content-body" >
                                            <ul style=" z-index:-1;">
                                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                                <li><a href="logout.php?logout"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
							
							
							
							
							
                        </div>
						
						
                    </div>
                </div>
				</div>
   
				
				
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
  
				
				 		
				
				
				
           
				<style type="text/css">
				
				.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; // remove the gap so it doesn't close 
 }
				</style> <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-dark sticky-top" style="margin-left: -15px; background-color:#343A40">

	  <ul class="navbar-nav" style="height:20px; background-color:#343A40" >
    
		<!-- <li>Employee Personal Details</li> -->
     
	

  </ul>
</nav>











<!-- code start -->


<style>
/* template start*/ 
#white-background{
    display: none;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0px;
    left: 0px;
    background-color: #fefefe;
    opacity: 0.7;
    z-index: 9999;
}
            
#dlgbox{
    /*initially dialog box is hidden*/
    display: none;
    position: fixed;
    width: 480px;
    z-index: 9999;
    border-radius: 10px;
    background-color: #7c7d7e;
}

#dlg-header{
    background-color: #214B8C;
    color: white;
    font-size: 20px;
    padding: 10px;
    margin: 10px 10px 0px 10px;
}

#dlg-body{
    background-color: white;
    color: black;
    font-size: 14px;
    padding: 10px;
    margin: 0px 10px 0px 10px;
}

#dlg-footer{
    background-color: #f2f2f2;
    text-align: right;
    padding: 10px;
    margin: 0px 10px 10px 10px;
}

#dlg-footer button{
    color: white;
}
/* template end*/
.para{
    background-color: #214B8C;
}
.row>div{
    border-left: 1px solid white;
    border-right: 0;
}
.row>div:first-child{
    border-right: 1px solid white;
    border-left: 0  ;
}
.after{
    background-color: #edeaea;
    border-bottom: 2px solid white;
}
#fullcontainer{
    
}
.excelform{
    display: inline-block;
}
</style>
 
  
<div class="container">
    <h2 class="" style="text-align:center; margin-top: 0">Patent Details</h2>
    <div class="container" id="fullcontainer" style="margin : 0;margin-top : 30px; font-size:18px;">
        <div class="row">
            <div class="para col-lg-1">
            </div>
            <div class="para col-lg-8">
            <p class="mb-2 mt-2 text-center text-white">Publication Title</p>
            </div>
            <div class="para col-lg-3">
            <p class="mb-2 mt-2 text-center text-white">Contributed with</p>
            </div>
        </div>
        <?php
            //userdetails already stored in a variables of php script
            $obj=new SQL();
            $conn=$obj->SQLi();
            if(!$conn) die("<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>");
            else{
                $mainarr=array();
                $quer = "SELECT Title,PID FROM publications WHERE PID in (SELECT PID from pubicationauthor where EID in (SELECT EID from users where EMAIL='sample1@gmail.com'))";
                $result = $obj->query($quer);
                if(!$result) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                else{
                    while($row = mysqli_fetch_assoc($result)) {
                        $subq = 'SELECT `ENAME` from `users` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].' and `EMAIL`!="sample1@gmail.com"';
                        $str="";
                        $result1 = mysqli_query($conn, $subq);
                        while($row1= mysqli_fetch_assoc($result1)){
                            $str=$str.$row1["ENAME"].",";
                        }
                        array_push($mainarr,($row["PID"]));
                        if($str=="") echo '<div class="row after"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this)" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["Title"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">Fully Contibuted by you</p></div></div>';  
                        else  echo '<div class="row after"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this)" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["Title"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                    }
                }
            }
        ?>
    </div>
    


</div>

<!-- code end -->
  
  
  

</div>
                        
<div class="content-wrap">
            <div class="main">
                <div class="container-fluid">

                </div>
            </div>
        </div>
		
               <style type="text/css">

.footer {
  position: absolute;
  left: 0;
  bottom: -20;
  width: 100%;
  height:30px;
  background-color: #343A40;  
  color: white;
  text-align: center;
}
td{
 color: black;
}
</style> 


        <!-- jquery vendor -->
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/jquery.min.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/menubar/sidebar.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/bootstrap.min.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="https://www.iiitdm.ac.in/Profile/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
        
        <!-- scripit init-->

    </body>

</html>


<style>
	@media print {
		
  .header,
  .sidebar,
  .chat-sidebar,
  .control,
  .control-bar {
    display: none !important;
  }
  [contenteditable]:hover,
  [contenteditable]:focus {
    outline: none;
  }
  body{
  margin-left:0px;
  }
}
	</style>



					





                                                    





































