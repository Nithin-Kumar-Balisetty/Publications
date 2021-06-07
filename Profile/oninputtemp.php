<?php

if(isset($_GET['q'])){
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn = mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
            if($_GET['q']!=""){
                $query = 'SELECT EID,ENAME from `users` where ENAME LIKE "%'.$_GET["q"].'%";';
                $res=mysqli_query($conn,$query);
                $final="";
                while($row=mysqli_fetch_array($res)){
                    echo "<a href='./searchpublications.php?searchfac=".$row['ENAME']."&id=".$row['EID']."'>".$row['ENAME']."</a><br>";
                }
            }
            else{
                echo "";
            }
        }
}
if(isset($_GET['qr'])){
    $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn = mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
            if($_GET['qr']!=""){
                $query = 'SELECT dept,EID,ENAME from `users` where ENAME LIKE "%'.$_GET["qr"].'%";';
                $res=mysqli_query($conn,$query);
                $final="";  
                echo "<datalist id='facultynames'>";
                while($row=mysqli_fetch_array($res)){
                    echo '<option data-value="'.$row["EID"].'" value="'.$row["ENAME"]." (".$row["dept"].")".'">';
                }
                echo "</datalist>";
            }
            else{
                echo "<datalist></datalist>";
            }
        }
}
?>