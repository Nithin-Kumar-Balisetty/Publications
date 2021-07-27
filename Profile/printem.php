<?php
        require "./testingpdf.php";

        // email Google session should be added here. For testing take an static email
        $email='sadagopan@iiitdm.ac.in';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
@page{
    size: 6in 9in;
    margin-bottom: 0.1in;
    margin-top: 0.1in;
}
@page dis{
    display: inline-block;
}

</style>
<body> 
<script src="print.js"></script>
<link rel="stylesheet" type="text/css" href="print.css">


    <style>
    *{
        margin : 5px;       
    }
        img{
            width: 100%;
            height: 150px;
        }
    @page{
        size:A4;
    }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 2px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        #tabledata{
            margin-right: 20px;
        }
    @media print{
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            margin : 5px;
            }
        body{
            margin : 0;
            padding: 0;
            border: 0;
            margin-top:15px; 
        }
        img{
            width: 100%;
            height: 150px;
        }
        hr {
            display: block;
            height: 2px;
            background: transparent;
            width: 100%;
            border: none;
            border-top: solid 1px #aaa;
        }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 2px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even) {
        background-color: #dddddd;
        }   
        #tabledata{
            margin: 0px 15px 5px 15px;
        }
    }
    </style>
    <div id="final">
            <div class="row1">
                <div class="dis">
                    <img src="./mainlogo.png">
                </div>
            </div>
            <hr>
            <div id="tabledata">
                <table>
                    
                <?php
                    $obj=new SQL();
                    $conn=$obj->SQLi();
                    if(!$conn) die();
                    else{
                        if(isset($_GET["type"])&& !isset($_GET["id"])){
                            if($_GET["type"]=="conference"){?>
                            <tr>
                                <th>Title of Conference</th>
                                <th>Conference Name</th>
                                <th>Year</th>
                                <th>Authors</th>
                            <tr>
                            <?php $query="SELECT PID,Title,ConferenceName,Year,AuthorList from publications;";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from pubicationauthor natural join faculty where PID=".$row["PID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $names=$names.$row["AuthorList"];
                                    echo "<tr>";
                                    echo "<th>".$row["Title"]."</th>";
                                    echo "<th>".$row["ConferenceName"]."</th>";
                                    echo "<th>".$row["Year"]."</th>";
                                    echo "<th>".$names."</th>";
                                    echo "<tr>";
                                }
                            }
                            else{

                            }
                        }
                        if($_GET["type"]=="journal"){?>
                            <tr>
                                <th>Title of Journal</th>
                                <th>Journal Name</th>
                                <th>Year</th>
                                <th>Authors</th>
                            <tr>
                        <?php $query="SELECT JID,Paper_Title,Journal,Year,AuthorList from journals;";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from journalauthor natural join faculty where JID=".$row["JID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $names=$names.$row["AuthorList"];
                                    echo "<tr>";
                                    echo "<th>".$row["Paper_Title"]."</th>";
                                    echo "<th>".$row["Journal"]."</th>";
                                    echo "<th>".$row["Year"]."</th>";
                                    echo "<th>".$names."</th>";
                                    echo "<tr>";
                                }
                            }
                            else{

                            }
                         }
                    }
                    if(isset($_GET["type"])&& isset($_GET["id"])){
                        if($_GET["type"]=="conference"){?>
                            <tr>
                                <th>Title of Conference</th>
                                <th>Conference Name</th>
                                <th>Year</th>
                                <th>Authors</th>
                            <tr>
                            <?php $query="SELECT PID,Title,ConferenceName,Year,AuthorList from publications natural join pubicationauthor where EID=".$_GET['id'].";";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from pubicationauthor natural join faculty where PID=".$row["PID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $names=$names.$row["AuthorList"];
                                    echo "<tr>";
                                    echo "<th>".$row["Title"]."</th>";
                                    echo "<th>".$row["ConferenceName"]."</th>";
                                    echo "<th>".$row["Year"]."</th>";
                                    echo "<th>".$names."</th>";
                                    echo "<tr>";
                                }
                            }
                            else{

                            }
                        }
                        if($_GET["type"]=="journal"){?>
                            <tr>
                                <th>Title of Journal</th>
                                <th>Journal Name</th>
                                <th>Year</th>
                                <th>Authors</th>
                            <tr>
                        <?php $query="SELECT JID,Paper_Title,Journal,Year,AuthorList from journals natural join journalauthor where EID=".$_GET['id'].";";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from journalauthor natural join faculty where JID=".$row["JID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $names=$names.$row["AuthorList"];
                                    echo "<tr>";
                                    echo "<th>".$row["Paper_Title"]."</th>";
                                    echo "<th>".$row["Journal"]."</th>";
                                    echo "<th>".$row["Year"]."</th>";
                                    echo "<th>".$names."</th>";
                                    echo "<tr>";
                                }
                            }
                            else{

                            }
                         }
                    }
                    if(isset($_GET["searchfac"])&&isset($_GET["id"])){
                        if($_GET["type"]=='publications'){?>
                            <tr>
                                <th>Publication Title</th>
                                <th>Type</th>
                                <th>Year</th>
                                <th>Contributed with</th>
                            <tr>
                        <?php
                             
                            $query1="SELECT name from `faculty` where EID=".$_GET['id'].";";
                            $name1 = mysqli_query($conn, $query1);
                            $name = mysqli_fetch_array($name1); 
                            $mainarr=array();
                            $quer = "SELECT Title,PID,Year FROM publications WHERE PID in (SELECT PID from pubicationauthor where EID=".$_GET["id"].");";
                            $result = mysqli_query($conn, $quer);
                            if(!$result) echo "";
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
                                    <tr>
                                        <th><?php echo $row["Title"]?></th>
                                        <th>Conference</th>
                                        <th><?php echo $row["Year"]?></th>
                                        <th>Fully Contributed by you</th>
                                    </tr>
                            <?php } 
                                    else {?>
                                        <tr>
                                            <th><?php echo $row["Title"]?></th>
                                            <th>Conference</th>
                                            <th><?php echo $row["Year"]?></th>
                                            <th><?php echo substr($str,0,strlen($str)-1) ?></th>
                                        </tr>
                                    <?php }
                                }
                            }
                        
                            $quer = "SELECT Paper_Title,JID,Year FROM journals WHERE JID in (SELECT JID from journalauthor where EID=".$_GET["id"].");";
                            $result = mysqli_query($conn, $quer);
                            if(!$result) echo "";
                            else{
                                while($row = mysqli_fetch_assoc($result)) {
                                    $subq = 'SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].' and EID!='.$_GET["id"].';';
                                    $str="";
                                    $result1 = mysqli_query($conn, $subq);
                                    while($row1= mysqli_fetch_assoc($result1)){
                                        $str=$str.$row1["name"].",";
                                    }
                                    if($str=="") { ?>
                                    <tr>
                                        <th><?php echo $row["Paper_Title"]?></th>
                                        <th>Journal</th>
                                        <th><?php echo $row["Year"]?></th>
                                        <th>Fully Contributed by you</th>
                                    </tr>
                                    <?php } 
                                    else {?>
                                        <tr>
                                            <th><?php echo $row["Paper_Title"]?></th>
                                            <th>Journal</th>
                                            <th><?php echo $row["Year"]?></th>
                                            <th><?php echo substr($str,0,strlen($str)-1) ?></th>
                                        </tr>
                                    <?php }
                                }
                            }
                        }
                        if($_GET['type']=='patents'){?>
                                    <tr>
                                        <th>Patent Title</th>
                                        <th>Year</th>
                                        <th>Role</th>
                                    </tr>

                            <?php $query1="SELECT name from `faculty` where EID=".$_GET['id'].";";
                            $name1 = mysqli_query($conn, $query1);
                            $name = mysqli_fetch_array($name1);
                            $quer = "SELECT PTitle,PaId,Year FROM patents WHERE PIid=".$_GET["id"].";";
                            $result = mysqli_query($conn, $quer);
                            if(!$result) echo "";
                            else{
                                while($row = mysqli_fetch_assoc($result)) {?>
                                    <tr>
                                        <th><?php echo $row["PTitle"];?></th>
                                        <th><?php echo $row['Year'];?></th>
                                        <th>Principal Investigator</th>
                                    </tr>
                               <?php }
                            }
                            $quer1 = "SELECT PTitle,PaId,Year FROM patents WHERE PaId in (Select PaId from `patentcopi` where COPI=".$_GET["id"].");";
                            $result1 = mysqli_query($conn, $quer1);
                            if(!$result1) die();
                            else{
                                while($row = mysqli_fetch_assoc($result1)) { ?>
                                    <tr>
                                        <th><?php echo $row["PTitle"];?></th>
                                        <th><?php echo $row['Year'];?></th>
                                        <th>Co-Principal Investigator</th>
                                    </tr>
                                <?php }
                            }
                        }
                    }
                    if(isset($_GET["searchyr"])){
                        if($_GET["type"]=='publications'){ ?>
                            <tr>
                                <th>Publication Title</th>
                                <th>Type</th>
                                <th>Contributed with</th>
                            </tr>
                        <?php  
                            $query="SELECT PID,Title from `publications` where Year=".$_GET["searchyr"].";";
                            $res=mysqli_query($conn,$query);
                            if(!$res) echo "";
                            else{
                                $mainarr=array();
                                while($row=mysqli_fetch_assoc($res)){
                                    $query1='SELECT `name` from `faculty` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].';';
                                    $str="";
                                    $result1 = mysqli_query($conn, $query1);
                                    while($row1= mysqli_fetch_assoc($result1)){
                                        $str=$str.$row1["name"].",";
                                    }
                                    array_push($mainarr,($row["PID"])); ?>
                                        <tr>
                                            <th><?php echo $row["Title"];?></th>
                                            <th>Conference</th>
                                            <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                        </tr>
                                    <?php 
                                }   
                            }
                            $query="SELECT JID,Paper_Title from `journals` where Year=".$_GET["searchyr"].";";
                            $res=mysqli_query($conn,$query);
                            if(!$res) echo "";
                            else{
                                while($row=mysqli_fetch_assoc($res)){
                                    $query1='SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].';';
                                    $str="";
                                    $result1 = mysqli_query($conn, $query1);
                                    while($row1= mysqli_fetch_assoc($result1)){
                                        $str=$str.$row1["name"].",";
                                    } ?>
                                        <tr>
                                            <th><?php echo $row["Paper_Title"];?></th>
                                            <th>Journal</th>
                                            <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                        </tr>
                                    <?php 
                                }   
                            }
                        }
                        if($_GET["type"]=='patents'){?>
                            <tr>
                                <th>Patent Title</th>
                                <th>Patent Members</th>
                            </tr>
                         <?php   $query1="SELECT PaId,PTitle,PIid from `patents` where Year=".$_GET["searchyr"].";";
                            $res1=mysqli_query($conn,$query1);
                            if(!$res1) echo "";
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
                                    } ?>
                                    <tr>
                                        <th><?php echo $row["PTitle"];?></th>
                                        <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                    </tr>
                                    <?php 
                                }   
                            }
                        }
                    }
                    if(isset($_GET["searchyrA"])&&isset($_GET["searchyrB"])){
                        if($_GET["type"]=='publications'){ ?>
                        <tr>
                            <th>Publication Title</th>
                            <th>Type</th>
                            <th>Contributed with</th>
                            <th>Year</th>
                        </tr>
                       <?php 
                        $max=max((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                        $min=min((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                        $query="SELECT PID,Title,Year from `publications` where Year>=".$min." and Year<=".$max." ORDER by Year desc;";
                        $res=mysqli_query($conn,$query);
                        if(!$res) echo "";
                        else{
                            $mainarr=array();
                            while($row=mysqli_fetch_assoc($res)){
                                $query1='SELECT `name` from `faculty` NATURAL JOIN `pubicationauthor` WHERE `PID`='.$row["PID"].';';
                                $str="";
                                $result1 = mysqli_query($conn, $query1);
                                while($row1= mysqli_fetch_assoc($result1)){
                                    $str=$str.$row1["name"].",";
                                }
                                array_push($mainarr,($row["PID"]));?>
                                    <tr>
                                        <th><?php echo $row["Title"];?></th>
                                        <th>Conference</th>
                                        <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                        <th><?php echo $row["Year"];?></th>
                                    </tr>
                                <?php 
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
                                array_push($mainarr,($row["JID"]));?>
                                <tr>
                                        <th><?php echo $row["Paper_Title"];?></th>
                                        <th>Journal</th>
                                        <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                        <th><?php echo $row["Year"];?></th>
                                </tr>
                                <?php 
                            }   
                        }    
                     }
                        if($_GET["type"]=='patents'){?>
                                <tr>
                                    <th>Patent Title</th>
                                    <th>Princiapl Investigator</th>
                                    <th>Year</th>
                                </tr>
                        <?php
                            $max=max((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                            $min=min((int)$_GET['searchyrA'],(int)$_GET["searchyrB"]);
                            $query="SELECT PaId,PIid,PTitle,Year from `patents` where Year>=".$min." and Year<=".$max." ORDER by Year desc;";
                            $res=mysqli_query($conn,$query);
                            if(!$res) echo "";
                            else{
                                while($row=mysqli_fetch_assoc($res)){
                                    $query1='SELECT `name` from `faculty` WHERE `EID`='.$row["PIid"].';';
                                    $result1 = mysqli_query($conn, $query1);
                                    $principalname=mysqli_fetch_array($result1);?>
                                        <tr>
                                            <th><?php echo $row["PTitle"];?></th>
                                            <th><?php echo $principalname["name"];?></th>
                                            <th><?php echo $row["Year"];?></th>
                                        </tr>
                                    <?php  
                                }   
                            }
                        }
                    }
                    if(isset($_GET["dept"])){
                        if($_GET["type"]=='publications'){?>
                            <tr>
                                <th>Publication Title</th>
                                <th>Type</th>
                                <th>Year</th>
                            </tr>
                        <?php
                            $query="SELECT distinct(JID) from `journalauthor` NATURAL JOIN `faculty` where `dept`='".$_GET["dept"]."';";
                            $res=mysqli_query($conn,$query);
                            if(!$res) echo "";
                            else{
                                $mainarr=array();
                                while($row=mysqli_fetch_assoc($res)){
                                    $query1='SELECT JID,Paper_Title,Year from `journals` where JID='.$row["JID"].';';
                                    $result1 = mysqli_query($conn, $query1);
                                    $pubarray=mysqli_fetch_array($result1);?>
                                        <tr>
                                            <th><?php echo $pubarray["Paper_Title"];?></th>
                                            <th>Journal</th>
                                            <th><?php echo $pubarray["Year"];?></th>
                                        </tr>
                                    <?php
                                }   
                            }
                            $query="SELECT distinct(PID) from `pubicationauthor` NATURAL JOIN `faculty` where `dept`='".$_GET["dept"]."';";
                            $res=mysqli_query($conn,$query);
                            if(!$res) echo "";
                            else{
                                $mainarr=array();
                                while($row=mysqli_fetch_assoc($res)){
                                    $query1='SELECT PID,Title,Year from `publications` where PID='.$row["PID"].';';
                                    $result1 = mysqli_query($conn, $query1);
                                    $pubarray=mysqli_fetch_array($result1);?>
                                        <tr>
                                            <th><?php echo $pubarray["Title"];?></th>
                                            <th>Conference</th>
                                            <th><?php echo $pubarray["Year"];?></th>
                                        </tr>
                                    <?php
                                }   
                            }
                        }
                        if($_GET["type"]=='patents'){?>
                            <tr>
                                <th>Patent Title</th>
                                <th>Principal Investigator</th>
                                <th>Year</th>   
                            </tr>
                        <?php
                            $query="SELECT PaId,PIid,PTitle,name,Year from `patents` inner join `faculty` on faculty.EID=patents.PIid where dept='".$_GET['dept']."' ORDER BY PaId desc;";
                            $res=mysqli_query($conn,$query);
                            if(!$res) echo "";
                            else{
                                while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                        <th><?php echo $row["PTitle"];?></th>
                                        <th><?php echo $row["name"];?></th>
                                        <th><?php echo $row['Year'];?></th>
                                    </tr>
                                    <?php
                                }   
                            }
                        }
                    }
                    if(isset($_GET["year"]) && isset($_GET["id"])){
                        if($_GET["type"]=='publications'){?>
                                <tr>
                                    <th>Publication Title</th>
                                    <th>Type</th>
                                    <th>Contributed with</th>
                                </tr>
                          <?php  
                          $quer = "SELECT Title,PID FROM publications WHERE PID in (SELECT PID from pubicationauthor where EID=".$_GET["id"].") and Year=".$_GET["year"].";";
                          $result = mysqli_query($conn, $quer);
                          if(!$result) echo "";
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
                                            <tr>
                                                <th><?php echo $row["Title"]?></th>
                                                <th>Conference</th>
                                                <th>Fully Contributed by you</th>
                                            </tr>
                                  <?php } 
                                  else {?>
                                            <tr>
                                                <th><?php echo $row["Title"]?></th>
                                                <th>Conference</th>
                                                <th><?php echo substr($str,0,strlen($str)-1) ?></th>
                                            </tr>
                                  <?php }
                              }
                          }
                          $quer = "SELECT Paper_Title,JID FROM journals WHERE JID in (SELECT JID from journalauthor where EID=".$_GET["id"].") and Year=".$_GET["year"].";";
                          $result = mysqli_query($conn, $quer);
                          if(!$result) echo "";
                          else{
                              while($row = mysqli_fetch_assoc($result)) {
                                  $subq = 'SELECT `name` from `faculty` NATURAL JOIN `journalauthor` WHERE `JID`='.$row["JID"].' and EID!='.$_GET["id"].';';
                                  $str="";
                                  $result1 = mysqli_query($conn, $subq);
                                  while($row1= mysqli_fetch_assoc($result1)){
                                      $str=$str.$row1["name"].",";
                                  }
                                  if($str=="") { ?>
                                         <tr>
                                                <th><?php echo $row["Paper_Title"]?></th>
                                                <th>Journal</th>
                                                <th>Fully Contributed by you</th>
                                            </tr>
                                          
                                  <?php } 
                                  else {?>
                                            <tr>
                                                <th><?php echo $row["Paper_Title"]?></th>
                                                <th>Journal</th>
                                                <th><?php echo substr($str,0,strlen($str)-1) ?></th>
                                            </tr>
                                  <?php }
                              }
                          }
                        }
                        if($_GET["type"]=='patents'){?>
                            <tr>
                                <th>Patent title</th>
                                <th>Patent Members</th>
                            </tr>
                       <?php  
                            $query1="SELECT PaId,PTitle,PIid from `patents` where Year=".$_GET["year"].";";
                            $res1=mysqli_query($conn,$query1);
                            if(!$res1) echo "";
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
                                        }?>
                                        <tr>
                                            <th><?php echo $row['PTitle'];?></th>
                                            <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                        </tr>
                                        <?php
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
                                            }?>
                                                <tr>
                                                    <th><?php echo $row['PTitle'];?></th>
                                                    <th><?php echo substr($names,0,strlen($names)-1);?></th>
                                                </tr>
                                            <?php
                                        }
                                    }
                                }   
                            }
                        }
                    }
                    if(isset($_GET['patentall'])){
                        if($_GET["patentall"]=='true'){?>
                                <tr>
                                <th>Patent Title</th>
                                <th>Year</th>
                                <th>Patent Members</th>
                            </tr>
                         <?php   $query1="SELECT PaId,PTitle,PIid,Year from `patents`;";
                            $res1=mysqli_query($conn,$query1);
                            if(!$res1) echo "";
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
                                    } ?>
                                    <tr>
                                        <th><?php echo $row["PTitle"];?></th>
                                        <th><?php echo $row["Year"];?></th>
                                        <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                    </tr>
                                    <?php 
                                }   
                            }
                        }
                    }
                    if(isset($_GET['patent'])){?>
                            <tr>
                                <th>Patent Title</th>
                                <th>Year</th>
                                <th>Patent Members</th>
                            </tr>
                         <?php   $query1="SELECT PaId,PTitle,PIid,Year from `patents`;";
                            $res1=mysqli_query($conn,$query1);
                            if(!$res1) echo "";
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
                                    } ?>
                                    <tr>
                                        <th><?php echo $row["PTitle"];?></th>
                                        <th><?php echo $row['Year'];?></th>
                                        <th><?php echo substr($str,0,strlen($str)-1);?></th>
                                    </tr>
                                    <?php 
                                }   
                            }
                    }
                }
                ?>
                </table>
            </div>
        
    </div>
</body>

</html>