<?php
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
                    $pdf->Cell(57,12,$column_heading,1);
            }
            $pdf->Output('F',"publication.pdf");
        }
    }
    

?>