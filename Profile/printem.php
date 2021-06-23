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
                    $servername = 'localhost';
                    $username = 'root';
                    $dbname = 'internship';
                    $conn=mysqli_connect($servername, $username,'', $dbname);
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
                            <?php $query="SELECT PID,Title,ConferenceName,Year from publications;";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from pubicationauthor natural join faculty where PID=".$row["PID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $query2="SELECT Othernames from pubicationauthor where PID=".$row["PID"]." and EID is null;";
                                    $res2=mysqli_query($conn,$query2);
                                    while($row2=mysqli_fetch_assoc($res2)){
                                        $names=$names.$row2["Othernames"];
                                    }
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
                        <?php $query="SELECT JID,Paper_Title,Journal,Year from journals;";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from journalauthor natural join faculty where JID=".$row["JID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $query2="SELECT Othernames from journalauthor where JID=".$row["JID"]." and EID is null;";
                                    $res2=mysqli_query($conn,$query2);
                                    while($row2=mysqli_fetch_assoc($res2)){
                                        $names=$names.$row2["Othernames"];
                                    }
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
                            <?php $query="SELECT PID,Title,ConferenceName,Year from publications natural join pubicationauthor where EID=".$_GET['id'].";";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from pubicationauthor natural join faculty where PID=".$row["PID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $query2="SELECT Othernames from pubicationauthor where PID=".$row["PID"]." and EID is null;";
                                    $res2=mysqli_query($conn,$query2);
                                    while($row2=mysqli_fetch_assoc($res2)){
                                        $names=$names.$row2["Othernames"];
                                    }
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
                        <?php $query="SELECT JID,Paper_Title,Journal,Year from journals natural join journalauthor where EID=".$_GET['id'].";";
                            $res=mysqli_query($conn,$query);
                            if($res){
                                while($row=mysqli_fetch_assoc($res)){
                                    $names="";
                                    $query1="SELECT name from journalauthor natural join faculty where JID=".$row["JID"]." and EID is not null;";
                                    $res1=mysqli_query($conn,$query1);
                                    while($row1=mysqli_fetch_assoc($res1)){
                                        $names=$names.$row1['name'].",";
                                    }
                                    $query2="SELECT Othernames from journalauthor where JID=".$row["JID"]." and EID is null;";
                                    $res2=mysqli_query($conn,$query2);
                                    while($row2=mysqli_fetch_assoc($res2)){
                                        $names=$names.$row2["Othernames"];
                                    }
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
                }
                ?>
                </table>
            </div>
        
    </div>
</body>

</html>