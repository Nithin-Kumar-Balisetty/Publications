<?php

if(isset($_GET['q'])){
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn = mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
            $query = 'SELECT EID,ENAME from `users` where ENAME LIKE "%'.$_GET["q"].'%";';
            $res=mysqli_query($conn,$query);
            $final="";
            while($row=mysqli_fetch_array($res)){
                echo $row["ENAME"];
            }
        }
}
?>