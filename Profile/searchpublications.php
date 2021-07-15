<?php 
    include "./testingpdf.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Search Publications and Patents</title>

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

                                <!-- code start-->
                                <li><a href="./publications.php"> <i class="fa fa-user"></i>Publications </a></li>
                                <li><a href="./patents.php"><i class="fa fa-user"></i>Patents</a></li>			
								<li><a href="./searchpublications.php"><i class="fa fa-user"></i>Search Publications and Patents</a></li>			
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
    margin-top: 0; 
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
#searchtype{
    color : black;
    background-color: whitesmoke;
    font-size: 20px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding-left: 5px;
}
.formdiv>form{
    height: 26px;
}
.formdiv>form>input{
    width: 250px;
}
.formdiv>form>button{
    /*font-size: 20px;*/
    padding: 2.5px 10px;
}
.after{
    background-color: #edeaea;
    border-bottom: 2px solid white;
}
.para{
    background-color: #214B8C;
}
#fullcontainer>div>div{
    border-left: 1px solid white;
    border-right: 0;
}
#fullcontainer>div>div:first-child{
    border-right: 1px solid white;
    border-left: 0  ;
}
#zindex{
    display: none;
    border: 1px solid black;
    border-top: 0;
    position: relative;
    left : 321.4px;
    width: 250px;
    z-index: 10;
}
#zindex>a{
    padding: 5px;
    margin: 0;
}

</style>

<script>
    function printing(){
        var bodyhtml=document.body.innerHTML;
        console.log(document.getElementById("publicationvi").innerHTML);
        document.body.innerHTML='<div class="dis"><img src="./mainlogo.png"></div>'+document.getElementById("publicationvi").innerHTML;
        //$("img").css({"width": "100%","height": "150px"});
        //$("p").removeClass('text-white');
        window.print();
        document.body.innerHTML=bodyhtml;
    }
    function searchname(ele){
        //console.log($(ele).val());
        $.ajax({
            url : "./oninputtemp.php?q="+$(ele).val(),
            type : "GET",
            success : function(data){
                $(ele).attr("list","facultynames");
                $(data).insertAfter($(ele));
            },error : function(err){
                console.log("not working");
            }
        })
    } 
    function samp(ele){
        $("#searchp").show();
        $("#searchp2").remove();
        if($(ele).val()=="1"){
            $("#searchp1").remove();
            $("#searchp").val("");
            $("#searchp").attr("name","searchfac");
            $("#searchp").attr("type","text");
            $("#searchp").attr("placeholder","Enter Faculty name");
        }
        if($(ele).val()=="2"){
            $("#searchp1").remove();
            $("#searchp").hide();
            $("#searchp").val('dept');
            $("#searchp2").show();
            $('<select id="searchp2" name="dept" style="height : 26px;"><?php $arr=array("CE","EE","ME","MAT","PHY");for($i=0;$i<sizeof($arr);$i++){echo '<option value="'.$arr[$i].'">'.$arr[$i].'</option>';}?></select>').insertBefore("form>button");
            $("form>button").css('margin-left','10px');
        }
        if($(ele).val()=="3"){
            $("#searchp1").remove();
            $("#searchp").val("");
            $("#searchp").attr("name","searchyr");
            $("#searchp").attr("type","number");
            $("#searchp").attr("placeholder","Enter Year");
        }
        if($(ele).val()=="4"){
            $("#searchp1").remove();
            $("#searchp").val("");
            $("#searchp").attr("name","searchyrA");
            $("#searchp").attr("type","number");
            $("#searchp").attr("placeholder","Enter Year A");
            $('<input type="number" name="searchyrB" id="searchp1" placeholder="Enter the Year B">').insertBefore("form>button");
        }
        if($(ele).val()=="5"){
            $("#searchp1").remove();
            $("#searchp").val("");
            $("#searchp").attr("name","facname");
            $("#searchp").attr("type","text");
            $("#searchp").attr("placeholder","Faculty Name");
            $('<input type="number" name="searchyrB" id="searchp1" placeholder="Enter the Year" required>').insertBefore("form>button");
        }
        if($(ele).val()=="6"){
            $("#searchp1").remove();
            $("#searchp").val("");
            $("#searchp").attr("name","IF");
            $("#searchp").attr("type","number");
            $('#searchp').attr('step','any');
            $("#searchp").attr("placeholder","Impact Factor greater than equal to");
        }
    }
</script>

<div class="container">

 <div class="container">
    <div class="row mt-5">
        <div class="w-auto" style="display : inline-block;">
            <select name="searchtype" id="searchtype" onchange="samp(this)">
                    <option value="1">Search by faculty</option>
                    <option value="2">Search by dept</option>
                    <option value="3">Search by year</option>
                    <option value="4">Search by between year A and B</option>
                    <option value="5">Search by faculty and year</option>
                    <option value="6">Search by IF(Impact Factor)</option>
            </select>
        </div>
        <div class="text-left formdiv" style="display : inline-block;">
            <form action="./searchpublications.php" method="GET">
            
                <input type="text" name="searchfac" id="searchp" oninput="searchname(this)" placeholder="Enter Faculty name"  autocomplete="off" style="display : inline-block;">
                <!--<div class="appearfac"></div>-->
             <button type="submit" class="btn btn-success" style="display : inline-block;">Search</button>
            </form>
            
        </div>
    </div>
 </div>
 <div id="zindex"> 

</div>
    <div class="container mt-5">
        <div class="row">
            <div class='col-sm-6 text-center publi'> <p onclick="expandpublic()">Publications</p></div>
            <div class='col-sm-6 text-center paten'>  <p onclick="exapndpate()">Patents</p></div>
        </div>
    </div>
        <script>
            $(".publi").css('border-bottom','3px solid green');
            $("#publicationvi").show();
            $("#patentvi").css('display','none');
            function expandpublic(){
                $(".publi").css('border-bottom','3px solid green');
                $(".paten").css('border-bottom','0px');
                $("#publicationvi").css('display','block');
                $("#patentvi").css('display','none');
                $(".puyearview").show();
                $(".payearview").hide();
            }
            function exapndpate(){
                $(".paten").css('border-bottom','3px solid green');
                $(".publi").css('border-bottom','0px');
                $("#publicationvi").css('display','none');
                $("#patentvi").show();
                $(".puyearview").hide();
                $(".payearview").show();
            }
        </script>
    <div id="publication view">
    <div class="mt-5" style="position: absolute;">
        <h3 style="display :none;">Search Results</h3>
        <hr class="my-2" style="border-top : 3px solid black; display : none;">
        <div class="container mt-5" id="notfullcontainer">
        <?php
            if(isset($_GET["searchfac"])&& (!isset($_GET["id"]))&& (!isset($_GET["dept"]))){
                echo '<div id="publicationvi">';
                echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $conn = mysqli_connect($servername, $username,'', $dbname);
                if(!$conn) die();
                else{
                    $name1=$_GET["searchfac"];
                    for($i=0;$i<strlen($_GET["searchfac"]);$i++){
                        if($_GET["searchfac"][$i]=='(' && $i>=2){
                            $name1=(substr($_GET["searchfac"],0,$i-1));
                            break;
                        }
                    }
                    //echo "<script>alert('".$name1."')</script>";
                    $query ="SELECT EID,name from `faculty` where name like ";
                    if($name1==$_GET["searchfac"]){
                        $query=$query."'%".$_GET["searchfac"]."%'";
                    }
                    else{
                        $query=$query."'%".$name1."%';";
                    }
                    $res=mysqli_query($conn,$query);
                    echo "<div class='row'>";
                    if(mysqli_num_rows($res)==0)
                    { echo "No results found"; }
                    else{
                        while($row=mysqli_fetch_array($res)){
                            $query1="SELECT PID from `pubicationauthor` where EID=".$row['EID'].";";
                            $query2="SELECT JID from `journalauthor` where EID=".$row['EID'].";";
                            $res1=mysqli_query($conn,$query1);
                            $res2=mysqli_query($conn,$query2);
                            $rows=mysqli_num_rows($res1);
                            $rows1=mysqli_num_rows($res2);
                            if(($rows+$rows1)!=0){
                            echo "<div class='col-lg-12'>";
                            echo "<a href='".("./searchpublications.php?searchfac=".$_GET["searchfac"]."&id=".$row["EID"])."&type=publications'>".$row["name"]."(".($rows+$rows1).")"."</a>";
                            echo "</div>";
                            }
                        }
                    }
                    echo "</div>";
                }
                echo '</div>';
                echo '<div id="patentvi" style="display : none;">';
                echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $conn = mysqli_connect($servername, $username,'', $dbname);
                if(!$conn) die();
                else{
                    $name1=$_GET["searchfac"];
                    for($i=0;$i<strlen($_GET["searchfac"]);$i++){
                        if($_GET["searchfac"][$i]=='(' && $i>=2){
                            $name1=(substr($_GET["searchfac"],0,$i-1));
                            break;
                        }
                    }
                    //echo "<script>alert('".$name1."')</script>";
                    $query ="SELECT EID,name from `faculty` where name like ";
                    if($name1==$_GET["searchfac"]){
                        $query=$query."'%".$_GET["searchfac"]."%'";
                    }
                    else{
                        $query=$query."'%".$name1."%';";
                    }
                    $res=mysqli_query($conn,$query);
                    echo "<div class='row'>";
                    if(mysqli_num_rows($res)==0) echo "No results found";
                    while($row=mysqli_fetch_array($res)){
                        $query1="SELECT PaId from `patents` where PIid=".$row['EID'].";";
                        $res1=mysqli_query($conn,$query1);
                        $rows=mysqli_num_rows($res1);
                        $query2="SELECT PaId from `patentcopi` where COPI=".$row['EID'].";";
                        $res2=mysqli_query($conn,$query2);
                        $rows1=mysqli_num_rows($res2);
                        if(($rows+$rows1) !=0){
                            echo "<div class='col-lg-12'>";
                            echo "<a href='".("./searchpublications.php?searchfac=".$_GET["searchfac"]."&id=".$row["EID"])."&type=patents'>".$row["name"]."(".($rows+$rows1).")"."</a>";
                            echo "</div>";
                        }
                    }
                    echo "</div>";
                }
                echo '</div>';
            }
            if(isset($_GET["searchfac"])&&isset($_GET["id"])){
                    $servername = 'localhost';
                    $username = 'root';
                    $dbname = 'internship';
                    $conn = mysqli_connect($servername, $username,'', $dbname);
                    if(!$conn) die();
                    else{
                        echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('ndewekw')</script>";
                        echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                        $query1="SELECT name from `faculty` where EID=".$_GET['id'].";";
                        $name1 = mysqli_query($conn, $query1);
                        $name = mysqli_fetch_array($name1);
                        echo "<div id='publicationvi'>";
                        echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('".$name["name"]."')</script>";
                        echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";?>
                        <div class="row">
                        <div class="para col-lg-7">
                        <p class="mb-2 mt-2 text-center text-white">Publication Title</p>
                        </div>
                         <div class="para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Type</p></div>
                        <div class="para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Year</p></div>
                        <div class="para col-lg-3"><p class="mb-2 mt-2 text-center text-white">Contributed with</p></div></div>
                        <?php $mainarr=array();
                        $quer = "SELECT Title,PID,Year FROM publications WHERE PID in (SELECT PID from pubicationauthor where EID=".$_GET["id"].");";
                        $result = mysqli_query($conn, $quer);
                        if(!$result) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                        else{
                            while($row = mysqli_fetch_assoc($result)) {
                                $subq = 'SELECT `name` from `faculty` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].' and EID!='.$_GET["id"].';';
                                $str="";
                                $result1 = mysqli_query($conn, $subq);
                                while($row1= mysqli_fetch_assoc($result1)){
                                    $str=$str.$row1["name"].",";
                                }
                                array_push($mainarr,($row["PID"]));
                                if($str=="") { ?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Title"]?></p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Conference</p></div>
                                        <div class="col-lg-1"><p class="mb-2 mt-2 text-center"><?php echo $row["Year"]?></p></div>
                                        <div class="col-lg-3"><p class="mb-2 mt-2 text-center">Fully Contributed by you</p></div></div>
                                <?php } 
                                else {?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Title"]?></p></div><div class=" col-lg-1"><p class="mb-2 mt-2 text-center">Conference</p></div>
                                        <div class="col-lg-1"><p class="mb-2 mt-2 text-center"><?php echo $row["Year"]?></p></div>
                                        <div class="col-lg-3"><p class="mb-2 mt-2 text-center"><?php echo substr($str,0,strlen($str)-1) ?></p></div></div>
                                <?php }
                            }
                        }
                        $quer = "SELECT Paper_Title,JID,Year FROM journals WHERE JID in (SELECT JID from journalauthor where EID=".$_GET["id"].");";
                        $result = mysqli_query($conn, $quer);
                        if(!$result) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                        else{
                            while($row = mysqli_fetch_assoc($result)) {
                                $subq = 'SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].' and EID!='.$_GET["id"].';';
                                $str="";
                                $result1 = mysqli_query($conn, $subq);
                                while($row1= mysqli_fetch_assoc($result1)){
                                    $str=$str.$row1["name"].",";
                                }
                                if($str=="") { ?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Paper_Title"]?></p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Journal</p></div>
                                        <div class="col-lg-1"><p class="mb-2 mt-2 text-center"><?php echo $row["Year"]?></p></div>
                                        <div class="col-lg-3"><p class="mb-2 mt-2 text-center">Fully Contributed by you</p></div></div>
                                <?php } 
                                else {?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Paper_Title"]?></p></div><div class=" col-lg-1"><p class="mb-2 mt-2 text-center">Journal</p></div>
                                        <div class="col-lg-1"><p class="mb-2 mt-2 text-center"><?php echo $row["Year"]?></p></div>
                                        <div class="col-lg-3"><p class="mb-2 mt-2 text-center"><?php echo substr($str,0,strlen($str)-1) ?></p></div></div>
                                <?php }
                            }
                        }?>
                            <iframe src="printem.php?searchfac=<?php echo $_GET['searchfac'];?>&id=<?php echo $_GET['id'];?>&type=publications" style="display:none;" name="conf1"></iframe>
                            <div class="mt-5 text-center">
                                <button class="btn btn-success" onclick="frames['conf1'].print()">Print the results</button>
                            </div>
                        <?php echo "</div>";

                        $query1="SELECT name from `faculty` where EID=".$_GET['id'].";";
                        $name1 = mysqli_query($conn, $query1);
                        $name = mysqli_fetch_array($name1);
                        echo "<div id='patentvi' style='display : none;'>";
                        echo '<div class="row">';
                        echo '<div class="para col-lg-7">';
                        echo '<p class="mb-2 mt-2 text-center text-white">Patent Title</p>';
                        echo '</div>';
                        echo '<div class="para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Year</p></div>';
                        echo '<div class="para col-lg-4"><p class="mb-2 mt-2 text-center text-white">Role</p></div></div>';
                        $quer = "SELECT PTitle,PaId,Year FROM patents WHERE PIid=".$_GET["id"].";";
                        $result = mysqli_query($conn, $quer);
                        if(!$result) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                        else{
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center">'.$row["PTitle"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row["Year"].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.'Principal Investigator'.'</p></div></div>'; 
                            }
                        }
                        $quer1 = "SELECT PTitle,PaId,Year FROM patents WHERE PaId in (Select PaId from `patentcopi` where COPI=".$_GET["id"].");";
                        $result1 = mysqli_query($conn, $quer1);
                        if(!$result1) die();
                        else{
                            while($row = mysqli_fetch_assoc($result1)) {
                                echo '<div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center">'.$row["PTitle"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row["Year"].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.'Co-Principal Investigator'.'</p></div></div>'; 
                            }
                        } ?>
                            <iframe src="printem.php?searchfac=<?php echo $_GET['searchfac'];?>&id=<?php echo $_GET['id'];?>&type=patents" style="display:none;" name="conf2"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf2'].print()">Print the results</button>
                            </div>
                        <?php echo "</div>";
                    }                
            }
            if(isset($_GET["searchyr"])){
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $conn = mysqli_connect($servername, $username,'', $dbname);
                if(!$conn) die();
                else{
                    echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('".$_GET["searchyr"]."')</script>";
                    echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                    echo "<div class='puyearview'>";
                    echo '<div class="row">';
                    echo '<div class="para col-lg-7">';
                    echo '<p class="mb-2 mt-2 text-center text-white">Publication Title</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Type</p></div>';
                    echo '<div class="para col-lg-4"><p class="mb-2 mt-2 text-center text-white">Contributed with</p></div></div>';
                    $query="SELECT PID,Title from `publications` where Year=".$_GET["searchyr"].";";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        $mainarr=array();
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            array_push($mainarr,($row["PID"]));
                            echo '<div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center">'.$row["Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Conference</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                        }   
                    }
                    $query="SELECT JID,Paper_Title from `journals` where Year=".$_GET["searchyr"].";";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            echo '<div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center">'.$row["Paper_Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Journal</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                        }   
                    } ?>
                    <iframe src="printem.php?searchyr=<?php echo $_GET['searchyr'];?>&type=publications" style="display:none;" name="conf1"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf1'].print()">Print the results</button>
                            </div>
                    <?php echo "</div>";
                    echo "<div class='payearview' style='display : none;'>";
                    echo '<div class="row">';
                    echo '<div class="para col-lg-8">';
                    echo '<p class="mb-2 mt-2 text-center text-white">Patent Title</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-4"><p class="mb-2 mt-2 text-center text-white">Patent Members</p></div></div>';
                    $query1="SELECT PaId,PTitle,PIid from `patents` where Year=".$_GET["searchyr"].";";
                    $res1=mysqli_query($conn,$query1);
                    if(!$res1) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res1)){
                            $pi='SELECT `name` from `faculty` where `EID`='.$row["PIid"].';'; 
                            $name=mysqli_query($conn, $pi);
                            $piname= mysqli_fetch_assoc($name);
                            $query1='SELECT `name` from `faculty` INNER JOIN `patentcopi` ON `patentcopi`.COPI=`faculty`.EID WHERE `PaId`='.$row["PaId"].';';
                            $str=$piname['name'].',';
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            echo '<div class="row after"><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["PTitle"].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                        }   
                    } ?>
                    <iframe src="printem.php?searchyr=<?php echo $_GET['searchyr'];?>&type=patents" style="display:none;" name="conf2"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf2'].print()">Print the results</button>
                            </div>
                    <?php echo "</div>";
                }
            }
            if(isset($_GET["searchyrA"])&&isset($_GET["searchyrB"])){
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $conn = mysqli_connect($servername, $username,'', $dbname);
                if(!$conn) die();
                else{
                    echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('From Year ".$_GET["searchyrA"]." to ".$_GET["searchyrB"]."');$('hr').css('display','block');</script>";
                    echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                    echo "<div class='puyearview'>";
                    echo '<div class="row">';
                    echo '<div class="para col-lg-7">';
                    echo '<p class="mb-2 mt-2 text-center text-white">Publication Title</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-1">';
                    echo '<p class="mb-2 mt-2 text-center text-white">Type</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-3"><p class="mb-2 mt-2 text-center text-white">Contributed with</p></div><div class=" para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Year</p></div></div>';
                    $max=max((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                    $min=min((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                    $query="SELECT PID,Title,Year from `publications` where Year>=".$min." and Year<=".$max." ORDER by Year desc;";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        $mainarr=array();
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            array_push($mainarr,($row["PID"]));
                            echo '<div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center">'.$row["Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Conference</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row["Year"].'</p></div></div>'; 
                        }   
                    }
                    $query="SELECT JID,Paper_Title,Year from `journals` where Year>=".$min." and Year<=".$max." ORDER by Year desc;";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        $mainarr=array();
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            array_push($mainarr,($row["JID"]));
                            echo '<div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center">'.$row["Paper_Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Journal</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row["Year"].'</p></div></div>'; 
                        }   
                    }?>
                     <iframe src="printem.php?searchyrA=<?php echo $_GET['searchyrA'];?>&searchyrB=<?php echo $_GET['searchyrB'];?>&type=publications" style="display:none;" name="conf1"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf1'].print()">Print the results</button>
                            </div>
                    <?php echo "</div>";
                    echo "<div class='payearview' style='display : none;'>";
                    echo '<div class="row">';
                    echo '<div class="para col-lg-8">';
                    echo '<p class="mb-2 mt-2 text-center text-white">Patent Title</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-3"><p class="mb-2 mt-2 text-center text-white">Principal Investigator</p></div><div class=" para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Year</p></div></div>';
                    $max=max((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                    $min=min((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                    $query="SELECT PaId,PIid,PTitle,Year from `patents` where Year>=".$min." and Year<=".$max." ORDER by Year desc;";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` WHERE `EID`='.$row["PIid"].';';
                            $result1 = mysqli_query($conn, $query1);
                            $principalname=mysqli_fetch_array($result1);
                            echo '<div class="row after"><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["PTitle"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.$principalname["name"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row["Year"].'</p></div></div>'; 
                        }   
                    }?>
                    <iframe src="printem.php?searchyrA=<?php echo $_GET['searchyrA'];?>&searchyrB=<?php echo $_GET['searchyrB'];?>&type=patents" style="display:none;" name="conf2"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf2'].print()">Print the results</button>
                            </div>
                    <?php echo "</div>";

                }
            }
        if(isset($_GET["dept"])){
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $conn = mysqli_connect($servername, $username,'', $dbname);
                if(!$conn) die();
                else{
                    echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('".$_GET["dept"]." Department');$('hr').css('display','block');</script>";
                    echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                    echo "<div class='puyearview'>";
                    echo '<div class="row">';
                    echo '<div class="para col-lg-8">';
                    echo '<p class="mb-2 mt-2 text-center text-white">Publication Title</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-3"><p class="mb-2 mt-2 text-center text-white">Type</p></div><div class=" para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Year</p></div></div>';
                    $query="SELECT distinct(JID) from `journalauthor` NATURAL JOIN `faculty` where `dept`='".$_GET["dept"]."';";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        $mainarr=array();
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT JID,Paper_Title,Year from `journals` where JID='.$row["JID"].';';
                            $result1 = mysqli_query($conn, $query1);
                            $pubarray=mysqli_fetch_array($result1);
                            echo '<div class="row after"><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$pubarray["Paper_Title"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.'Journal'.'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$pubarray["Year"].'</p></div></div>'; 
                        }   
                    }
                    $query="SELECT distinct(PID) from `pubicationauthor` NATURAL JOIN `faculty` where `dept`='".$_GET["dept"]."';";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        $mainarr=array();
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT PID,Title,Year from `publications` where PID='.$row["PID"].';';
                            $result1 = mysqli_query($conn, $query1);
                            $pubarray=mysqli_fetch_array($result1);
                            echo '<div class="row after"><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$pubarray["Title"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.'Conference'.'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$pubarray["Year"].'</p></div></div>'; 
                        }   
                    }?>
                    <iframe src="printem.php?dept=<?php echo $_GET['dept'];?>&type=publications" style="display:none;" name="conf1"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf1'].print()">Print the results</button>
                            </div>
                    <?php echo "</div>";
                    echo "<div class='payearview' style='display : none;'>";
                    echo '<div class="row">';
                    echo '<div class="para col-lg-8">';
                    echo '<p class="mb-2 mt-2 text-center text-white">Patent Title</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-3"><p class="mb-2 mt-2 text-center text-white">Principal Investigator</p></div><div class=" para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Year</p></div></div>';
                    $query="SELECT PaId,PIid,PTitle,name,Year from `patents` inner join `faculty` on faculty.EID=patents.PIid where dept='".$_GET['dept']."' ORDER BY PaId desc;";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res)){
                            echo '<div class="row after"><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["PTitle"].'</p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">'.$row["name"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row["Year"].'</p></div></div>'; 
                        }   
                    }?>
                    <iframe src="printem.php?dept=<?php echo $_GET['dept'];?>&type=patents" style="display:none;" name="conf2"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf2'].print()">Print the results</button>
                            </div>
                    <?php echo "</div>";
                    
                }
        }
        if(isset($_GET["facname"])&& isset($_GET["searchyrB"])){
                echo '<div id="publicationvi">';
                echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $conn = mysqli_connect($servername, $username,'', $dbname);
                if(!$conn) die();
                else{
                    $name1=$_GET["facname"];
                    for($i=0;$i<strlen($name1);$i++){
                        if($name1[$i]=='(' || $name1[$i]==')'){
                            break;
                        }
                    }
                    $name1=substr($name1,0,$i);
                    if($name1[$i-1]==' '){
                        $name1=substr($name1,0,$i-1); 
                    } 
                    //echo "<script>alert('".$name1."')</script>";
                    $query ="SELECT EID,name from `faculty` where name like ";
                    if($name1==$_GET["facname"]){
                        $query=$query."'%".$_GET["facname"]."%'";
                    }
                    else{
                        $query=$query."'%".$name1."%';";
                    }
                    $res=mysqli_query($conn,$query);
                    echo "<div class='row'>";
                    if(mysqli_num_rows($res)==0)
                    { echo "No results found"; }
                    else{
                        while($row=mysqli_fetch_array($res)){
                            $query1="SELECT PID from `pubicationauthor` natural join `publications` where EID=".$row['EID']." and Year=".$_GET["searchyrB"].";";
                            $query2="SELECT JID from `journalauthor` natural join `journals`  where EID=".$row['EID']." and Year=".$_GET["searchyrB"].";";
                            $res1=mysqli_query($conn,$query1);
                            $res2=mysqli_query($conn,$query2);
                            $rows=mysqli_num_rows($res1);
                            $rows1=mysqli_num_rows($res2);
                            if(($rows+$rows1)!=0){
                            echo "<div class='col-lg-12'>";
                            echo "<a href='".("./searchpublications.php?year=".$_GET["searchyrB"]."&id=".$row["EID"])."&type=publications'>".$row["name"]."(".($rows+$rows1)." publications in ".$_GET["searchyrB"]." )"."</a>";
                            echo "</div>";
                            }
                        }
                    }
                    echo "</div>";
                }
                echo '</div>';
                echo '<div id="patentvi" style="display : none;">';
                echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $conn = mysqli_connect($servername, $username,'', $dbname);
                if(!$conn) die();
                else{
                    $name1="";
                    for($i=0;$i<strlen($_GET["facname"]);$i++){
                        if($_GET["facname"][$i]=='(' && $i>=2){
                            $name1=$name1.(substr($_GET["facname"],0,$i-1));
                            break;
                        }
                    }
                    //echo "<script>alert('".$name1."')</script>";
                    $query ="SELECT EID,name from `faculty` where name like ";
                    if($name1==$_GET["facname"]){
                        $query=$query."'%".$_GET["facname"]."%'";
                    }
                    else{
                        $query=$query."'%".$name1."%';";
                    }
                    $res=mysqli_query($conn,$query);
                    echo "<div class='row'>";
                    if(mysqli_num_rows($res)==0) echo "No results found";
                    while($row=mysqli_fetch_array($res)){
                        $query1="SELECT PaId from `patents` where PIid=".$row['EID']." and Year=".$_GET["searchyrB"].";";
                        $res1=mysqli_query($conn,$query1);
                        $rows=mysqli_num_rows($res1);
                        $query2="SELECT PaId from `patentcopi` natural join `patents` where COPI=".$row['EID']." and Year=".$_GET["searchyrB"].";";
                        $res2=mysqli_query($conn,$query2);
                        $rows1=mysqli_num_rows($res2);
                        if(($rows+$rows1) !=0){
                            echo "<div class='col-lg-12'>";
                            echo "<a href='".("./searchpublications.php?year=".$_GET["searchyrB"]."&id=".$row["EID"])."&type=patents'>".$row["name"]."(".($rows+$rows1)." patents in ".$_GET["searchyrB"]." )"."</a>";
                            echo "</div>";
                        }
                    }
                    echo "</div>";
                }
                echo '</div>';
        }
        if(isset($_GET["year"]) && isset($_GET["id"])){
                    $servername = 'localhost';
                    $username = 'root';
                    $dbname = 'internship';
                    $conn = mysqli_connect($servername, $username,'', $dbname);
                    if(!$conn) die();
                    else{
                        echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('ndewekw')</script>";
                        echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                        $query1="SELECT name from `faculty` where EID=".$_GET['id'].";";
                        $name1 = mysqli_query($conn, $query1);
                        $name = mysqli_fetch_array($name1);
                        echo "<div id='publicationvi'>";?>
                        
                        <?php echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('".$name["name"]."')</script>";
                        echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";?>
                        <div class="row">
                        <div class="para col-lg-7">
                        <p class="mb-2 mt-2 text-center text-white">Publication Title</p>
                        </div>
                         <div class="para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Type</p></div>
                        <div class="para col-lg-4"><p class="mb-2 mt-2 text-center text-white">Contributed with</p></div></div>
                        <?php $mainarr=array();
                        $quer = "SELECT Title,PID FROM publications WHERE PID in (SELECT PID from pubicationauthor where EID=".$_GET["id"].") and Year=".$_GET["year"].";";
                        $result = mysqli_query($conn, $quer);
                        if(!$result) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                        else{
                            while($row = mysqli_fetch_assoc($result)) {
                                $subq = 'SELECT `name` from `faculty` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].' and EID!='.$_GET["id"].';';
                                $str="";
                                $result1 = mysqli_query($conn, $subq);
                                while($row1= mysqli_fetch_assoc($result1)){
                                    $str=$str.$row1["name"].",";
                                }
                                array_push($mainarr,($row["PID"]));
                                if($str=="") { ?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Title"]?></p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Conference</p></div>
                                        <div class="col-lg-4"><p class="mb-2 mt-2 text-center">Fully Contributed by you</p></div></div>
                                <?php } 
                                else {?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Title"]?></p></div><div class=" col-lg-1"><p class="mb-2 mt-2 text-center">Conference</p></div>
                                        <div class="col-lg-4"><p class="mb-2 mt-2 text-center"><?php echo substr($str,0,strlen($str)-1) ?></p></div></div>
                                <?php }
                            }
                        }
                        $quer = "SELECT Paper_Title,JID FROM journals WHERE JID in (SELECT JID from journalauthor where EID=".$_GET["id"].") and Year=".$_GET["year"].";";
                        $result = mysqli_query($conn, $quer);
                        if(!$result) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                        else{
                            while($row = mysqli_fetch_assoc($result)) {
                                $subq = 'SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].' and EID!='.$_GET["id"].';';
                                $str="";
                                $result1 = mysqli_query($conn, $subq);
                                while($row1= mysqli_fetch_assoc($result1)){
                                    $str=$str.$row1["name"].",";
                                }
                                if($str=="") { ?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Paper_Title"]?></p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">Journal</p></div>
                                        <div class="col-lg-4"><p class="mb-2 mt-2 text-center">Fully Contributed by you</p></div></div>
                                <?php } 
                                else {?>
                                        <div class="row after"><div class="col-lg-7"><p class="mb-2 mt-2 text-center"><?php echo $row["Paper_Title"]?></p></div><div class=" col-lg-1"><p class="mb-2 mt-2 text-center">Journal</p></div>
                                        <div class="col-lg-4"><p class="mb-2 mt-2 text-center"><?php echo substr($str,0,strlen($str)-1) ?></p></div></div>
                                <?php }
                            }
                        } ?>
                        <iframe src="printem.php?year=<?php echo $_GET['year'];?>&id=<?php echo $_GET['id'];?>&type=publications" style="display:none;" name="conf1"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf1'].print()">Print the results</button>
                            </div>
                       <?php echo "</div>";

                        echo "<div class='payearview' style='display : none;'>";
                        echo '<div class="row">';
                        echo '<div class="para col-lg-8">';
                        echo '<p class="mb-2 mt-2 text-center text-white">Patent Title</p>';
                        echo '</div>';
                        echo '<div class="para col-lg-4"><p class="mb-2 mt-2 text-center text-white">Patent Members</p></div></div>';
                        $query1="SELECT PaId,PTitle,PIid from `patents` where Year=".$_GET["year"].";";
                        $res1=mysqli_query($conn,$query1);
                        if(!$res1) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                        else{
                            while($row=mysqli_fetch_assoc($res1)){
                                if($row["PIid"]==$_GET["id"]){
                                    $pi='SELECT `name` from `faculty` where `EID`='.$row["PIid"].';'; 
                                    $name=mysqli_query($conn, $pi);
                                    $piname= mysqli_fetch_assoc($name);
                                    $query1='SELECT `name` from `faculty` INNER JOIN `patentcopi` ON `patentcopi`.COPI=`faculty`.EID WHERE `PaId`='.$row["PaId"].';';
                                    $str=$piname['name'].',';
                                    $result1 = mysqli_query($conn, $query1);
                                    while($row1= mysqli_fetch_assoc($result1)){
                                        $str=$str.$row1["name"].",";
                                    }
                                    echo '<div class="row after"><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["PTitle"].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                                }
                                else{
                                    $query="SELECT COPI,PaId from patentcopi where PaId=".$row["PaId"]." and COPI=".$_GET["id"].";";
                                    $res=mysqli_query($conn,$query);
                                    $id=mysqli_fetch_assoc($res);
                                    if(mysqli_num_rows($res)==1){
                                        $pi='SELECT `name` from `faculty` where `EID`='.$row["PIid"].';'; 
                                        $name=mysqli_query($conn, $pi);
                                        $piname= mysqli_fetch_assoc($name);
                                        $names=$piname['name'].',';
                                        $query1="SELECT name from faculty inner join patentcopi on faculty.EID=patentcopi.COPI where PaId=".$id["PaId"].";";
                                        $res1=mysqli_query($conn,$query1);
                                        while($row1=mysqli_fetch_assoc($res1)){
                                            $names=$names.$row1['name'].",";
                                        }
                                        echo '<div class="row after"><div class="col-lg-8"><p class="mb-2 mt-2 text-center">'.$row["PTitle"].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($names,0,strlen($names)-1).'</p></div></div>'; 
                                    }
                                }
                            }   
                        }?>
                            <iframe src="printem.php?year=<?php echo $_GET['year'];?>&id=<?php echo $_GET['id'];?>&type=patents" style="display:none;" name="conf2"></iframe>
                                <div class="mt-5 text-center">
                            <button class="btn btn-success" onclick="frames['conf2'].print()">Print the results</button>
                            </div>
                        <?php echo "</div>";
                    }            
        }
        if(isset($_GET['IF'])){
            $obj=new SQL();
            $conn=$obj->SQLi();
            if(!$conn)  die();
            else{ ?>
                    <script>
                        $('.paten').hide();$('.publi').hide();
                        function searchfaculty(){
                            $("#searchIFyear").hide();
                            $("#searchIFfacyr").hide();
                            $('#searchIFfac').css('display','flex');
                            $('#searchIFfac').css('justify-content','center');

                        }
                        function searchyear(){
                            $('#searchIFfac').hide();
                            $("#searchIFfacyr").hide();
                            $("#searchIFyear").css('display','flex');
                            $("#searchIFyear").css('justify-content','center');
                        }
                        function facyear(){
                            $('#searchIFfac').hide();
                            $("#searchIFyear").hide();
                            $("#searchIFfacyr").css('display','flex');
                            $("#searchIFfacyr").css('justify-content','center');
                        }
                    </script>

                    <div class='pagedropdown' style="display:flex;justify-content:center;">
                        <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Search Filters
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style='z-index:1000;'>
                            <a class="dropdown-item" onclick='searchfaculty()'>Search by faculty name</a>
                            <a class="dropdown-item" onclick="searchyear()">Search by Year</a>
                            <a class="dropdown-item" onclick="facyear()">Search by faculty and year</a>
                        </div>
                        </div>
                    </div>
                    <div id='searchIFfac' class='mt-5' style='display:none;'>
                        <form action="./searchpublications.php" method="GET">
                        <div class='row'>
                        <input type="hidden" name='IF' value='<?php echo $_GET['IF'];?>'>
                        <div class='col-lg-3'><label for="facIF">Select Faculty name : </label></div>
                        <div class='col-lg-7'>
                            <select name="facIF" required>
                                <option value="">--Select--</option>
                                <?php 
                                    $querfac='SELECT EID,name,dept,email from faculty';
                                    $res=mysqli_query($conn,$querfac);
                                    if($res){
                                        while($row=mysqli_fetch_assoc($res)){?>
                                                <option value="<?php echo $row['EID'];?>"><?php echo $row['name']."(".$row['dept'].") (".$row['email'].")" ;?></option>
                                       <?php }
                                    }
                                    else{
                                        echo "<script>$('#searchIFfac').css('display','none');</script>";
                                    }
                                ?>
                            </select>
                        </div>
                               <div class='col-lg-2'> <button type='submit' class='ml-4'>Search</button> </div>
                        </div>
                        </form>
                    </div>
                    <div id='searchIFyear' class='mt-5' style='display:none;'>
                        <form action="./searchpublications.php" method="GET">
                        <div class='row'>
                        <input type="hidden" name='IF' value='<?php echo $_GET['IF'];?>'>
                        <div class='col-lg-4'><label for="facIF">Select Year : </label></div>
                        <div class='col-lg-6'>
                            <input type="number" name='yearIF' min='2000' required>
                        </div>
                               <div class='col-lg-2'> <button type='submit' class='ml-4'>Search</button> </div>
                        </div>
                        </form>
                    </div>
                    <div id='searchIFfacyr' class='mt-5' style='display:none;'>
                        <form action="./searchpublications.php" method="GET">
                        <input type="hidden" name='IF' value='<?php echo $_GET['IF'];?>'>
                        <div class='row'>
                        <div class='col-lg-4'><label for="facIF">Select Faculty : </label></div>
                        <div class='col-lg-8'>
                            <select name="facIF" style='width:350px;' required>
                                <option value="">--Select--</option>
                                <?php 
                                    $querfac='SELECT EID,name,dept,email from faculty';
                                    $res=mysqli_query($conn,$querfac);
                                    if($res){
                                        while($row=mysqli_fetch_assoc($res)){?>
                                                <option value="<?php echo $row['EID'];?>"><?php echo $row['name']."(".$row['dept'].") (".$row['email'].")" ;?></option>
                                       <?php }
                                    }
                                    else{
                                        echo "<script>$('#searchIFfac').css('display','none');</script>";
                                    }
                                ?>
                            </select>
                        </div>
                        </div>
                        <div class='row'>
                        <div class='col-lg-4'><label for="yearIF">Select Year : </label></div>
                        <div class='col-lg-8'>
                            <input type="number" name='yearIF' min='2000' style='width:100px;' required>
                        </div>
                        </div>

                        <div class='text-center mt-4'> <button type='submit' class='ml-4'>Search</button> </div>
                        
                        </form>
                    </div>
                
                <?php
                    echo "<script>$('#notfullcontainer').attr('id','fullcontainer');$('h3').text('Impact factor above ".$_GET["IF"]."')</script>";
                    echo "<script>$('h3').css('display','block');$('hr').css('display','block');</script>";
                    echo "<div class='puyearview mt-5'>";
                    echo '<div class="row">';
                    echo '<div class="para col-lg-6">'; 
                    echo '<p class="mb-2 mt-2 text-center text-white">Journal Title</p>';
                    echo '</div>';
                    echo '<div class="para col-lg-1"><p class="mb-2 mt-2 text-center text-white">IF</p></div>';
                    echo '<div class="para col-lg-1"><p class="mb-2 mt-2 text-center text-white">Year</p></div>';
                    echo '<div class="para col-lg-4"><p class="mb-2 mt-2 text-center text-white">Authors</p></div></div>';
                    if(!isset($_GET['facIF'])&&!isset($_GET['yearIF'])){
                    $query="SELECT JID,Paper_Title,Year,IFactor from `journals` where IFactor>=".$_GET["IF"].";";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            echo '<div class="row after"><div class="col-lg-6"><p class="mb-2 mt-2 text-center">'.$row["Paper_Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['IFactor'].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['Year'].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                        }   
                    }
                }
                if(isset($_GET['facIF'])&&!isset($_GET['yearIF'])){
                    $query="SELECT JID,Paper_Title,Year,IFactor from `journals` natural join `faculty` natural join `journalauthor` where EID=".$_GET['facIF']." and IFactor>=".$_GET["IF"].";";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            echo '<div class="row after"><div class="col-lg-6"><p class="mb-2 mt-2 text-center">'.$row["Paper_Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['IFactor'].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['Year'].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                        }   
                    }
                }
                if(isset($_GET['yearIF'])&&!isset($_GET['facIF'])){
                    $query="SELECT JID,Paper_Title,Year,IFactor from `journals` where Year=".$_GET['yearIF']." and IFactor>=".$_GET["IF"].";";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            echo '<div class="row after"><div class="col-lg-6"><p class="mb-2 mt-2 text-center">'.$row["Paper_Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['IFactor'].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['Year'].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                        }   
                    }
                }
                if(isset($_GET['yearIF'])&&isset($_GET['facIF'])){
                    $query="SELECT JID,Paper_Title,Year,IFactor from `journals` natural join `faculty` natural join `journalauthor` where EID=".$_GET['facIF']." and Year=".$_GET['yearIF']." and IFactor>=".$_GET["IF"].";";
                    $res=mysqli_query($conn,$query);
                    if(!$res) echo "<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                    else{
                        while($row=mysqli_fetch_assoc($res)){
                            $query1='SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].';';
                            $str="";
                            $result1 = mysqli_query($conn, $query1);
                            while($row1= mysqli_fetch_assoc($result1)){
                                $str=$str.$row1["name"].",";
                            }
                            echo '<div class="row after"><div class="col-lg-6"><p class="mb-2 mt-2 text-center">'.$row["Paper_Title"].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['IFactor'].'</p></div><div class="col-lg-1"><p class="mb-2 mt-2 text-center">'.$row['Year'].'</p></div><div class="col-lg-4"><p class="mb-2 mt-2 text-center">'.substr($str,0,strlen($str)-1).'</p></div></div>'; 
                        }   
                    }
                }
            }
        }
        ?>
        </div>
    </div></div>
    <div id="patentview">

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



					





                                                    





































