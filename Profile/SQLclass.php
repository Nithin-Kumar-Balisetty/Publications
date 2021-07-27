<?php
    class SQL{
        public $conn;
        function SQLi(){
            try{
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'internship';
                $this->conn=mysqli_connect($servername, $username,'', $dbname);
                return $this->conn;
            }
            catch(Exception $e){
                return false;
            }
        }
        function query($str){
            try{
                $res=mysqli_query($this->conn,$str);
                return $res;
            }
            catch(Exception $e){
                return false;
            }
        }
    }
        /* patents */
        $ftype=array("Non-Provisional","Convention","PCT International","PCT National Phase","Divisional","Patent of Addition");
        $status=array("Submitted","Published","Awarded");
        /* patent end*/
        $journalpublisher = array("Springer","Elsevier");
        $indexing=array("SCI","Non-SCI","Scopus","Google Scholar");
        $months = array(
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
            );
  $eventtype=array("Sports");


?>

