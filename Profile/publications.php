<?php
        require "./testingpdf.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Publications</title>

        <!-- Styles -->    	                    
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <li>Your Publications</li>
	

  </ul>
</nav>








<!-- code start -->


<script type="text/javascript">
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
            window.location.href="./publications.php";
        });
    }
    function deletetem(element,type){
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "block";
        dlg.style.display = "block";

        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        
        dlg.style.left = (winWidth/2) - 480/2 + "px";
        dlg.style.top = "150px";
        $("#hidebox").hide();
        $("#dlg-header-text").text("Deleting a publication");
        $("#dlg-body").html("Are you sure?<br>Press No to cancel the operation !!");
        $("#dlgLogin").text("Yes");
        $("#dlgLogout").text("No");
        $("#dlgLogin").click(function (){
            console.log($(".publication."+type).index($(element.parentElement.parentElement)));
            var id=$(".publication."+type).index($(element.parentElement.parentElement));
            window.location.href=window.location.href+"?deletepublication="+id+"&type="+type;
        });
        $("#dlgLogout").click(function (){
            window.location.href="./publications.php";
        });
    }
    function popedit(strheader,strbody,elementhide,type){
        $("#hidebox").click(function(){
            $("#white-background").hide();
            $("#dlgbox").hide();
            elementhide.checked=false;
            $(".check").removeAttr('disabled');
        });
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "block";
        dlg.style.display = "block";

        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        
        dlg.style.left = (winWidth/2) - 480/2 + "px";
        dlg.style.top = "150px";
        $("#dlg-header-text").text(strheader);
        $("#dlg-body").html(strbody);
        $("#dlgLogin").text("EDIT");
        $("#dlgLogin").click(function(){
            var id=$(".publication."+type).index($(elementhide.parentElement.parentElement));
            window.location.href="./publications.php?editpublication="+id+"&type="+type;
        });
        $("#dlgLogout").text("DELETE");
        $("#dlgLogout").click(function (){
            deletetem(elementhide,type);
        });
    }
        function searchname(ele){   
                    //console.log($(ele).val());
                    if(($(ele).val().length>=1) && ($(ele).val().includes("(") || $(ele).val().includes(")") )){
                        var datalistele= ele.nextElementSibling.children[0].children; 
                        for(var i=0;i<datalistele.length;i++){
                                if($(datalistele[i]).val() == $(ele).val()){
                                    $(ele.nextElementSibling.nextElementSibling).val($(datalistele[i]).attr('data-value'));
                                }
                            }
                    }
                    else{
                        console.log($(ele).attr('name'));
                        if($(ele).attr("name")=="PI1"){
                            $.ajax({
                                url : "./oninputtemp.php?qr="+$(ele).val(),
                                type : "GET",
                                success : function(data){
                                    ele.nextElementSibling.innerHTML=data;
                                    $(ele).attr("list","facultynames");
                                    var datalistele= ele.nextElementSibling.children[0].children; 
                                    $(ele.nextElementSibling.nextElementSibling).val("null");
                                    for(var i=0;i<datalistele.length;i++){
                                        if($(datalistele[i]).val() == $(ele).val()){
                                            $(ele.nextElementSibling.nextElementSibling).val($(datalistele[i]).attr('data-value'));
                                        }
                                    }
                                },error : function(err){
                                    console.log("not working");
                                }
                            })
                        }
                    else{
                        $.ajax({
                        url : "./oninputtemp.php?qrr="+$(ele).val()+"&id="+$(ele).attr('name').slice(4),
                        type : "GET",
                        success : function(data){
                            ele.nextElementSibling.innerHTML=data;
                            $(ele).attr("list","facultynames"+$(ele).attr('name').slice(4));
                            var datalistele= ele.nextElementSibling.children[0].children; 
                            $(ele.nextElementSibling.nextElementSibling).val("null");
                            for(var i=0;i<datalistele.length;i++){
                                if($(datalistele[i]).val() == $(ele).val()){
                                    $(ele.nextElementSibling.nextElementSibling).val($(datalistele[i]).attr('data-value'));
                                }
                            }
                        },error : function(err){
                            console.log("not working");
                        }
                    })
                    }
                } 
            }
    function EDITbutton(element){
        console.log(element);
    }
    function clickingchec(element,type){
        if(element.checked){
            $(".check").attr("disabled",true);
            $(element).removeAttr("disabled");
          //  $(".insertbutton").toggle();
                popedit("Edit or Delete the publication",'Press EDIT button to edit the publications and press DELETE button to delete the publication',element,type);
        }
        else{
            $(".check").removeAttr("disabled");
            $(".insertbutton").show();
            $(".EDbuttons").remove();
        }
    }
    function expandjo(ele){
        $('.excelform').parent().hide();
        $("#expandpu").hide();
        $("#expandjo").show();

    }
    function expandpu(ele){
       $("#expandjo").hide();
       $('.excelform').parent().hide();
        $("#expandpu").toggle();
    }
    function excel(ele,str){
        $("#expandjo").hide();
        if($("#expandpu").css("display")!="none") $("#expandpu").css("display","none");
        $('.excelform').parent().hide();
        if(str=="Journal")  $('#exceljournal').show();
        else $('#excelconference').show();  
    }

    ///////
    function dlgout(){
        $("#white-background").css("display","none");
        $("#dlgbox").css("display","none");
    }
   /* function dlgLogin(ele){
        console.log($("#fullcontainer>div").index($(ele.parentElement.parentElement)));
        window.location.href=window.location.href+"?qc="+($("#fullcontainer>div").index($(ele.parentElement.parentElement))-1);
    }  */      
    /*function DELETEbutton(ele){
        var whitebg = document.getElementById("white-background");
        var dlg = document.getElementById("dlgbox");
        whitebg.style.display = "block";
        dlg.style.display = "block";

        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        
        dlg.style.left = (winWidth/2) - 480/2 + "px";
        dlg.style.top = "150px";
        $("#dlgLogin").click(function(){
            dlgLogin(ele);
        })
    }*/
    function insertC(ele){
        var beforeclone=document.createElement("div");
        $(beforeclone).addClass("row firstblock");
        <?php 
        $content="";
        $obj=new SQL();
        if($obj->SQLi()){
        $res=$obj->query('SELECT `name`,`EID` from faculty');
        while($row=mysqli_fetch_assoc($res)){
            $content=$content.'<option value="'.$row["EID"].'">'.$row["name"].'</option>';
         } 
        }   ?>
        $(beforeclone).html('<div class="col-lg-3"><label for="Link">Author 1 :</label><span style="color:red;">*</span></div><div class="col-lg-auto" style="display: inline-block;"><div style="margin-top: 7.5px;"><select name="Author1"><?php echo $content ?></select></div></div><div style="display : inline-block;"><div style="margin-top: 10px;"><i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertC(this)"></i></div></div>');
        var element = beforeclone;
        //$(element.children[1].children[0].children[1].children[0]).remove();
        //$(element.children[1].children[0].children[0]).val("");
        $(ele.nextElementSibling).remove();
        element.children[2].children[0].innerHTML=element.children[2].children[0].innerHTML+'<i class="fa fa-minus-circle"style="color : red; font-size : 20px;" onclick="deleteC(this)"></i>';
        var str=ele.parentElement.parentElement.previousElementSibling.previousElementSibling.children[0].innerHTML;
        $(element.children[0].children[0]).text("Author "+(parseInt(str.slice(7,str.length-2))+1)+" :");
        $(element.children[1].children[0].children[0]).attr("name","Author"+(parseInt(str.slice(7,str.length-2))+1));
        $(element).insertAfter($(ele.parentElement.parentElement.parentElement));
        $(ele).remove();
    }
    function deleteC(ele){
        if($(ele.parentElement.parentElement.parentElement.previousElementSibling.children[1].children[0].children[0]).attr('name')!='Author1')
            ele.parentElement.parentElement.parentElement.previousElementSibling.children[2].children[0].innerHTML=ele.parentElement.parentElement.parentElement.previousElementSibling.children[2].children[0].innerHTML+'<i class="fa fa-minus-circle"style="color : red; font-size : 20px;" onclick="deleteC(this)"></i>';
        ele.parentElement.parentElement.parentElement.previousElementSibling.children[2].children[0].innerHTML=('<i class="fa fa-plus-circle"style="color : green; font-size : 20px;" onclick="insertC(this)"></i>')+ele.parentElement.parentElement.parentElement.previousElementSibling.children[2].children[0].innerHTML;
        $(ele.parentElement.parentElement.parentElement).remove();
    }
////

</script>

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
.begin>div:hover{
    background-color: whitesmoke;
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

<div class="container">
    <h2 class="" style="text-align:center; margin-top: 0">Publication Details</h2>
    <div class="container mt-5">
        <div class="row begin">
            <div class='col-sm-6 text-center publi' onclick="expandpublic()"> <p>Journal Publications</p></div>
            <div class='col-sm-6 text-center paten' onclick="exapndpate()"> <p>Conference Publications</p></div>
        </div>
    </div>
    <div class="container" id="fullcontainer" style="margin : 0;margin-top : 30px; font-size:18px;">
        <div class="row">
            <div class="para col-lg-1">
            </div>
            <div class="para col-lg-8">
            <p class="mb-2 mt-2 text-center text-white publication type">Journal Publication Title</p>
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
                $cpub=array();
                $quer = "SELECT Title,PID FROM publications WHERE PID in (SELECT PID from pubicationauthor where EID in (SELECT EID from faculty where email='sadagopan@iiitdm.ac.in'))";
                $result = $obj->query($quer);
                if(!$result) echo "<div class='row after publication conference data'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>";
                else{
                    while($row = mysqli_fetch_assoc($result)) {
                        $subq = 'SELECT `name` from `faculty` INNER JOIN `pubicationauthor` on faculty.EID=pubicationauthor.EID WHERE `PID`='.$row["PID"].' and `email`!="sadagopan@iiitdm.ac.in"';
                        $str="";
                        $result1 = mysqli_query($conn, $subq);
                        while($row1= mysqli_fetch_assoc($result1)){
                            $str=$str.$row1["name"].",";
                        }
                        array_push($mainarr,($row["PID"]));
                        array_push($cpub,(int)$row["PID"]);
                        if($str=="") { ?> <div class="row after publication conference data"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this,'conference')" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center"><?php echo $row["Title"]; ?></p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">Fully Contibuted by you</p></div></div>  <?php }
                        else { ?> <div class="row after publication conference data"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this,'conference')" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center"><?php echo $row["Title"]; ?></p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center"><?php echo substr($str,0,strlen($str)-1); ?></p></div></div> <?php }
                    }
                }   
            }?>
            <div class="publication conference data mt-5">
                <div class='text-center mx-auto mb-5'>
                <iframe src="printem.php?type=conference" style="display:none;" name="conf"></iframe>
                <button class="btn btn-success" onclick="frames['conf'].print()">Print Confernce Publications</button>           
                <?php 
                    $obj=new SQL();
                    $conn=$obj->SQLi();
                    if(!$conn)  echo '<script>popupform("An error occured","Please try next time.Sorry for the inconvinience!");</script>';
                    else{
                        $query="SELECT EID from faculty where email='sadagopan@iiitdm.ac.in';";
                        $res=mysqli_query($conn,$query);
                        if(mysqli_num_rows($res)==1){
                        $id=mysqli_fetch_assoc($res)['EID'];?>
                        <iframe src="printem.php?type=conference&id=<?php echo $id?>" style="display:none;" name="confA"></iframe>
                        <button class="btn btn-success" onclick="frames['confA'].print()">Print your Confernce Publications</button>
                        <?php   }
                        else{
                            $id=0;
                        }
                    }
                    ?>
                </div>
            </div>
            <?php $obj=new SQL();
            $conn=$obj->SQLi();
            if(!$conn) die("<div class='row after'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No records found.Post your first entry</p></div></div>");
            else{
                $mainarr=array();
                $jpub=array();
                $quer = "SELECT Paper_Title,JID FROM journals WHERE JID in (SELECT JID from journalauthor where EID in (SELECT EID from faculty where email='sadagopan@iiitdm.ac.in'))";
                $result = $obj->query($quer);
                if(!$result) echo "<div class='row after publication journal data'><div class='col-sm-12'><p class='mb-2 mt-2 text-center'>No recorrds found.Post your first entry</p></div></div>";
                else{
                    while($row = mysqli_fetch_assoc($result)) {
                        $subq = 'SELECT `name` from `faculty` INNER JOIN `journalauthor` on faculty.EID=journalauthor.EID WHERE `JID`='.$row["JID"].' and `email`!="sadagopan@iiitdm.ac.in"';
                        $str="";
                        $result1 = mysqli_query($conn, $subq);
                        while($row1= mysqli_fetch_assoc($result1)){
                            $str=$str.$row1["name"].",";
                        }
                        array_push($mainarr,($row["JID"]));
                        array_push($jpub,(int)$row['JID']);
                        if($str==""){ ?> <div class="row after publication journal data"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this,'journal')" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center"><?php echo $row["Paper_Title"];?></p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center">Fully Contibuted by you</p></div></div>  <?php }
                        else { ?>  <div class="row after publication journal data"><div class="col-lg-1 text-center align-self-center"><input type="checkbox" class="check" onclick="clickingchec(this,'journal')" ></div><div class="col-lg-8"><p class="mb-2 mt-2 text-center"><?php echo $row["Paper_Title"]; ?></p></div><div class="col-lg-3"><p class="mb-2 mt-2 text-center"><?php echo substr($str,0,strlen($str)-1);?></p></div></div> <?php }
                    }
                }
            }
        ?>
        <div class="publication journal data mt-5">
                <div class='text-center mx-auto mb-5'>
                        <iframe src="printem.php?type=journal" style="display:none;" name="jour"></iframe>
                        <button class="btn btn-success" onclick="frames['jour'].print()">Print Journal Publications</button>                    <?php 
                    if($id!=0){ ?>
                        <iframe src="printem.php?type=journal&id=<?php echo $id?>" style="display:none;" name="jourA"></iframe>
                        <button class="btn btn-success" onclick="frames['jourA'].print()">Print your Journal Publications</button>                      <?php  }
                    ?>
                    
                </div>
            </div>
        <script>
            $(".publication.conference").hide();
            $(".publi").css('border-bottom','3px solid green');
            $(".publi").css('background-color','whitesmoke');
            function expandpublic(){
                $(".publi").css('border-bottom','3px solid green');
                $(".paten").css('border-bottom','0px');
                $(".publi").css('background-color','whitesmoke');
                $(".paten").css('background-color','white');
                $(".publication.type").text("Journal Publication Title");
                $(".publication.journal").show();
                $(".publication.conference").hide();
            }
            function exapndpate(){
                $(".paten").css('border-bottom','3px solid green');
                $(".publi").css('border-bottom','0px');
                $(".paten").css('background-color','whitesmoke');
                $(".publi").css('background-color','white');
                $(".publication.type").text("Conference Publication Title");
                $(".publication.journal").hide();
                $(".publication.conference").show();
            }
            function printAll(type){
                var url=window.location.href;
                if(type=='J')    var printWindow=window.open(url.slice(0,27)+"/printem.php?type=journal",'Print','left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
                else var printWindow=window.open(url.slice(0,27)+"/printem.php?type=conference",'Print','left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
                printWindow.addEventListener('load', function(){
                    printWindow.print();
                    setTimeout(function(){
                        printWindow.close();
                    }, 500);
                }, true);

            }
            function print(type,id){
                var url=window.location.href;
                if(type=='J')    var printWindow=window.open(url.slice(0,27)+"/printem.php?type=journal&id="+id,'Print','left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
                else var printWindow=window.open(url.slice(0,27)+"/printem.php?type=conference&id="+id,'Print','left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
                printWindow.addEventListener('load', function(){
                    printWindow.print();
                    setTimeout(function(){
                        printWindow.close();
                    }, 500);
                }, true);
            }
        </script>
    </div>
    <div class="btn-group dropdown mt-5" style="margin-left:50%;">
        <button type="button" class="btn btn-success dropdown-toggle insertb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Insert
        </button>
        <div class="dropdown-menu">
            <li class="dropdown-item" onclick="expandjo(this)">Journal Publication</li>
            <li class="dropdown-item" onclick="expandpu(this)">Conference Publication</li>
            <hr class="my-2">
            <li class="dropdown-item" onclick="excel(this,'Journal')">Upload Journal Excel</li>
            <li class="dropdown-item" onclick="excel(this,'Conference')">Upload Conference Excel</li>
        </div>
    </div>
        <!--<button class="btn btn-success mr-4" style="font-size:16px;" >Insert</button>-->
        <!--<button class="btn btn-success ml-4" onclick='excel(this)' style="font-size : 16px;">Excel</button>-->
    <div id="expandpu" style="display :none;">
        <h3 style="display: inline-block;;">Conference Publication Details</h3>
        <button type="button" class="close mt-5 closebutton" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <script>
            $(".closebutton").click(function(){
                $("#expandpu").hide();
            });
        </script>
        <hr class="mt-2">
        <form action="./publications.php" method="POST">
            <div class="row">
                <div class="col-lg-3">
                <label for="PName">Paper Title : <span style="color : red;">*</span></label>
                </div>
                <div class="col-lg-9">
                <input type="text" name="Title" size='75'>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="ConName">Conference Name :</label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="ConferenceName" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="ConName">Proceedings :</label>
                </div>
                <div class="col-lg-4">
                <textarea name="Proceedings" id="" cols="40" rows="5"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="ISSN">ISSN :</label>
                </div>
                <div class="col-lg-9">
                <input type="number" name="ISSN1"  style="display : inline-block;" min="1000" max="9999">
                <p style="display : inline-block;">-</p>
                <input type="number" name="ISSN2"  style="display : inline-block;" min="1000" max="9999">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Listnames">Author's List :</label>
                <br>
                <span style='color:red;'>Enter names seperated by comma</span>
                </div>
                <div class="col-lg-9">
                <input type="text" name="Listnames" size='50'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-3">
                <label for="Ctype">Conference Type :</label>
                </div>
                <div class="col-lg-2">
                <input type="radio" name="Ctype" value='International'>
                <label for="Ctype">International</label>
                </div>
                <div class='col-lg-2'>
                <input type="radio" name='Ctype' value='National'>
                <label for="Ctype">National</label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="VolumeNo">Volume No :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Vol" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Pages">Pages :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Pages" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Month">Month and Year :</label>
                <span style="color:red;">*</span>
                </div>
                <div class="col-lg-4">
                <input type="month" name="Month" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Open Access :</label>
                </div>
                <div class='col-lg-1'>
                    <input type="radio" name='OA' value='1'>
                    <label for='OA'>Yes</label>
                </div>
                <div class='col-lg-1'>
                    <input type="radio" name='OA' value='0'>
                    <label for="OA">No</label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Indexing :</label>
                </div>
                <?php
                    for($i=0;$i<sizeof($indexing);$i++){?>
                    <div class="col-lg-2">
                        <input type="checkbox" name="<?php echo $indexing[$i];?>" value='1'> 
                       <label for="<?php echo $indexing[$i];?>"><?php echo $indexing[$i];?></label>
                       </div>
                   <?php } 
                ?>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">DOI :</label>
                <span style="color:red;">*</span>
                </div>
                <div class="col-lg-4">
                <input type="text" name="Link" >
                </div>
            </div>
            <div class="row firstblock">
                <div class="col-lg-3">
                <label for="Link">Author 1 :</label>
                <span style="color:red;">*</span>
                </div>
                <div class="col-lg-auto" style="display: inline-block;">
                    <div style="margin-top: 7.5px;">
                        <select name="Author1" id="">
                            <?php 
                              $obj=new SQL();
                              if($obj->SQLi()){
                                $res=$obj->query('SELECT `name`,`EID` from faculty');
                                while($row=mysqli_fetch_assoc($res)){?>
                                    <option value="<?php echo $row["EID"] ?>"><?php echo $row["name"] ?></option>
                                <?php   }  
                              }  
                            ?>
                        </select>
                    </div>
                </div>
                <div style="display : inline-block;">
                        <div style="margin-top: 10px;">
                            <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertC(this)"></i>
                        </div>
                </div>
            </div>
            <div class="text-center mt-4" id="appendbefore">
                <button type="submit" name="ConferencePOST" class="btn btn-success">POST THE DETAILS</button>
            </div>
        </form>
    </div>


    <div id="expandjo" style="display :none;">
        <h3 style="display: inline-block;;">Journal Publication Details</h3>
        <button type="button" class="close mt-5 closebutton" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <script>
            $(".closebutton").click(function(){
                $("#expandjo").hide();
            });
        </script>
        <hr class="mt-2">
        <form action="./publications.php" method="POST">
            <div class="row">
                <div class="col-lg-3">
                <label for="PName">Paper Title : <span style="color : red;">*</span></label>
                </div>
                <div class="col-lg-9">
                <input type="text" name="Title" size="75">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="ConName">Journal Name :</label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="ConferenceName" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="ISSN">ISSN :</label>
                <span style="color:red;">*</span>
                </div>
                <div class="col-lg-9">
                <input type="number" name="ISSN1"  style="display : inline-block;" min="1000" max="9999">
                <p style="display : inline-block;">-</p>
                <input type="number" name="ISSN2"  style="display : inline-block;" min="1000" max="9999">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Listnames">Author's List :</label>
                <br>
                <span style='color:red;'>Enter names seperated by comma</span>
                </div>
                <div class="col-lg-9">
                <input type="text" name="Listnames" size='50'>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-3">
                <label for="VolumeNo">Volume No :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Vol" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Pages">Issue No :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Issue" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Pages">Pages :</label>
                </div>
                <div class="col-lg-4">
                <input type="number" name="Pages" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Month and Year :</label>
                <span style='color:red;'>*</span>
                </div>
                <div class="col-lg-4">
                <input type="month" name="Month" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Impact factor :</label>
                <span style='color:red;'>*</span>
                </div>
                <div class="col-lg-4">
                <input type="number" step='any' name="IF" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Publisher :</label>
                </div>
                <div class="col-lg-9">
                    <select name="publisher" id="publisher">
                        <?php 
                        for($i=0;$i<sizeof($journalpublisher);$i++){
                            echo '<option value="'.$i.'">'.$journalpublisher[$i].'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
           <!-- <div class="row">
                <div class="col-lg-3">
                <label for="Year">Indexing :</label>
                </div>
                <div class="col-lg-9">
                    <select name="indexing" id="indexing">
                    <?php 
                    /*for($i=0;$i<sizeof($indexing);$i++){
                        echo '<option value="'.$i.'">'.$indexing[$i].'</option>';
                    }*/
                    ?>
                    </select>
                </div>
            </div>-->
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Open Access :</label>
                </div>
                <div class='col-lg-1'>
                    <input type="radio" name='OA' value='1'>
                    <label for='OA'>Yes</label>
                </div>
                <div class='col-lg-1'>
                    <input type="radio" name='OA' value='0'>
                    <label for="OA">No</label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Indexing :</label>
                </div>
                <?php
                    for($i=0;$i<sizeof($indexing);$i++){?>
                    <div class="col-lg-2">
                        <input type="checkbox" name="<?php echo $indexing[$i];?>" value='1'> 
                       <label for="<?php echo $indexing[$i];?>"><?php echo $indexing[$i];?></label>
                       </div>
                   <?php } 
                ?>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">DOI   :</label>
                <span style="color:red;">*</span>
                </div>
                <div class="col-lg-4">
                <input type="text" name="Link" required>
                </div>
            </div>
            <div class="row firstblock">
                <div class="col-lg-3">
                <label for="Link">Author 1 :</label>
                <span style="color:red;">*</span>
                </div>
                <div class="col-lg-auto" style="display: inline-block;">
                    <div style="margin-top: 7.5px;">
                        <select name="Author1" id="">
                                <?php 
                                $obj=new SQL();
                                if($obj->SQLi()){
                                    $res=$obj->query('SELECT `name`,`EID` from faculty');
                                    while($row=mysqli_fetch_assoc($res)){?>
                                        <option value="<?php echo $row["EID"] ?>"><?php echo $row["name"] ?></option>
                                    <?php   }  
                                }  
                                ?>
                            </select>
                    </div>
                </div>
                <div style="display : inline-block;">
                        <div style="margin-top: 10px;">
                            <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertC(this)"></i>
                        </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-lg-3">
                        <label for="Link">Other Names:</label>
                        <br>
                        <span style="color:red">(If the respective name is not present in the pull down menu.Add it here where multiple names sholud be seperated by a comma)</span>
                        <br>
                        <span style="color:red">(Example : Dr. Ram,Dr. John)</span>                
                </div>
                <div class="col-lg-4">
                <input type="text" name="Othernames" value="">
                </div>
            </div>-->
            <div class="text-center mt-4" id="appendbefore">
                <button type="submit" name="JournalPOST" class="btn btn-success">POST THE DETAILS</button>
            </div>
        </form>
    </div>


    <div class="text-center" id="exceljournal" style="display: none;">
        <form action="../Profile/publications.php" method="post" enctype="multipart/form-data" class="excelform mt-5">
            <div class='text-center mx-auto'>
                <a href="Journal.xlsx" download class="btn btn-primary">Journal Template Download</a>
            </div>
            <div class='mt-5'>
                <div class="row text-center">
                    <div class="mt-2">
                        <input type="file" name="csvfile" required>
                    </div>
                    <div>
                        <button type="submit" name="uploadexcelJ" class="btn btn-info">Upload CSV</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center" style="color:red;">
             *Make use you try to use the same template as provided in Journal Template.
        </div>
    </div>
    <div class="text-center" id="excelconference" style="display: none;">
        <form action="../Profile/publications.php" method="post" enctype="multipart/form-data" class="excelform mt-5">
            <div class='text-center mx-auto'>
                <a href="Conference.xlsx" download class="btn btn-primary">Conference Template Download</a>
            </div>
            <div class='mt-5'>
                <div class="row text-center">
                    <div class="mt-2">
                        <input type="file" name="csvfile" required>
                    </div>
                    <div>
                        <button type="submit" name="uploadexcelC" class="btn btn-info">Upload CSV</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center" style="color:red;">
             *Make use you try to use the same template as provided in Conference Template.
        </div>
    </div>

</div>

<?php
    if(isset($_POST["ConferencePOST"])){
        $obj=new SQL();
        $conn=$obj->SQLi();
        if(!$conn)  echo '<script>popupform("Your Conference Publication is not posted","There an internal issue in the server.Sorry for the inconvinience!");</script>';
        else{
            $check=0;
            $str=strtolower($_POST["Title"]);
            $quer='SELECT PID,Title,ISSN from `publications`;';
            $res=mysqli_query($conn,$quer);
            while($row=mysqli_fetch_assoc($res)){
                $title=strtolower($row["Title"]);
                similar_text($title,$str,$per);
                if(($per<=100 && $per>=95)||(($_POST["ISSN1"].$_POST["ISSN2"])==$row['ISSN'])){
                    $check=1;
                    echo "<script>popupform('Your Conference publication is not posted','There is already a Conference publication under this TITLE')</script>";
                    break;
                }
            }
            if($check==0){
                require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';
                $fileselect = PHPExcel_IOFactory::identify("Conference.xlsx");
                $excelreader = PHPExcel_IOFactory::createReader($fileselect);
                $excel = $excelreader->load("Conference.xlsx");
                $i=1;
                $noofauth=0;
                while(isset($_POST["Author".$i])){
                    $noofauth++;
                    $i++;
                }
                $new_str = str_replace(' ', '',$_POST["Listnames"]);
                $my=explode('-',$_POST["Month"]);
                $index=$_POST["OA"];
                $indexstr="OpenAccess";
                for($j=0;$j<sizeof($indexing);$j++){
                    $indexstr=$indexstr.",".str_replace(" ","_",str_replace("-",'_',$indexing[$j]));
                    if(isset($_POST[str_replace(" ",'_',$indexing[$j])])){
                        $index=$index.",1";
                    }
                    else{
                        $index=$index.",0";
                    }
                }
                $quer='INSERT INTO `publications`(Title,ConferenceName,Vol,Pages,type,Year,month,'.$indexstr.',No_of_Auth,ISSN,Proceedings,AuthorList,DOI) values("'.$_POST["Title"].'","'.$_POST["ConferenceName"].'",'.$_POST["Vol"].','.$_POST["Pages"].',"'.$_POST["Ctype"].'",'.$my[0].','.$my[1].','.$index.','.$noofauth.',"'.(($_POST["ISSN1"].$_POST["ISSN2"])).'","'.$_POST["Proceedings"].'","'.$new_str.'","'.$_POST['Link'].'");';
                if(mysqli_query($conn,$quer)){
                    $rowcount=mysqli_fetch_array(mysqli_query($conn,'SELECT MAX(PID) as max FROM `publications`;'));
                    $j=1;
                    while(isset($_POST["Author".$j])){
                        if(mysqli_query($conn,'INSERT into `pubicationauthor`(PID,EID) values('.$rowcount["max"].','.$_POST["Author".$j].')')){
                            $j++;
                        }
                        else{
                            break;
                        }
                    }
                    if($j-1==$noofauth) { 
                        $loop=1;
                        $fmail='';
                        while(isset($_POST['Author'.$loop])){
                            $quer='SELECT email from faculty where EID='.$_POST["Author".$loop].';';
                            $res=mysqli_query($conn,$quer);
                            if(mysqli_num_rows($res)==1){
                                $row=mysqli_fetch_assoc($res);
                                $fmail=$fmail.$row['email'].',';
                            }
                            $loop++;
                        }
                        $fmail=substr($fmail,0,strlen($fmail)-1);
                        //$attr=array("Title","Conference Name","Proceedings","ISSN","Volume No.","Pages","Year","Month","Conference Type(National or International)","Author List(Names of People who are not part of IIITDM)","DOI","IIITDM Author's Email Addresses seperated by comma","Open Access(type 1 if Yes or else 0)","SCI(type 1 if Yes or else 0)","Non-SCI(type 1 if Yes or else 0)","Scopus(type 1 if Yes or else 0)","Google Scholar(type 1 if Yes or else 0)");
                        $norows=$excel->setActiveSheetIndex(0)->getHighestRow()+1;
                        $insertarray=array($_POST['Title'],$_POST["ConferenceName"],$_POST['Proceedings'],(($_POST["ISSN1"].$_POST["ISSN2"])),$_POST['Vol'],$_POST['Pages'],$my[0],$my[1],$_POST['Ctype'],$new_str,$_POST['Link'],$fmail,$_POST['OA']);
                        for($j=0;$j<sizeof($indexing);$j++){
                            if(isset($_POST[str_replace(" ",'_',$indexing[$j])])){
                                array_push($insertarray,1);
                            }
                            else{
                                array_push($insertarray,0);
                
                            }
                        }
                        $j=0;
                        foreach(range('A','Q') as $b){
                            $excel->getActiveSheet()->setCellValue($b.(string)$norows,$insertarray[$j]);
                            $j++;
                        }
                        $objWriter = PHPExcel_IOFactory::createWriter($excel,'Excel5');
                        $objWriter->save("Conference.xlsx");
                        echo "<script>popupform('Success','Your Conference Publication has been posted');</script>"; 
                    }
                    else echo "<script>popupform('Publication not posted','Server Error.Sorry for the inconvinience!')</script>"; 
                }
                else{
                     echo "<script>popupform('Insert Publication not posted','Server Error.Sorry for the inconvinience!');console.log('".mysqli_error($conn)."');</script>"; 
                }
            }
        }
    }
    if(isset($_POST["JournalPOST"])){
       $obj=new SQL();
        $conn=$obj->SQLi();
        if(!$conn)  echo '<script>popupform("Your Publication is not posted","There an internal issue in the server.Sorry for the inconvinience!");</script>';
        else{
            $check=0;
            $str=strtolower($_POST["Title"]);
            $quer='SELECT JID,Paper_Title,ISSN from `journals`;';
            $res=mysqli_query($conn,$quer);
            while($row=mysqli_fetch_assoc($res)){
                $title=strtolower($row["Paper_Title"]);
                similar_text($title,$str,$per);
                if(($per<=100 && $per>=95)||(($_POST["ISSN1"].$_POST["ISSN2"])==$row['ISSN'])){
                    $check=1;
                    echo "<script>popupform('Your Publication is not posted','There is already a publication under this TITLE or ISSN')</script>";
                    break;
                }
            }
            if($check==0){
                $fileselect = PHPExcel_IOFactory::identify("Journal.xlsx");
                $excelreader = PHPExcel_IOFactory::createReader($fileselect);
                $excel = $excelreader->load("Journal.xlsx");
                $i=1;
                $noofauth=0;
                while(isset($_POST["Author".$i])){
                    $noofauth++;
                    $i++;
                }
                $new_str = str_replace(' ', '',$_POST["Listnames"]);
                $my=explode('-',$_POST["Month"]);
                $index=$_POST["OA"];
                $indexstr="OpenAccess";
                for($j=0;$j<sizeof($indexing);$j++){
                    $indexstr=$indexstr.",".str_replace(" ","_",str_replace("-",'_',$indexing[$j]));
                    if(isset($_POST[str_replace(" ",'_',$indexing[$j])])){
                        $index=$index.",1";
                    }
                    else{
                        $index=$index.",0";
                    }
                }
                $quer='INSERT INTO `journals`(Paper_Title,Journal,VolNo,Issue,Pages,Year,month,Publisher,'.$indexstr.',No_of_Auth,ISSN,DOI,AuthorList,IFactor) values("'.$_POST["Title"].'","'.$_POST["ConferenceName"].'",'.$_POST["Vol"].','.$_POST["Issue"].','.$_POST["Pages"].','.$my[0].','.$my[1].',"'.$journalpublisher[(int)$_POST["publisher"]].'",'.$index.','.$noofauth.',"'.(($_POST["ISSN1"].$_POST["ISSN2"])).'","'.$_POST["Link"].'","'.$new_str.'",'.$_POST['IF'].');';
                if(mysqli_query($conn,$quer)){
                    $rowcount=mysqli_fetch_array(mysqli_query($conn,'SELECT MAX(JID) as max FROM `journals`;'));                    $j=1;
                    while(isset($_POST["Author".$j])){
                        if(mysqli_query($conn,'INSERT into `journalauthor`(JID,EID) values('.$rowcount["max"].','.$_POST["Author".$j].')')){
                            $j++;
                        }
                        else{
                            break;
                        }
                    }
                    if($j-1==$noofauth){
                        $loop=1;
                        $fmail='';
                        while(isset($_POST['Author'.$loop])){
                            $quer='SELECT email from faculty where EID='.$_POST["Author".$loop].';';
                            $res=mysqli_query($conn,$quer);
                            if(mysqli_num_rows($res)==1){
                                $row=mysqli_fetch_assoc($res);
                                $fmail=$fmail.$row['email'].',';
                            }
                            $loop++;
                        }
                        $fmail=substr($fmail,0,strlen($fmail)-1);
                        //        $attr=array("Title","Journal Name","ISSN","Volume No.","Issue No.","Pages","Year","Month",'Impact Factor',"Publisher(Springer,Elsevier etc.)","Author List(Names of People who are not part of IIITDM)","DOI","IIITDM Author's Email Addresses seperated by comma","Open Access(type 1 if Yes or else 0)","SCI(type 1 if Yes or else 0)","Non-SCI(type 1 if Yes or else 0)","Scopus(type 1 if Yes or else 0)","Google Scholar(type 1 if Yes or else 0)");
                        $norows=$excel->setActiveSheetIndex(0)->getHighestRow()+1;
                        $insertarray=array($_POST['Title'],$_POST["ConferenceName"],(($_POST["ISSN1"].$_POST["ISSN2"])),$_POST['Vol'],$_POST['Issue'],$_POST['Pages'],$my[0],$my[1],$_POST['IF'],$_POST['publisher'],$new_str,$_POST['Link'],$fmail,$_POST['OA']);
                        for($j=0;$j<sizeof($indexing);$j++){
                            if(isset($_POST[str_replace(" ",'_',$indexing[$j])])){
                                array_push($insertarray,1);
                            }
                            else{
                                array_push($insertarray,0);
                
                            }
                        }
                        $j=0;
                        foreach(range('A','R') as $b){
                            $excel->getActiveSheet()->setCellValue($b.(string)$norows,$insertarray[$j]);
                            $j++;
                        }
                        $objWriter = PHPExcel_IOFactory::createWriter($excel,'Excel5');
                        $objWriter->save("Journal.xlsx");
                        echo "<script>popupform('Success','Your Journal Publication has been posted')</script>"; 
                    }
                    else echo "<script>popupform('Publication not posted','Server Error.Sorry for the inconvinience!')</script>"; 
                }
                else{
                     echo "<script>popupform('Insert Publication not posted','Server Error.Sorry for the inconvinience!');</script>"; 
                }
            }
        }
        /*$index=$_POST["OA"];
                $indexstr="OpenAccess";
                for($j=0;$j<sizeof($indexing);$j++){
                    $indexstr=$indexstr.",".str_replace(" ","_",str_replace("-",'_',$indexing[$j]));
                    if(isset($_POST[str_replace(" ",'_',$indexing[$j])])){
                        $index=$index.",1";
                    }
                    else{
                        $index=$index.",0";
                    }
                }
                echo $index."<br>".$indexstr."<br>";
        var_dump($_POST);*/
    }
    if(isset($_POST["uploadexcelJ"])){
        $target_dir = 'uploads/';
        $imageFileType = pathinfo(basename($_FILES["csvfile"]["name"]),PATHINFO_EXTENSION);
        $target_file = $target_dir ."sadagopan@iiitdm.ac.in-".date("Y-m-d").".".$imageFileType;
        $arr = array("xlsx","xlsm","csv");
         if(!in_array($imageFileType,$arr)){
             echo "<script>popupform('Excel not posted','Excel is not in xlsx or xlsm or csv format');</script>";
         }
         else{
         move_uploaded_file($_FILES["csvfile"]["tmp_name"], $target_file);
         require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';
         $inputFileType = PHPExcel_IOFactory::identify($target_file);
         $objReader = PHPExcel_IOFactory::createReader($inputFileType);
         $objPHPExcel = $objReader->load($target_file);

         $fileselect = PHPExcel_IOFactory::identify("Journal.xlsx");
         $excelreader = PHPExcel_IOFactory::createReader($fileselect);
         $excel = $excelreader->load("Journal.xlsx");


         $i=2;
         $strname="";
         $servername = 'localhost';
         $username = 'root';
         $dbname = 'internship';
         $errorlog="";
         $conn=mysqli_connect($servername, $username,'', $dbname);
         if(!$conn) die();
         else{
        
        $attr=array("Title","Journal Name","ISSN","Volume No.","Issue No.","Pages","Year","Month",'Impact Factor',"Publisher(Springer,Elsevier etc.)","Author List(Names of People who are not part of IIITDM)","DOI","IIITDM Author's Email Addresses seperated by comma","Open Access(type 1 if Yes or else 0)","SCI(type 1 if Yes or else 0)","Non-SCI(type 1 if Yes or else 0)","Scopus(type 1 if Yes or else 0)","Google Scholar(type 1 if Yes or else 0)");
        $char='A';
        for($k=0;$k<sizeof($attr);$k++){
            if($attr[$k]!=$objPHPExcel->getActiveSheet()->getCell($char.(int)1)->getValue()){
                echo "<script>popupform('File not in desired format','Make sure the the file follow the journal template');</script>";
                die();
            }
            $char++;
        }
        while($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue()!=''){
             $title=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue();
             $journalname=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
             $ISSN=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
             $vol=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
             $issue=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getValue();
             $pages=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getValue();
             $year=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getValue();
             $month=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getValue();
             $impactfactor=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getValue();
             $publisher=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getValue();
             $authorlist=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getValue();
             $doi=$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getValue();

             $authormail=$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getValue();
             $openaccess=$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getValue();
             $sci=$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getValue();
             $nsci=$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getValue();
             $scopus=$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getValue();
             $gscholar=$objPHPExcel->getActiveSheet()->getCell('R'.$i)->getValue();

             $regex = '/^[a-z0-9]+@(iiitdm.ac.in)$/';
             $contents = str_replace(' ', '', $authorlist);
             $new_str = str_replace(' ', '', $authormail);
             $marray=explode(",",$new_str);

             $check=0;
             $str=strtolower($title);
             $quer='SELECT JID,Paper_Title,ISSN from `journals`;';
             $res=mysqli_query($conn,$quer);
             while($row=mysqli_fetch_assoc($res)){
                 $comp=strtolower($row["Paper_Title"]);
                 similar_text($comp,$str,$per);
                 if(($per<=100 && $per>=95)||($row['ISSN']==$ISSN)){
                     $check=1;
                     $errorlog=$errorlog."At row ".(string)($i)." of the excel an identical journal with same Title or ISSN is present.<br>";
                     break;
                 }
             }
             for($z=0;$z<sizeof($marray);$z++){
                if(!preg_match($regex, $marray[$z])) {
                    $check=1;
                    $errorlog=$errorlog."At row ".(string)($i)." of the excel the Author email field type is not of @iiitdm.ac.in<br>";
                    break;
                }
             }  
             if($check==0){
                    $norows=$excel->setActiveSheetIndex(0)->getHighestRow()+1;
                    foreach(range('A','R') as $b){
                        $excel->getActiveSheet()->setCellValue($b.(string)$norows,$objPHPExcel->getActiveSheet()->getCell($b.$i)->getValue());
                    }

                    $objWriter = PHPExcel_IOFactory::createWriter($excel,'Excel5');
                    $objWriter->save("Journal.xlsx");
                    $str='"'.$title.'","'.$journalname.'","'.$ISSN.'",'.$vol.','.$issue.','.$pages.','.$year.','.$month.',"'.$publisher.'","'.$doi.'",'.sizeof($marray).',"'.$contents.'",'.$openaccess.','.$sci.','.$nsci.','.$scopus.','.$gscholar.','.$impactfactor;
                    $query1="INSERT INTO journals (Paper_Title,Journal,ISSN,VolNo,Issue,Pages,Year,month,Publisher,DOI,No_of_Auth,AuthorList,OpenAccess,SCI,Non_SCI,Scopus,Google_Scholar,IFactor) values(".$str.")";
                    if(mysqli_query($conn,$query1)){
                        //successfully inserted
                        $querr='SELECT MAX(JID) as jid from journals;';
                        $res=mysqli_query($conn,$querr);
                        $jid=0;
                        while($row=mysqli_fetch_assoc($res)){ $jid=$row["jid"]; }
                        for($j=0;$j<sizeof($marray);$j++){
                            $query3 = 'SELECT EID from `faculty` where email="'.$marray[$j].'";';
                            $res=mysqli_query($conn,$query3);
                            $temp=0;
                            while($row=mysqli_fetch_assoc($res)){ $temp=$row["EID"]; }
                            $query2= "INSERT INTO journalauthor (JID,EID) values(".$jid.",".$temp.")";
                            if(mysqli_query($conn,$query2)){
                                // succesfully inserted in publicationauthor table
                            }
                            else{
                                echo "<script>alert('Error in posting data.Please Try again');</script>";
                            }
                        }
                    }
                    else{
                        echo "<script>alert('Error in inserting data.Please Try again');</script>";
                    }
                }
                  $i++;  
                }
                if($errorlog==""){
                    echo "<script>window.location.href+='?reload=true';</script>";
                }
                else{
                    echo "<script>popupform('Upload logs','".$errorlog." Remaining all rows are posted.');</script>";
                }
             }
         }
     }
     if(isset($_GET["reload"])){
         if($_GET["reload"]=='true'){
             echo "<script>window.location.href='./publications.php';</script>";
         }
     }
     if(isset($_POST["uploadexcelC"])){
        $target_dir = 'uploads/';
        $imageFileType = pathinfo(basename($_FILES["csvfile"]["name"]),PATHINFO_EXTENSION);
        $target_file = $target_dir ."sadagopan@iiitdm.ac.in-".date("Y-m-d").".".$imageFileType;
        $arr = array("xlsx","xlsm","csv");
         if(!in_array($imageFileType,$arr)){
             echo "<script>alert('Not in xlsx or xlsm or csv format');</script>";
         }
        else{
        move_uploaded_file($_FILES["csvfile"]["tmp_name"], $target_file);
        require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';
        $inputFileType = PHPExcel_IOFactory::identify($target_file);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($target_file);

        $fileselect = PHPExcel_IOFactory::identify("Conference.xlsx");
        $excelreader = PHPExcel_IOFactory::createReader($fileselect);
        $excel = $excelreader->load("Conference.xlsx");

        $i=2;
        $strname="";
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $errorlog="";
        $conn=mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
       $attr=array("Title","Conference Name","Proceedings","ISSN","Volume No.","Pages","Year","Month","Conference Type(National or International)","Author List(Names of People who are not part of IIITDM)","DOI","IIITDM Author's Email Addresses seperated by comma","Open Access(type 1 if Yes or else 0)","SCI(type 1 if Yes or else 0)","Non-SCI(type 1 if Yes or else 0)","Scopus(type 1 if Yes or else 0)","Google Scholar(type 1 if Yes or else 0)");
       $char='A';
       for($k=0;$k<sizeof($attr);$k++){
           if($attr[$k]!=$objPHPExcel->getActiveSheet()->getCell($char.(int)1)->getValue()){
               echo "<script>popupform('File not in desired format','Make sure the file follow the Conference template');</script>";
               die();
           }
           $char++;
       }
       while($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue()!=''){
            $title=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue();
            $confname=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
            $proceedings=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
            $ISSN=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
            $vol=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getValue();
            $pages=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getValue();
            $year=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getValue();
            $month=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getValue();
            $ctype=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getValue();
            $othernames=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getValue();
            $doi=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getValue();
            $authormail=$objPHPExcel->getActiveSheet()->getCell('L'.$i)->getValue();
            $openaccess=$objPHPExcel->getActiveSheet()->getCell('M'.$i)->getValue();
            $sci=$objPHPExcel->getActiveSheet()->getCell('N'.$i)->getValue();
            $nsci=$objPHPExcel->getActiveSheet()->getCell('O'.$i)->getValue();
            $scopus=$objPHPExcel->getActiveSheet()->getCell('P'.$i)->getValue();
            $gscholar=$objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getValue();

            $contents = str_replace(' ', '', $othernames);
            $new_str = str_replace(' ', '', $authormail);
            $marray=explode(",",$new_str);
            $regex = '/^[a-z0-9]+@(iiitdm.ac.in)$/';
            $check=0;
            $str=strtolower($title);
            $quer='SELECT PID,Title,ISSN from `publications`;';
            $res=mysqli_query($conn,$quer);
            while($row=mysqli_fetch_assoc($res)){
                $comp=strtolower($row["Title"]);
                similar_text($comp,$str,$per);
                if(($per<=100 && $per>=95)||($row['ISSN']==$ISSN)){
                    $check=1;
                    $errorlog=$errorlog."At row ".(string)($i)." of the excel identical conference with same Title of ISSN is present.<br>";
                    break;
                }
            }
            for($z=0;$z<sizeof($marray);$z++){
                if(!preg_match($regex, $marray[$z])) {
                    $check=1;
                    $errorlog=$errorlog."At row ".(string)($i)." of the excel the Author email field type is not of @iiitdm.ac.in<br>";
                    break;
                }
            } 
            if($check==0){
                    $norows=$excel->setActiveSheetIndex(0)->getHighestRow()+1;
                    foreach(range('A','Q') as $b){
                        $excel->getActiveSheet()->setCellValue($b.(string)$norows,$objPHPExcel->getActiveSheet()->getCell($b.$i)->getValue());
                    }
                    $objWriter = PHPExcel_IOFactory::createWriter($excel,'Excel5');
                    $objWriter->save("Conference.xlsx");
                   $str='"'.$title.'","'.$confname.'","'.$ISSN.'",'.$vol.','.$pages.','.$year.','.$month.',"'.$proceedings.'","'.$ctype.'","'.$doi.'",'.sizeof($marray).',"'.$contents.'",'.$openaccess.','.$sci.','.$nsci.','.$scopus.','.$gscholar;
                   
                   $query1="INSERT INTO publications (Title,ConferenceName,ISSN,Vol,Pages,Year,month,Proceedings,type,DOI,No_of_Auth,AuthorList,OpenAccess,SCI,Non_SCI,Scopus,Google_Scholar) values(".$str.")";
                   if(mysqli_query($conn,$query1)){
                       //successfully inserted
                       $querr='SELECT MAX(PID) as pid from publications;';
                       $res=mysqli_query($conn,$querr);
                       $pid=0;
                       while($row=mysqli_fetch_assoc($res)){ $pid=$row["pid"]; }
                       for($j=0;$j<sizeof($marray);$j++){
                           $query3 = 'SELECT EID from `faculty` where email="'.$marray[$j].'";';
                           $res=mysqli_query($conn,$query3);
                           $temp=0;
                           while($row=mysqli_fetch_assoc($res)){ $temp=$row["EID"]; }
                           $query2= "INSERT INTO pubicationauthor (PID,EID) values(".$pid.",".$temp.")";
                           if(mysqli_query($conn,$query2)){
                               // succesfully inserted in publicationauthor table
                           }
                           else{
                               echo "<script>alert('Error in posting data.Please Try again');</script>";
                           }
                       }
                   }
                   else{
                       echo "<script>alert('Error in inserting data.Please Try again');</script>";
                   }
               }
                 $i++;  
               }
               if($errorlog==""){
                   echo "<script>window.location.href+='?reload=true';</script>";
               }
               else{
                   echo "<script>popupform('Upload logs','".$errorlog." Remaining all rows are posted.');</script>";
               }
            }
        }
     }

    if(isset($_GET["deletepublication"])&&isset($_GET['type'])){
        $obj=new SQL();
        $conn=$obj->SQLi();
        if(!$conn) die();
        else{
            if($_GET['type']=='conference'){
                $query="DELETE FROM `pubicationauthor` where PID=".$cpub[(int)$_GET["deletepublication"]].";";
                if(mysqli_query($conn,$query)){
                    $queryy="DELETE FROM `publications` WHERE PID=".$cpub[(int)$_GET["deletepublication"]].";";
                    if(mysqli_query($conn,$queryy)){
                        //deleted query
                        echo "<script>window.location.href='./publications.php';</script>";
                    }
                }
            }
            if($_GET['type']=='journal'){
                $query="DELETE FROM `journalauthor` where JID=".$jpub[(int)$_GET["deletepublication"]].";";
                if(mysqli_query($conn,$query)){
                    $queryy="DELETE FROM `journals` WHERE JID=".$jpub[(int)$_GET["deletepublication"]].";";
                    if(mysqli_query($conn,$queryy)){
                        //deleted query
                        echo "<script>window.location.href='./publications.php';</script>";
                    }
                }
            }
        }
    }
    include "./editpublicationmodule.php";

?>
<!-- code end -->                        
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


					





                                                    





































