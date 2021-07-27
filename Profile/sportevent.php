<?php include "./SQLclass.php"; ?>
<!DOCTYPE html>
<html lang="en">

    <head>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Sport Event Info</title>

        <!-- Styles -->                        
	<!-- <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=mKXItK4TeJroSASXXe_5KSWnfxDJdrQzPpX53g5BOdG1FuAUtXL9FBLSZjMB8XD4GI9DGT2jmDoirP5meJ8OOFO2OH5mrDmgidYQXZKqPcK-yA7oYD67iPGaKMsiCgkW" charset="UTF-8"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                                <li><a href="./publications.php"> <i class="fa fa-user"></i>Publications </a></li>
                                <li><a href="./patents.php"><i class="fa fa-user"></i>Patents</a></li>			
								<li><a href="./searchpublications.php"><i class="fa fa-user"></i>Search Publications and Patents</a></li>	
                                <li><a href="./sportevent.php"><i class='fa fa-user'></i>Sport Events Info</a></li>		
											
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
     
        <li>Sport Events Info</li>

  </ul>
</nav>



<!-- code start -->

<script>
    function popupform(strheader,strbody){
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "block";
        dlg.style.display = "block";

        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        
        dlg.style.left = (winWidth/2) - 480/2 + "px";
        dlg.style.top = "150px";
        $("#hidebox").hide();
        $("#dlg-header-text").text(strheader);
        $("#dlg-body").html(strbody);
        $("#dlgLogin").hide();
        $("#dlgLogout").text("Go Back");
        $("#dlgLogout").click(function (){
            window.location.href="./sportevent.php";
        });
    }
    function deletetem(element){
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "block";
        dlg.style.display = "block";

        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        
        dlg.style.left = (winWidth/2) - 480/2 + "px";
        dlg.style.top = "150px";
        $("#hidebox").hide();
        $("#dlg-header-text").text("Deleting an Event");
        $("#dlg-body").html("Are you sure?<br>Press No to cancel the operation !!");
        $("#dlgLogin").text("Yes");
        $("#dlgLogout").text("No");
        $("#dlgLogin").click(function (){
            //console.log($(element.parentElement.parentElement.parentElement.parentElement).html())
           // console.log($(".articlecontent").index($(element.parentElement.parentElement.parentElement.parentElement)));
            var id=$(".articlecontent").index($(element.parentElement.parentElement.parentElement.parentElement));
            window.location.href=window.location.href+"?deleteevent="+id+"&type=Sports";
        });
        $("#dlgLogout").click(function (){
            window.location.href="./sportevent.php";
        });
    }
    function deleteevent(ele){
        deletetem(ele);
    }
    function editevent(element){
        var id=$(".articlecontent").index($(element.parentElement.parentElement.parentElement.parentElement));
        window.location.href=window.location.href+"?editingevent="+id+"&type=Sports";
    }
</script>

<style>
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
</style>

<!-- dialog box --> 
<div id="white-background"></div>
<div id="dlgbox">
    <div id="dlg-header">
        <div id='dlg-header-text' style="display: inline-block;">You are deleting an entry.</div>
        <div id='hidebox' style='float:right;'><i class="fa fa-times" aria-hidden="true"></i>
</div>
    </div>
    <div id="dlg-body">Are you sure?</div>
    <div id="dlg-footer">
        <button class="btn btn-danger" id="dlgLogin">Yes</button>
        <button class="btn btn-primary" id="dlgLogout" onclick="dlgout()">No</button>
    </div>
</div>
<!-- dialog box -->

<style>
            .article{
                position: relative;
                padding: 5px;
            }
            .article>div{
                color:black;
            }
            .articleimg{
                margin:0px auto;  
                max-width: 100%;  
                width: 250px;
                height : 250px;
                display: block; /* remove extra space below image */
            }
            .articleimg1{
                display: block;
                margin: 0px auto;
                max-width: 100%;
                width: 125px;
                height: 200px;
            }
            .articlecontent{
                padding: 10px;
                background-color: whitesmoke;
                border: 1px solid black;
                border-radius: 5%;  
            }
            .downdrop{
                display: none;
            }
            .flexclass{
                position: relative;
                display: flex;
                justify-content: flex-end;
                z-index: 0;
                margin: 5px 10px 0 0;
            }
            a {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            }
</style>

<div class='container'>
    <div id='fullcontainer'>
        <h3>Add Sport Event information</h3>
        <hr>
        <?php 
            if(isset($_POST["submitdetails"])){
                if(isset($_POST['eventdes'],$_POST['eventdate'],$_POST['eventname'])){
                    $obj=new SQL();
                    $conn=$obj->SQLi();
                    if(!$conn){?>
                        <script>popupform('Info not posted','Server Error.Sorry for the inconvenience');</script>
                    <?php }
                    else{
                        $strfilename='';
                        $i=1;
                        $desname='';
                        while(isset($_FILES['upload'.$i])){
                            $tempname=$_FILES['upload'.$i]['name'];
                            str_replace(' ','',$tempname);
                            $imageFileType = pathinfo(basename($tempname),PATHINFO_EXTENSION);
                            $targetdir="eventpics/";
                            $target_file = $targetdir.str_replace(' ','',str_replace(".".$imageFileType,'',$tempname)).'--'.date('Y-m-d').".".$imageFileType;
                            $arr=array('jpg', 'png', 'jpeg');
                                if(!in_array($imageFileType,$arr)){?>
                                    <script>
                                        popupform('Image not acceptable','Image file extension should be of jpg,png and jpeg');
                                    </script>
                            <?php }
                            else{
                                    move_uploaded_file($_FILES["upload".$i]["tmp_name"], $target_file);
                                    $strfilename=$strfilename.$target_file." , ";
                                    $desname=$desname.$_POST['upload'.$i.'des']." *#,#* ";
                            }
                            $i++;
                        }
                        $query='INSERT into `events`(Ename,Description,imagesrc,date,type,imagedes) values("'.$_POST['eventname'].'","'.$_POST['eventdes'].'","'.substr($strfilename,0,strlen($strfilename)-3).'","'.$_POST["eventdate"].'","Sports","'.substr($desname,0,strlen($desname)-7).'");';
                        if(mysqli_query($conn,$query)){ ?>
                            <script>
                                popupform('Event Info posted','Successful');
                            </script>
                        <?php }
                        else{ ?>
                            <script>
                                popupform('Event Info not posted','Not Successful.Sorry for the inconvenience');
                            </script>                       
                        <?php }
                    } 
                }
                else{   ?>
                    <script>
                        popupform('Cannot be Inserted','Server Error');
                    </script>
                   <?php 
                }
            }
            
        ?>
        <form action="./sportevent.php" method="POST" enctype="multipart/form-data">
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="eventname">Event Name : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>
                <div class='col-lg-8'>
                    <input type="text" name='eventname' size="50" required>
                </div>   
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="eventdata">Event Date : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>
                <div class='col-lg-8'>
                    <input type="date" name='eventdate' required>
                </div>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="eventdes">Event Description : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>
                <div class='col-lg-8'>
                    <textarea class='form-control' name="eventdes" id='eventdes' cols='30' rows="10" required></textarea>
                </div>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="file" name='upload1' required />
                </div>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 Description : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="text" name='upload1des' required />
                </div>
            </div>
            <div class='text-center mt-5'>
                <button class='btn btn-primary' onclick='addpic(this)'>Add another pic</button>
                <button class='btn btn-primary' onclick='removepic(this)'>Remove one photo field</button>
            </div>
            <div class='text-center mt-5'>
                <button class='btn btn-success' name='submitdetails' type="submit">POST EVENT INFO</button>
            </div>
        </form>
        <style>
            .photo{
                display: none;
            }
            .desphoto{
                display: none;
            }
        </style>
        <div class='row mt-4 photo'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="file" name='upload1' required />
                </div>
            </div>
            <div class='row mt-4 desphoto'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 Description : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="text" name='upload1des' required />
                </div>
            </div>
        <script>
            function addpic(ele){
                var numele=ele.parentElement.previousElementSibling.previousElementSibling.children[1].children[0];
                var num=$(numele).attr('name');
                var clone1=document.getElementsByClassName('photo')[0].cloneNode(true);
                $(clone1).removeClass('photo');
                $(clone1.children[0].children[0]).text('Photo '+(parseInt(num.slice(6))+1));
                $(clone1.children[1].children[0]).attr('name','upload'+(parseInt(num.slice(6))+1));
                var clone2=document.getElementsByClassName('desphoto')[0].cloneNode(true);
                $(clone2).removeClass('desphoto');
                $(clone2.children[0].children[0]).text('Photo '+(parseInt(num.slice(6))+1)+" Description");
                $(clone2.children[1].children[0]).attr('name','upload'+(parseInt(num.slice(6))+1)+'des');
                $(clone1).insertBefore($(ele.parentElement));
                $(clone2).insertBefore($(ele.parentElement));

            }
            function removepic(ele){
                var numele=ele.parentElement.previousElementSibling.previousElementSibling.children[1].children[0];
                var num=$(numele).attr('name');
                if(num!='upload1'){
                    $(ele.parentElement.previousElementSibling.previousElementSibling).remove();
                    $(ele.parentElement.previousElementSibling).remove();
                }   
            }
        </script>
        <h3 class='mt-4'>Sport Articles</h3>
        <hr>
        <div class='articlecontainer'>
            <?php 
                $obj=new SQL();
                $conn=$obj->SQLi();
                if($conn){
                    $query='SELECT * from events where type="Sports" ORDER BY date desc';
                    $res=mysqli_query($conn,$query);
                    $i=0;
                    $eventid=array();
                    while($row=mysqli_fetch_assoc($res)){
                        array_push($eventid,(int)$row['EventId']);
                        if($i%2==0){
                            echo '<div class="row">';
                        }?>
                        <div class='col-lg-6 article'>
                            <div class='articlecontent'>
                                <div class="dropdown" style='display:inline-block;'>
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" aria-haspopup="true" aria-expanded="true">
                                            <i class='fa fa-gear'></i> 
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li style='padding:0;'><a onclick='editevent(this)'>Edit</a></li>
                                        <li style="padding:0;"><a onclick='deleteevent(this)'>Delete</a></li>
                                    </ul>
                                </div>
                                <div class='mt-4'>
                                    <?php 
                                        $imagearray=explode(' , ',$row['imagesrc']);     
                                    ?>
                                    <img src="<?php echo $imagearray[0]; ?>"  class="articleimg" alt="">
                                </div>
                                <div class='mt-4'>
                                    <?php echo $row['Description'];?>
                                </div>
                                <div class='mt-5 text-center'>
                                   <div style='color:green;'><?php 
                                        echo "Posted on : ".date('F d, Y',strtotime($row['date'])); 
                                   ?></div> 
                                </div>
                            </div>
                        </div>
                    <?php
                        if($i%2!=0) echo "</div>";
                        $i++;
                    }
                    if(($i%2)!=0){
                            echo "</div>";
                    }
                }
            ?>
           <!--  <div class='row'>
                <div class='col-lg-6 article'>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, maxime? Consequuntur architecto neque ex, voluptate doloremque deserunt reiciendis impedit maxime nobis doloribus ducimus est nihil! Accusamus debitis illum minus hic repellat et voluptates, non, numquam voluptas dicta nemo libero quod sed doloribus vero sint corrupti impedit! Similique eligendi error, ipsam est animi vero incidunt voluptates aspernatur fugiat molestiae atque eos.
                    </div>
                </div>
                <div class='article col-lg-6 article'>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptatem, corporis, eligendi qui ipsa iure consequatur saepe perspiciatis sapiente amet deleniti eaque, aliquam distinctio quibusdam nostrum similique tempore magni at delectus. Ullam quisquam at ipsa unde? Obcaecati reprehenderit iure quas in, mollitia facilis nobis expedita corrupti illum architecto error necessitatibus ipsa voluptate explicabo eos magnam, deserunt ex modi reiciendis quidem voluptas nesciunt. Temporibus, dolores. Ex labore eaque sequi est nulla blanditiis repellat facilis totam obcaecati temporibus, vero accusantium incidunt commodi maiores maxime cum corporis? Reprehenderit corporis cupiditate unde neque deserunt tempore, eaque natus, nobis nemo aliquam ducimus esse. Nemo, ipsum iste. Perferendis non sit, repellat omnis nostrum alias? Aut quo veritatis iure, voluptas expedita eos maxime qui ab dolores fugiat?
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>


<?php 

if(isset($_GET["deleteevent"])&&isset($_GET['type'])){
    $obj=new SQL();
    $conn=$obj->SQLi();
    if(!$conn) die();
    else{
        $query="DELETE FROM `events` where EventId=".$eventid[(int)$_GET['deleteevent']].";";
        if(mysqli_query($conn,$query)){
                //deleted query
                echo "<script>window.location.href='./sportevent.php';</script>";
        }
        else{?>
            <script>
                popupform("Unable to delete the event",'Sorry for the inconvenience!');
            </script>
        <?php }
    }
}
if(isset($_GET['editingevent'])&&isset($_GET['type'])){
    $obj=new SQL();
    $conn=$obj->SQLi();
    if(!$conn) die();
    else{
        $query="SELECT * from events where EventId=".$eventid[(int)$_GET['editingevent']]." and type='".$_GET['type']."';";
        $res=mysqli_query($conn,$query);
        if($res && (mysqli_num_rows($res)==1)){
            $row=mysqli_fetch_assoc($res);
        ?>
        <script>
            $('#fullcontainer').children().css('display','none');
        </script>        
    <div class='appending' style='display : none;'>
        <form action="./sportevent.php?editingevent=<?php echo $_GET['editingevent'];?>&type=<?php echo $_GET['type'];?>" method="POST" enctype="multipart/form-data">
            <div class='row mt-4'>
                <pre class='tab' style='color:green;margin-left:15px;'>Event Name (Originally Posted) :<?php echo "\t".$row['Ename'];?></pre>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="eventname">Event Name : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>
                <div class='col-lg-8'>
                    <input type="text" name='eventname' size="50" required>
                </div>   
            </div>
            <div class='row mt-4'>
                <pre class='tab' style='color:green;margin-left:15px;'>Event Date (Originally Posted) :<?php echo "\t".$row['date'];?></pre>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="eventdata">Event Date : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>
                <div class='col-lg-8'>
                    <input type="date" name='eventdate' required>
                </div>
            </div>
            <div class='row mt-4'>
                <pre class='tab' style='color:green;margin-left:15px;'>Event Description (Originally Posted) :<?php echo "\t".$row['Description'];?></pre>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="eventdes">Event Description : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>
                <div class='col-lg-8'>
                    <textarea class='form-control' name="eventdes" id='eventdes' cols='30' rows="10" required></textarea>
                </div>
            </div>
            <div class='row mt-5'>
                <label for="showImages" style='display:inline-block;margin-left:15px;'>Uploaded Images :</label>
                <button class='btn btn-primary' style='margin-left:10%;' id='showImages'>Click to view Previously Uploaded Images</button>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="file" name='upload1' required />
                </div>
            </div>
            <div class='row mt-4'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 Description : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="text" name='upload1des' required />
                </div>
            </div>
            <div class='text-center mt-5'>
                <button class='btn btn-primary' onclick='addpic(this)'>Add another pic</button>
                <button class='btn btn-primary' onclick='removepic(this)'>Remove one photo field</button>
            </div>
            <div class='text-center mt-5'>
                <button class='btn btn-success' name='eventedit' type="submit">EDIT EVENT INFO</button>
                <a href="./sportevent.php" class='btn btn-danger'>Cancel</a>
            </div>
        </form>
    </div>
    <style>
            .photo{
                display: none;
            }
            .desphoto{
                display: none;
            }
        </style>
        <div class='row mt-4 photo'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="file" name='upload1' required />
                </div>
            </div>
            <div class='row mt-4 desphoto'>
                <div class='col-lg-4'>
                    <label for="upload">Photo 1 Description : </label>
                    <span style='color:red;margin-left:10px;'>*</span>
                </div>  
                <!--<div class='col-lg-8'>
                    <input type='file' name="upload[]" multiple required />
                </div>-->
                <div class='col-lg-8'>
                    <input type="text" name='upload1des' required />
                </div>
            </div>
        <script>
            function addpic(ele){
                var numele=ele.parentElement.previousElementSibling.previousElementSibling.children[1].children[0];
                var num=$(numele).attr('name');
                var clone1=document.getElementsByClassName('photo')[0].cloneNode(true);
                $(clone1).removeClass('photo');
                $(clone1.children[0].children[0]).text('Photo '+(parseInt(num.slice(6))+1));
                $(clone1.children[1].children[0]).attr('name','upload'+(parseInt(num.slice(6))+1));
                var clone2=document.getElementsByClassName('desphoto')[0].cloneNode(true);
                $(clone2).removeClass('desphoto');
                $(clone2.children[0].children[0]).text('Photo '+(parseInt(num.slice(6))+1)+" Description");
                $(clone2.children[1].children[0]).attr('name','upload'+(parseInt(num.slice(6))+1)+'des');
                $(clone1).insertBefore($(ele.parentElement));
                $(clone2).insertBefore($(ele.parentElement));

            }
            function removepic(ele){
                var numele=ele.parentElement.previousElementSibling.previousElementSibling.children[1].children[0];
                var num=$(numele).attr('name');
                if(num!='upload1'){
                    $(ele.parentElement.previousElementSibling.previousElementSibling).remove();
                    $(ele.parentElement.previousElementSibling).remove();
                }   
            }
        </script>
    <script>
        $("#fullcontainer").html($(".appending").html());
        $('#showImages').click(function(){
            var whitebg = document.getElementById("white-background");
            var dlg = document.getElementById("dlgbox");
            whitebg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;
            
            dlg.style.left = (winWidth/2) - 480/2 + "px";
            dlg.style.top = "150px";
            $("#hidebox").hide();
            $("#dlg-header-text").text("Uploaded Images");
            <?php 
                $imagearray=explode(' , ',$row['imagesrc']);
                $strbody='<div class="row">';
                for($i=0;$i<sizeof($imagearray);$i++){
                    $strbody=$strbody.'<div class="col-lg-6"><img src="'.$imagearray[$i].'" class="articleimg1" alt="Image'.($i+1).'"></div>';
                    if($i>=1)   break;
                }
                $strbody=$strbody.'</div>';
            ?>
            $("#dlg-body").html('<?php echo $strbody;?>');
            $("#dlgLogin").hide();
            $("#dlgLogout").text("Go Back");
            $("#dlgLogout").click(function (){
                $("#white-background").css('display','none');
                $("#dlgbox").css('display','none');
            });
        });
    </script>
    <?php
        if(isset($_POST['eventedit'])){
            if(isset($_POST['eventname'],$_POST['eventdate'],$_POST['eventdes'])){
            if(count($_FILES['upload']['name'])>=1){
                $obj=new SQL();
                $conn=$obj->SQLi();
                if(!$conn){?>
                    <script>popupform('Info not posted','Server Error.Sorry for the inconvenience');</script>
                <?php }
                else{
                    //var_dump($_POST);
                    $strfilename='';
                    for($i=0;$i<count($_FILES['upload']['name']);$i++){
                            $tempname=$_FILES['upload']['name'][$i];
                            echo str_replace(' ','',$tempname);
                            $imageFileType = pathinfo(basename($tempname),PATHINFO_EXTENSION);
                            $targetdir="eventpics/";
                            $target_file = $targetdir.str_replace(' ','',str_replace(".".$imageFileType,'',$tempname)).'--'.date('Y-m-d').".".$imageFileType;
                            $arr=array('jpg', 'png', 'jpeg');
                            if(!in_array($imageFileType,$arr)){?>
                                <script>
                                    var whitebg = document.getElementById("white-background");
                                    var dlg = document.getElementById("dlgbox");
                                    whitebg.style.display = "block";
                                    dlg.style.display = "block";

                                    var winWidth = window.innerWidth;
                                    var winHeight = window.innerHeight;
                                    
                                    dlg.style.left = (winWidth/2) - 480/2 + "px";
                                    dlg.style.top = "150px";
                                    $("#hidebox").hide();
                                    $("#dlg-header-text").text("Files not in jpg,jpeg,png format");
                                    $("#dlg-body").html('Not Successful');
                                    $("#dlgLogin").hide();
                                    $("#dlgLogout").text("Go Back");
                                    $("#dlgLogout").click(function (){
                                        window.location.href="./sportevent.php?editingevent=<?php echo $_GET['editingevent'];?>&type=<?php echo $_GET['type'];?>";
                                    });
                                </script>
                        <?php }
                        else{
                            //echo 'suxce';
                                move_uploaded_file($_FILES["upload"]["tmp_name"][$i], $target_file);
                                $strfilename=$strfilename.$target_file." , ";
                        }
                    }
                    $query='UPDATE `events` SET `Ename`="'.$_POST['eventname'].'",`Description`="'.$_POST['eventdes'].'",`imagesrc`="'.substr($strfilename,0,strlen($strfilename)-3).'",`date`="'.$_POST["eventdate"].'",`type`="'.$_GET['type'].'" where `EventId`='.$eventid[(int)$_GET['editingevent']].' and type="'.$_GET['type'].'";';
                    if(mysqli_query($conn,$query)){ ?>
                        <script>
                            //Succesfully Updated
                            popupform('Event Info Edited','Successful');
                        </script>
                    <?php }
                    else{ ?>
                        <script>
                            popupform('Event Info not posted','Not Successful.Sorry for the inconvenience<?php echo $query;?>');
                        </script>                       
                    <?php }
                }
            }
            else{?>
                <script>popupform('Info not posted','Server Error.Sorry for the inconvenience');</script>
            <?php }  
            }
            else{
                ?>
                <script>
                    popupform('Cannot be edited','Server Error');
                </script>
                <?php
            }          
        }
      }
      else{?>
            <script>
                popupform("Unable to EDIT the event",'Sorry for the inconvenience');
            </script>
      <?php }
    }
}

?>




<!-- code end -->
 
  
<div class="container">




</div>


  
  
  

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



					





                                                    





































