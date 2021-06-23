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
        /*$arr=array(1,2,3);
        $obj=new SQL();
        $obj->SQLi();
        $servername = 'localhost';
        $username = 'root';
        $dbname = 'internship';
        $conn = mysqli_connect($servername, $username,'', $dbname);
        if(!$conn) die();
        else{
                $quer = 'SELECT ENAME from users where ENAME LIKE "%'.$_GET["qr"].'%";';
                $res=mysqli_query($conn,$quer);
                $final="";
                echo "<datalist id='facultynames'>";
                while($row=mysqli_fetch_array($res)){
                    echo '<option data-value="'.$row["EID"].'" value="'.$row["ENAME"]." (".$row["dept"].")".'">';
                }
                echo "</datalist>";
        }*/
        /* patents */
        $ftype=array("Non-Provisional","Convention","PCT International","PCT National Phase","Divisional","Patent of Addition");
        $status=array("Submitted","Published","Awarded");
        /* patent end*/
        $journalpublisher = array("Springer","Elsevier");
        $indexing=array("SCI","Non-SCI","Scopus","Open-access");

?>
<?php
    /*
    require("./fpdf/fpdf.php");
    $servername = 'localhost';
    $username = 'root';
    $dbname = 'internship';
    $conn = mysqli_connect($servername, $username,'', $dbname);
    if(!$conn) die();
    else{
        $query="Select * from `publications`";
        $res=mysqli_query($conn,$query);
        if($res){
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',10);

            foreach($res as $heading) {
                foreach($heading as $column_heading)
                    $pdf->Cell(50,20,$column_heading,1);
            }
            $pdf->Output('F',"publication.pdf");
        }
    }
    
*/

 /*$obj=new SQL();
 $conn=$obj->SQLi();
 if($conn){
    echo "mass";
    $res=$obj->query("SELECT Title from `publications`;");
    if($res){
            while($row=mysqli_fetch_array($res)){
                echo $row["Title"];
            }
    }
    else{
        echo "quey wrong";
    }
 }
 else{
     echo "CONNETCTIOn not establishes";
 }*/
?>




<?php

    //data to make csv (may be from database, form, etc)
   /* $dbdata = array(
                array("name"=>"name1", "phone"=>"1010101001"),
                array("name"=>"name2", "phone"=>"1010101002")
            );
 
    require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';
    require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
    
    $objPHPExcel = new PHPExcel(); 
    
    $rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
    
    $rendererLibraryPath = dirname(__FILE__).'/tcpdf_min'; 
 
    
    $objPHPExcel->getActiveSheet(0)->setCellValue('A1',"Name"); 
    $objPHPExcel->getActiveSheet(0)->setCellValue('B1',"Phone"); 
    
    $i=2; 
    foreach($dbdata as $data) {
        $objPHPExcel->getActiveSheet(0)->setCellValue('A'.$i,$data['name']);
        $objPHPExcel->getActiveSheet(0)->setCellValue('B'.$i,$data['phone']);
        $i++;
    }
    
    $objPHPExcel->getActiveSheet()->setTitle('Simple');
 
    $objPHPExcel->setActiveSheetIndex(0);
    
        
if (!PHPExcel_Settings::setPdfRenderer(
 $rendererName,
 $rendererLibraryPath
 )) {
 die(
 'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
 '<br />' .
 'at the top of this script as appropriate for your directory structure'
 );
}
 
 
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="publication.pdf"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
$objWriter->save('php://output');
exit;*/
?>

<?php
     /*$target_dir = 'uploads/';
     $target_file = $target_dir . basename("Publication-converted.xlsx");
     require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';
     $inputFileType = PHPExcel_IOFactory::identify($target_file);
     $objReader = PHPExcel_IOFactory::createReader($inputFileType);
     $objPHPExcel = $objReader->load($target_file);
     /*B -title
     C - year D- sourcetitle E volume G pagestart H page end I type="Journal Article" J Scopus*/
     /*$i=2;
     while($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue()!=''){
        $issn=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getValue();
        $title=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
        $sourcet=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
        $vol=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getValue();
        $pages=(int)($objPHPExcel->getActiveSheet()->getCell('H'.$i)->getValue())-(int)($objPHPExcel->getActiveSheet()->getCell('G'.$i)->getValue());
        $year=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
        $index=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getValue();
        $str="$issn,'$title','$sourcet',$vol,$pages,$year,'$index'";
        $query1="INSERT INTO publications (ISSN,Title,Source_Title,Vol,Pages,Year,Indexing) values($str)";
        $obj=new SQL();
        $obj->SQLi();
        if($obj->query($query1)){
         ///   
        }
        $i++;
     }*/
     /*$query1="SELECT * from publications;";
        $obj=new SQL();
        $obj->SQLi();
        $res=$obj->query($query1);
        while($row=mysqli_fetch_array($res)){
           echo $row["Title"]."<br>"; 
        }*/
        /*$i=1;
        $obj=new SQL();
        $obj->SQLi();
        while($i<=5){
            $email="sample".$i."@gmail.com";
            $ename="sample".$i;
            $query1="INSERT into users(ENAME,EMAIL,dept) values('$ename','$email','CSE')";
            $res=$obj->query($query1);
            $i++;
        }
        while($i<=10){
            $email="sample".$i."@gmail.com";
            $ename="sample".$i;
            $query1="INSERT into users(ENAME,EMAIL,dept) values('$ename','$email','ECE')";
            $res=$obj->query($query1);
            $i++;
        }*/
        /*$obj=new SQL();
        $obj->SQLi();
        $i=1;
        while($i<=99){
            $a=rand(1,10);
            $b=rand(1,10);
            $c=rand(1,10);
            $query1="INSERT into pubicationauthor(PID,EID) values($i,$a)";
            $res=$obj->query($query1);
            $query2="INSERT into pubicationauthor(PID,EID) values($i,$b)";
            $res=$obj->query($query2);
            $query3="INSERT into pubicationauthor(PID,EID) values($i,$c)";
            $res=$obj->query($query3);
            $i++;
        }*/

?>
