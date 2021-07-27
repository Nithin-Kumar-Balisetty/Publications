<?php
include "./SQLclass.php";
/*if(isset($_GET['q'])){
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn = mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
            if($_GET['q']!=""){
                $query = 'SELECT EID,name from `faculty` where name LIKE "%'.$_GET["q"].'%";';
                $res=mysqli_query($conn,$query);
                $final="";
                while($row=mysqli_fetch_array($res)){
                    echo "<a href='./searchpublications.php?searchfac=".$row['name']."&id=".$row['EID']."'>".$row['name']."</a><br>";
                }
            }
            else{
                echo "";
            }
        }
}*/
if(isset($_GET['q'])){
    $obj=new SQL();
    $conn=$obj->SQLi();
    if(!$conn) die();
    else{
        if($_GET['q']!=""){
            $query = 'SELECT EID,name,dept from `faculty` where name LIKE "%'.$_GET["q"].'%";';
            $res=mysqli_query($conn,$query);
            $final="";
            echo "<datalist id='facultynames'>";
                while($row=mysqli_fetch_array($res)){
                    echo '<option data-value="'.$row["EID"].'" value="'.$row["name"]." (".$row["dept"].")".'">';
                }
                echo "</datalist>";
        }
        else{
            echo "<datalist></datalist>";
        }
    }
}
if(isset($_GET['qr'])){
    $obj=new SQL();
        $conn=$obj->SQLi();
        if(!$conn) die();
        else{
            if($_GET['qr']!=""){
                $query = 'SELECT dept,EID,name from `faculty` where name LIKE "%'.$_GET["qr"].'%";';
                $res=mysqli_query($conn,$query);
                $final="";  
                echo "<datalist id='facultynames'>";
                while($row=mysqli_fetch_array($res)){
                    echo '<option data-value="'.$row["EID"].'" value="'.$row["name"]." (".$row["dept"].")".'">';
                }
                echo "</datalist>";
            }
            else{
                echo "<datalist></datalist>";
            }
        }
}
if(isset($_GET['qrr'])&&isset($_GET["id"])){
    $obj=new SQL();
        $conn=$obj->SQLi();
        if(!$conn) die();
        else{
            if($_GET['qrr']!=""){
                $query = 'SELECT dept,EID,name from `faculty` where name LIKE "%'.$_GET["qrr"].'%";';
                $res=mysqli_query($conn,$query);
                $final="";  
                echo "<datalist id='facultynames".$_GET["id"]."'>";
                while($row=mysqli_fetch_array($res)){
                    echo '<option data-value="'.$row["EID"].'" value="'.$row["name"]." (".$row["dept"].")".'">';
                }
                echo "</datalist>";
            }
            else{
                echo "<datalist></datalist>";
            }
        }
}
?>