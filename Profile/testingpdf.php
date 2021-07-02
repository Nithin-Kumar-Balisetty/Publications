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
    // create & initialize a curl session
   /* $curl = curl_init();

// set our url with curl_setopt()
curl_setopt($curl, CURLOPT_URL, "https://api.crossref.org/works/10.1109/TPAMI.2021.3076873");
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
 ));
// return the transfer as a string, also with setopt()
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// curl_exec() executes the started curl session
// $output contains the output string
$output = curl_exec($curl);
$samp=json_decode($output);
var_dump($samp->author);
// close curl resource to free up system resources
// (deletes the variable made by curl_init)
curl_close($curl);*/

?>
