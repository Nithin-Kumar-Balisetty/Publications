<?php 
    

    // email Google session should be added here. For testing take an static email
    $email='sadagopan@iiitdm.ac.in';
    
    if(isset($_POST['uploadexcel'])){
        $target_dir = 'uploads/';
        $imageFileType = pathinfo(basename($_FILES["csvfile"]["name"]),PATHINFO_EXTENSION);
        $target_file = $target_dir .$email."-".date("Y-m-d").".".$imageFileType;
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

        $fileselect = PHPExcel_IOFactory::identify("Patent.xlsx");
        $excelreader = PHPExcel_IOFactory::createReader($fileselect);
        $excel = $excelreader->load("Patent.xlsx");

        $obj=new SQL();
        $conn=$obj->SQLi();
        if($conn){
            $errorlog="";
            $i=2;
            $attr=array("Patent Title","Patent Number","Filing Type","Status","Year","Month","Details","Principal Investigator(Mail id)","Co-Principal Investigators(emails seperated by comma)","Patent Members list");
            $char='A';
            for($k=0;$k<sizeof($attr);$k++){
                if($attr[$k]!=$objPHPExcel->getActiveSheet()->getCell($char.(int)1)->getValue()){
                    echo "<script>popupform('File not in desired format','Make sure the the file follow the patent template');</script>";
                    die();
                }
                $char++;
            }
            while($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue()!=''){
                $title=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue();
                $patentnum=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
                $filing=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                $status=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                $year=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getValue();
                $month=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getValue();
                $details=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getValue();
    
   
                $pimail=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getValue();
                $copimail=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getValue();
                $authorlist=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getValue();

   
                $regex = '/^[a-z0-9]+@(iiitdm.ac.in)$/';
                $contents = str_replace(' ', '', $authorlist);
                $piarray=explode(",",str_replace(' ', '', $pimail));
                $copiarray=explode(',',str_replace(' ', '', $copimail));
                $check=0;
                if(sizeof($piarray)>1) {
                    $errorlog=$errorlog."At row ".(string)$i." of the excel Principal Investor field consist of multiple mails.<br>";
                    $check=1;
                }
                $str=strtolower($title);
                $quer='SELECT PaId,PTitle,PNum from `patents`;';
                $res=mysqli_query($conn,$quer);
                while($row=mysqli_fetch_assoc($res)){
                    $comp=strtolower($row["PTitle"]);
                    similar_text($comp,$str,$per);
                    if(($per<=100 && $per>=95)||($row['PNum']==$patentnum)){
                        $check=1;
                        $errorlog=$errorlog."At row ".(string)($i)." of the excel an identical Patent with same Title or Patent Number is present.<br>";
                        break;
                    }
                }
                for($z=0;$z<1;$z++){
                   if(!preg_match($regex, $piarray[$z])) {
                       $check=1;
                       $errorlog=$errorlog."At row ".(string)($i)." of the excel the Principal Investigator email field type is not of @iiitdm.ac.in<br>";
                       break;
                   }
                } 
                for($z=0;$z<sizeof($copiarray);$z++){
                    if(!preg_match($regex, $copiarray[$z])) {
                        $check=1;
                        $errorlog=$errorlog."At row ".(string)($i)." of the excel one of the Co-Principal Investigator email field type is not of @iiitdm.ac.in<br>";
                        break;
                    }
                 }   
                if($check==0){
                       $norows=$excel->setActiveSheetIndex(0)->getHighestRow()+1;
                       foreach(range('A','J') as $b){
                           $excel->getActiveSheet()->setCellValue($b.(string)$norows,$objPHPExcel->getActiveSheet()->getCell($b.$i)->getValue());
                       }
   
                       $objWriter = PHPExcel_IOFactory::createWriter($excel,'Excel5');
                       $objWriter->save("Patent.xlsx");
                       $idquery='SELECT EID from faculty where email="'.$piarray[0].'";';
                       $idres=mysqli_query($conn,$idquery);
                       if($idres){
                           $id=mysqli_fetch_array($idres);
                           $str='"'.$title.'",'.$patentnum.',"'.$filing.'","'.$status.'",'.$year.','.$month.',"'.$details.'","'.$authorlist.'",'.$id['EID'];
                           $query1="INSERT INTO patents (PTitle,PNum,FType,Status,Year,Month,Details,OwnerList,PIid) values(".$str.")";
                           if(mysqli_query($conn,$query1)){
                               //successfully inserted
                               $querr='SELECT MAX(PaId) as maxi from patents;';
                               $res=mysqli_query($conn,$querr);
                               $jid=0;
                               while($row=mysqli_fetch_assoc($res)){ $jid=$row["maxi"]; }
                               for($j=0;$j<sizeof($copiarray);$j++){
                                   $query3 = 'SELECT EID from `faculty` where email="'.$copiarray[$j].'";';
                                   $res=mysqli_query($conn,$query3);
                                   $temp=0;
                                   while($row=mysqli_fetch_assoc($res)){ $temp=$row["EID"]; }
                                   $query2= "INSERT INTO patentcopi (PaId,COPI) values(".$jid.",".$temp.")";
                                   if(mysqli_query($conn,$query2)){
                                       // succesfully inserted in publicationauthor table
                                   }
                                   else{
                                       $errorlog=$errorlog."At row ".(int)$i." the Co-Prinicipal Emails have not been added.<br>";
                                   }
                               }
                           }
                           else{
                            $errorlog=$errorlog."At row ".(int)$i." the patent is not added.<br>";                           }
                       }
                       else{
                           $errorlog=$errorlog."At row ".(int)$i." the patent is not posted<br>";
                       }
                   }
                     $i++;  
            } 
            if($errorlog==''){ ?>
                    <script>
                        popupform('Succesful','All rows have been added.');
                    </script>
            <?php }
            else{ ?>
                <script>
                    popupform('All the patents rows are not posted','Errorlogs<br><?php echo $errorlog;?>')
                </script>
            <?php }

        }
        else{ ?>
            <script>
                popupform('Server Error','Try Again');
            </script>
        <?php
        }
    }
}


    if(isset($_POST['uploadexcelb'])){

        $target_dir = 'uploads/';
        $imageFileType = pathinfo(basename($_FILES["csvfile"]["name"]),PATHINFO_EXTENSION);
        $target_file = $target_dir .$email."-".date("Y-m-d").".".$imageFileType;
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

        $fileselect = PHPExcel_IOFactory::identify("BookChapter.xlsx");
        $excelreader = PHPExcel_IOFactory::createReader($fileselect);
        $excel = $excelreader->load("BookChapter.xlsx");

        $obj=new SQL();
        $conn=$obj->SQLi();
        if($conn){
            $errorlog="";
            $i=2;
            $attr=array("Book Chapter Name","Book Name","ISSN or ISBN","Year","Month","Proceedings","Pages","Issue","Publisher","Editor's List","Author emails(seperated by comma)");
            $char='A';
            for($k=0;$k<sizeof($attr);$k++){
                if($attr[$k]!=$objPHPExcel->getActiveSheet()->getCell($char.(int)1)->getValue()){
                    echo "<script>popupform('File not in desired format','Make sure the the file follow the patent template');</script>";
                    die();
                }
                $char++;
            }
            while($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue()!=''){
                $chap=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue();
                $name=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue();
                $issn=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getValue();
                $year=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getValue();
                $month=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getValue();
                $proceeding=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getValue();
                $pages=$objPHPExcel->getActiveSheet()->getCell('G'.$i)->getValue();
                $issue=$objPHPExcel->getActiveSheet()->getCell('H'.$i)->getValue();
                $publisher=$objPHPExcel->getActiveSheet()->getCell('I'.$i)->getValue();
                $authorlist=$objPHPExcel->getActiveSheet()->getCell('J'.$i)->getValue();
                $copimail=$objPHPExcel->getActiveSheet()->getCell('K'.$i)->getValue();

   
                $regex = '/^[a-z0-9]+@(iiitdm.ac.in)$/';
                $contents = str_replace(' ', '', $authorlist);
                $copiarray=explode(',',str_replace(' ', '', $copimail));
                $check=0;
                $str=strtolower($chap);
                $quer='SELECT BID,ChapName,ISN from `bookchapter`;';
                $res=mysqli_query($conn,$quer);
                while($row=mysqli_fetch_assoc($res)){
                    $comp=strtolower($row["ChapName"]);
                    similar_text($comp,$str,$per);
                    if(($per<=100 && $per>=95)||($row['ISN']==$issn)){
                        $check=1;
                        $errorlog=$errorlog."At row ".(string)($i)." of the excel an identical bookchapter with same Title or Patent Number is present.<br>";
                        break;
                    }
                }
                for($z=0;$z<sizeof($copiarray);$z++){
                    if(!preg_match($regex, $copiarray[$z])) {
                        $check=1;
                        $errorlog=$errorlog."At row ".(string)($i)." of the excel one of the Author's email field type is not of @iiitdm.ac.in<br>";
                        break;
                    }
                 }   
                if($check==0){
                       $norows=$excel->setActiveSheetIndex(0)->getHighestRow()+1;
                       foreach(range('A','K') as $b){
                           $excel->getActiveSheet()->setCellValue($b.(string)$norows,$objPHPExcel->getActiveSheet()->getCell($b.$i)->getValue());
                       }
   
                       $objWriter = PHPExcel_IOFactory::createWriter($excel,'Excel5');
                       $objWriter->save("BookChapter.xlsx");

                           $str='"'.$chap.'","'.$name.'","'.$issn.'",'.$year.','.$month.',"'.$proceeding.'",'.$pages.','.$issue.',"'.$publisher.'","'.$authorlist.'"';
                           $query1="INSERT INTO bookchapter (ChapName,BName,ISN,Year,Month,Proceedings,Pages,Issue,Publisher,EditorList) values(".$str.")";
                           if(mysqli_query($conn,$query1)){
                               //successfully inserted
                               $querr='SELECT MAX(BID) as maxi from bookchapter;';
                               $res=mysqli_query($conn,$querr);
                               $jid=0;
                               while($row=mysqli_fetch_assoc($res)){ $jid=$row["maxi"]; }
                               for($j=0;$j<sizeof($copiarray);$j++){
                                   $query3 = 'SELECT EID from `faculty` where email="'.$copiarray[$j].'";';
                                   $res=mysqli_query($conn,$query3);
                                   $temp=0;
                                   while($row=mysqli_fetch_assoc($res)){ $temp=$row["EID"]; }
                                   $query2= "INSERT INTO bookids (BID,EID) values(".$jid.",".$temp.")";
                                   if(mysqli_query($conn,$query2)){
                                       // succesfully inserted in publicationauthor table
                                   }
                                   else{
                                       $errorlog=$errorlog."At row ".(int)$i." the author email ".$copiarray[$j]." have not been added.<br>";
                                   }
                               }
                           }
                           else{    $errorlog=$errorlog."At row ".(int)$i." the bookchapter is not added.<br>"; }
                   }
                     $i++;  
            } 
            if($errorlog==''){ ?>
                    <script>
                        popupform('Succesful','All rows have been added.');
                    </script>
            <?php }
            else{ ?>
                <script>
                    popupform('All the bookchapter rows are not posted',"Errorlogs<br><?php echo $errorlog;?>");
                </script>
            <?php }

        }
        else{ ?>
            <script>
                popupform('Server Error','Try Again');
            </script>
        <?php
        }
    }

    }
    

    //edit module 
    if(isset($_GET['editpublication'],$_GET['type'])){
        $obj=new SQL();
        $conn=$obj->SQLi();
        if(!$conn) die();
        else{
            if($_GET['type']=='journal'){
                //patents
                $query="SELECT * from patents where PaId=".$cpub[(int)$_GET["editpublication"]];
                $res=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($res);
                ?>
                <style>
                span{
                    margin-left: 20px;
                    color:green;
                }
                </style>
                <div id='journaledit' class='mt-5'>
                <h3 style="display: inline-block;;">Edit Patent Details</h3>
                <button type="button" class="close mt-5 closebutton1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script>
                    $(".closebutton1").click(function(){
                        $("#journaledit").hide();
                    });
                </script>
                <hr class="mt-2">
                <form action="./patents.php<?php echo "?editpublication=".$_GET['editpublication']."&type=".$_GET['type'];?>" method="POST">
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="PName">Patent Title : <span style="color : red;">*</span></label>
                        </div>
                        <div class="col-lg-4">
                        <input type="text" name="Title" value="<?php echo $result['PTitle'] ;?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="ISSN">Patent Number :</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="number" name="PNum"  style="display : inline-block;" value='<?php echo $result['PNum'];?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Month and Year :</label>
                        </div>
                        <div class="col-lg-7">
                        <input type="month" name="Year" value="<?php echo $result['Year']."-".$result['Month'];?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Filing Type :</label>
                        </div>
                        <div class="col-lg-9">
                            <select name="ftype" id="ftype" value='<?php echo $result['FType'];?>'>
                            <?php 
                                for($i=0;$i<sizeof($ftype);$i++){
                                    echo '<option value="'.$i.'">'.$ftype[$i].'</option>';
                                }   
                            ?>  
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Status :</label>
                        </div>
                        <div class="col-lg-9">
                            <select name="fstatus" id="fstatus1">
    
                                <option value="Submitted">Submitted</option>
                                <option value="Published">Published</option>
                                <option value="Awarded">Awarded</option>
                            </select>
                        </div>
                    </div>
                    <script>
                        var ele=document.getElementById("fstatus1");
                        for(let i=0;i<document.getElementById("fstatus1").children.lenght;i++){
                            if(ele.chidren[i].value=="<?php echo $result['Status'];?>"){
                                console.log(ele.children[i]);
                                $(ele.children[i]).attr('selected',true);
                            }
                        }
                    </script>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Link">Details :</label>
                        </div>
                        <div class="col-lg-4">
                        <input type="text" name="Details" value='<?php echo $result['Details'];?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Link">Owner's List :</label>
                        </div>
                        <div class="col-lg-8">
                        <input type="text" name="authorlist" value='<?php echo $result['OwnerList'];?>'>
                        </div>
                    </div>
                    <script>
                
                    </script> 
                    <div class="row firstblock">
                        <div class="col-lg-3">
                        <label for="Link">Principal Investigator 1 :</label>
                        <span style="color:red;"></span>
                        </div>
                        <div class="col-lg-auto" style="display: inline-block;">
                            <div style="margin-top: 7.5px;">
                                <select name="PIid1">
                                        <?php 
                                        $obj=new SQL();
                                        if($obj->SQLi()){
                                            $res=$obj->query('SELECT `name`,`EID` from faculty');
                                            while($row=mysqli_fetch_assoc($res)){
                                                if($row['EID']==$result['PIid']){?>
                                                <option value="<?php echo $row["EID"] ?>" selected><?php echo $row["name"] ?></option>
                                            <?php }
                                                else{ ?>
                                                    <option value="<?php echo $row["EID"] ?>"><?php echo $row["name"] ?></option>
                                               <?php }
                                        }  
                                        }  
                                        ?>
                                    </select>
                            </div>
                        </div>

                    </div>
                    <?php
                        $count=1;
                        $newquer='SELECT COPI from patentcopi where PaId='.$cpub[(int)$_GET["editpublication"]].';';
                        $res1=mysqli_query($conn,$newquer);
                        $nrows=mysqli_num_rows($res1);
                        while($row=mysqli_fetch_array($res1)){
                            if($count!=$nrows){
                            ?>
                            
                                <div class="row secondblock">
                                <div class="col-lg-3">
                                <label for="Link">CO Principal Investigator<?php echo " ".$count." ";?>:</label>
                                <span style="color:red;">*</span>
                                </div>
                                <div class="col-lg-auto" style="display: inline-block;">
                                    <div style="margin-top: 7.5px;">
                                        <select name="COPI<?php echo $count;?>">
                                                <?php 
                                                $obj=new SQL();
                                                if($obj->SQLi()){
                                                    $res=$obj->query('SELECT `name`,`EID` from faculty');
                                                    while($row1=mysqli_fetch_assoc($res)){
                                                           if($row1['EID']==$row['COPI']) {?>
                                                        <option value="<?php echo $row1["EID"] ?>" selected><?php echo $row1["name"] ?></option>
                                                        <?php }
                                                        else{ ?>
                                                            <option value="<?php echo $row1["EID"] ?>"><?php echo $row1["name"] ?></option>

                                                       <?php }
                                                       }  
                                                }  
                                                ?>
                                            </select>
                                    </div>
                                </div>
                                <div style="display : inline-block;">
                                        <div style="margin-top: 10px;">
                                           <!-- <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertB(this)"></i> -->
                                        </div>
                                </div>
                            </div>
                       <?php
                            }
                            if($count==$nrows){ ?>
                                <div class="row secondblock">
                                <div class="col-lg-3">
                                <label for="Link">CO Principal Investigator<?php echo " ".$count." ";?>:</label>
                                <span style="color:red;">*</span>
                                </div>
                                <div class="col-lg-auto" style="display: inline-block;">
                                    <div style="margin-top: 7.5px;">
                                        <select name="COPI<?php echo $count;?>">
                                                <?php 
                                                $obj=new SQL();
                                                if($obj->SQLi()){
                                                    $res=$obj->query('SELECT `name`,`EID` from faculty');
                                                    while($row1=mysqli_fetch_assoc($res)){
                                                    if($row1['EID']==$row['COPI']) {?>
                                                        <option value="<?php echo $row1["EID"] ?>" selected><?php echo $row1["name"] ?></option>
                                                        <?php }
                                                        else{ ?>
                                                            <option value="<?php echo $row1["EID"] ?>"><?php echo $row1["name"] ?></option>

                                                       <?php }
                                                      }  
                                                }  
                                                ?>
                                            </select>
                                    </div>
                                </div>
                                <div style="display : inline-block;">
                                        <div style="margin-top: 10px;">
                                           <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertB(this)"></i>
                                           <i class="fa fa-minus-circle" style="color : red; font-size : 20px;" onclick="deleteB(this)"></i>  
                                        </div>
                                </div>
                            </div>
                            <?php    break;
                            } 
                            $count++;
                        }
                    ?>
                    
                    <div class="text-center mt-4" id="appendbefore">
                        <button type="submit" name="MANUALPOSTedit" class="btn btn-success">POST THE DETAILS</button>
                    </div>
        </form>

                </div>
                <script>
                    $('#fullcontainer').append($("#journaledit"));
                    $("#journaledit").css('font-size','14px');
                    $(".dropdown").css('display','none');
                </script>

                <?php
                if(isset($_POST["MANUALPOSTedit"])){
                    $check=0;
                    $str=strtolower($_POST["Title"]);
                    $quer='SELECT PaId,PTitle,PNum from `patents` where PaId!='.$cpub[(int)$_GET['editpublication']].';';
                    $res=mysqli_query($conn,$quer);
                    while($row=mysqli_fetch_assoc($res)){
                        $title=strtolower($row["PTitle"]);
                        similar_text($title,$str,$per);
                        if(($per<=100 && $per>=95)||(($_POST["PNum"])==$row['PNum'])){
                            $check=1;
                            echo "<script>popupform('Your Patent is not EDITED','There is already a Patent under this TITLE or Patent Number')</script>";
                            break;
                        }
                    }
                    if($check==0){
                        $i=1;
                        $noofauth=0;
                            while(isset($_POST["COPI".$i])){
                                $noofauth++;
                                $i++;
                         }
                        $my=explode('-',$_POST["Year"]);
                        $quer='UPDATE `patents` SET `PTitle` = "'.$_POST["Title"].'",`PNum` = '.$_POST["PNum"].',`PIid` = '.$_POST["PIid1"].',`FType` = "'.$_POST["ftype"].'",`Status` = "'.$_POST["fstatus"].'",`Year` = '.$my[0].',`Month` ='.$my[1].',`Details` = "'.$_POST['Details'].'",`OwnerList` = "'.($_POST['authorlist']).'",`PIid`='.$_POST['PIid1'].' where PaId='.$cpub[(int)$_GET['editpublication']].';';
                        if(mysqli_query($conn,$quer)){
                            if(mysqli_query($conn,'DELETE from `patentcopi` where PaId='.$cpub[(int)$_GET['editpublication']].';')){
                                $j=1;
                                while(isset($_POST["COPI".$j])){
                                    if(mysqli_query($conn,'INSERT into `patentcopi`(PaId,COPI) values('.$cpub[(int)$_GET['editpublication']].','.$_POST["COPI".$j].')')){
                                        $j++;
                                    }
                                    else{
                                        break;
                                    }
                                }
                                if($j-1==$noofauth)  echo "<script>popupform('Success','Your Patent has been EDITED')</script>"; 
                                else echo "<script>popupform('Patent not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                            }
                            else{
                                echo "<script>popupform('Patent not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                            } 
                        }
                        else{
                            echo "<script>popupform('Patent not EDITED','Server Error.Sorry for the inconvinience!');</script>"; 
                        }   
                    }
                }  


            }
            if($_GET['type']=='conference'){
                //bookchapter

                $query="SELECT * from bookchapter where BID=".$jpub[(int)$_GET["editpublication"]];
                $res=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($res);
                ?>
                <style>
                span{
                    margin-left: 20px;
                    color:green;
                }
                </style>
                <div id='journaledit' class='mt-5'>
                <h3 style="display: inline-block;;">Edit Book Chapter Details</h3>
                <button type="button" class="close mt-5 closebutton1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script>
                    $(".closebutton1").click(function(){
                        $("#journaledit").hide();
                    });
                </script>
                <hr class="mt-2">
        <form action="./patents.php<?php echo "?editpublication=".$_GET['editpublication']."&type=".$_GET['type'];?>" method="POST">
                <div class="row">
                <div class="col-lg-3">
                <label for="PName">Book Chapter Name : <span style="color : red;">*</span></label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="ChapName" value="<?php echo $result['ChapName'];?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="PName">Book Name : <span style="color : red;">*</span></label>
                </div>
                <div class="col-lg-4">
                <input type="text" name="BName" value="<?php echo $result['BName'];?>" required>
                </div>
            </div>
            <div class="row mt-2 typeIden">
                <div class="col-lg-3">
                    <label for="Ctype">Identification Type :</label>
                </div>
                <div class="col-lg-2">
                    <input type="radio" name="type" value='ISSN' onclick='showISSN()'>
                    <label for="Ctype">ISSN</label>
                </div>
                <div class='col-lg-2'>
                    <input type="radio" name='type' value='ISBN' onclick="showISBN()">
                    <label for="Ctype">ISBN</label>
                </div>
            </div>
            <script>
                function showISSN(){
                    $('.ISSN').remove();
                    $('<div class="row ISSN"><div class="col-lg-3"><label for="ISSN">ISSN :</label></div><div class="col-lg-9"><input type="number" name="ISSN1"  style="display : inline-block;" min="1000" max="9999" ><p style="display : inline-block;">-</p><input type="number" name="ISSN2"  style="display : inline-block;" min="1000" max="9999" ></div></div>').insertAfter($('.typeIden'));
                    $('.ISBN').remove();
                }
                function showISBN(){
                    $('.ISBN').remove();
                    $('<div class="row ISBN"><div class="col-lg-3"><label for="ISSN">ISBN :</label></div><div class="col-lg-9"><input type="number" name="ISBN1"  style="display : inline-block;" ><p style="display : inline-block;">-</p><input type="number" name="ISBN2"  style="display : inline-block;" ><p style="display : inline-block;">-</p><input type="number" name="ISBN3"  style="display : inline-block;" ><p style="display : inline-block;">-</p><input type="number" name="ISBN4"  style="display : inline-block;" ></div></div>').insertAfter($('.typeIden'));
                    $('.ISSN').remove();
                }
            </script>
            <div class="row">
                <div class="col-lg-3">
                <label for="Year">Month and Year :</label>
                </div>
                <div class="col-lg-4">
                    <?php if($result['Month']<10){
                        $month="0".$result['Month'];
                    }
                    else{
                        $month=(string)$result['Month'];
                    } ?>
                <input type="month" name="myear" value="<?php echo $result['Year'].'-'.$month;?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">Proceedings :</label>
                </div>
                <div class="col-lg-9">
                <input type="text" name="Proceedings" value="<?php echo $result['Proceedings'];?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">Pages :</label>
                </div>
                <div class="col-lg-9">
                <input type="number" name="Pages" value="<?php echo $result['Pages'];?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">Issue :</label>
                </div>
                <div class="col-lg-9">
                <input type="number" name="Issue" value="<?php echo $result['Issue'];?>">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">Publisher :</label>
                </div>
                <div class="col-lg-9">
                 <select name="Publisher" id="">
                     <?php
                        for($i=0;$i<sizeof($journalpublisher);$i++){
                            ?>
                            <option value="<?php echo $journalpublisher[$i];?>"><?php echo $journalpublisher[$i];?></option>
                            <?php
                        }
                     ?>
                 </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                <label for="Link">Editor List :</label>
                </div>
                <div class="col-lg-9">
                <input type="text" name="EditorList" value="<?php echo $result['EditorList'];?>">
                </div>
            </div>
            <?php
                        $count=1;
                        $newquer='SELECT EID from bookids where BID='.$jpub[(int)$_GET["editpublication"]].';';
                        $res1=mysqli_query($conn,$newquer);
                        $nrows=mysqli_num_rows($res1);
                        while($row=mysqli_fetch_array($res1)){
                            if($count!=$nrows){
                            ?>
                            
                                <div class="row secondblock">
                                <div class="col-lg-3">
                                <label for="Link">Author<?php echo " ".$count." ";?>:</label>
                                <span style="color:red;">*</span>
                                </div>
                                <div class="col-lg-auto" style="display: inline-block;">
                                    <div style="margin-top: 7.5px;">
                                        <select name="Author<?php echo $count;?>">
                                                <?php 
                                                $obj=new SQL();
                                                if($obj->SQLi()){
                                                    $res=$obj->query('SELECT `name`,`EID` from faculty');
                                                    while($row1=mysqli_fetch_assoc($res)){
                                                           if($row1['EID']==$row['EID']) {?>
                                                        <option value="<?php echo $row1["EID"] ?>" selected><?php echo $row1["name"] ?></option>
                                                        <?php }
                                                        else{ ?>
                                                            <option value="<?php echo $row1["EID"] ?>"><?php echo $row1["name"] ?></option>

                                                       <?php }
                                                       }  
                                                }  
                                                ?>
                                            </select>
                                    </div>
                                </div>
                                <div style="display : inline-block;">
                                        <div style="margin-top: 10px;">
                                           <!-- <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertB(this)"></i> -->
                                        </div>
                                </div>
                            </div>
                       <?php
                            }
                            if($count==$nrows){ ?>
                                <div class="row secondblock">
                                <div class="col-lg-3">
                                <label for="Link">Author<?php echo " ".$count." ";?>:</label>
                                <span style="color:red;">*</span>
                                </div>
                                <div class="col-lg-auto" style="display: inline-block;">
                                    <div style="margin-top: 7.5px;">
                                        <select name="Author<?php echo $count;?>">
                                                <?php 
                                                $obj=new SQL();
                                                if($obj->SQLi()){
                                                    $res=$obj->query('SELECT `name`,`EID` from faculty');
                                                    while($row1=mysqli_fetch_assoc($res)){
                                                    if($row1['EID']==$row['EID']) {?>
                                                        <option value="<?php echo $row1["EID"] ?>" selected><?php echo $row1["name"] ?></option>
                                                        <?php }
                                                        else{ ?>
                                                            <option value="<?php echo $row1["EID"] ?>"><?php echo $row1["name"] ?></option>

                                                       <?php }
                                                      }  
                                                }  
                                                ?>
                                            </select>
                                    </div>
                                </div>
                                <div style="display : inline-block;">
                                        <div style="margin-top: 10px;">
                                           <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertB(this)"></i>
                                           <i class="fa fa-minus-circle" style="color : red; font-size : 20px;" onclick="deleteB(this)"></i>  
                                        </div>
                                </div>
                            </div>
                            <?php    break;
                            } 
                            $count++;
                        }
                    ?>
            <div class="text-center mt-4" id="appendbefore">
                <button type="submit" name="BOOKPOSedit" class="btn btn-success">POST THE DETAILS</button>
            </div>
                
        </form>

                </div>
                <script>
                    $('#fullcontainer').append($("#journaledit"));
                    $("#journaledit").css('font-size','14px');
                    $(".dropdown").css('display','none');
                </script>

                <?php
                if(isset($_POST["BOOKPOSedit"])){
                    if((isset($_POST['ISSN1'])&&isset($_POST['ISSN2']))&&(isset($_POST['ISBN1'])&&isset($_POST['ISBN2'])&&isset($_POST['ISBN3'])&&isset($_POST['ISBN4']))){ ?>
                        <script>
                            popupform('NOT POSTED','Server Error');
                        </script>
                   <?php    die();
                    //var_dump($_POST);
                    //echo $_POST[0];
                    }
                    else if(!((isset($_POST['ISSN1'])&&isset($_POST['ISSN2']))||(isset($_POST['ISBN1'])&&isset($_POST['ISBN2'])&&isset($_POST['ISBN3'])&&isset($_POST['ISBN4'])))){
                        //var_dump($_POST);?>
                            <script>
                                popupform('NOT POSTED','INSERTION');
                            </script>
                    <?php die(); }
                    function isnull($str){
                        if($str=='') return $str=$str.'NULL';
                        else return $str;
                    }
                    $my=explode('-',$_POST["myear"]);
                    $isn='';
                    if(isset($_POST['ISSN1'])){
                            $isn=$_POST['ISSN1'].$_POST['ISSN2'];
                    }
                    else{
                        $isn=$_POST['ISBN1'].$_POST['ISBN2'].$_POST['ISBN3'].$_POST['ISBN4'];
                    }
                    $check=0;
                    $str=strtolower($_POST["ChapName"]);
                    $quer='SELECT BID,ChapName,ISN from `bookchapter` where BID!='.$jpub[(int)$_GET['editpublication']].';';
                    $res=mysqli_query($conn,$quer);
                    while($row=mysqli_fetch_assoc($res)){
                        $title=strtolower($row["ChapName"]);
                        similar_text($title,$str,$per);
                        if(($per<=100 && $per>=95)&&(($isn)==$row['ISN'])){
                            $check=1;
                            echo "<script>popupform('Your BookChapter is not EDITED','There is already a BookChpater under this Chapter Name or ISN Number')</script>";
                            break;
                        }
                    }
                    if($check==0){
                        $i=1;
                        $noofauth=0;
                            while(isset($_POST["Author".$i])){
                                $noofauth++;
                                $i++;
                         }
                        $my=explode('-',$_POST["myear"]);
                        $quer='UPDATE `bookchapter` SET `ChapName` = "'.$_POST["ChapName"].'",`BName` = "'.$_POST["BName"].'",`ISN` = "'.$isn.'",`Proceedings` = "'.$_POST["Proceedings"].'",`Publisher` = "'.$_POST["Publisher"].'",`Year` = '.$my[0].',`Month` ='.$my[1].',`Pages` = '.$_POST['Pages'].',`EditorList` = "'.($_POST['EditorList']).'",`Issue`='.$_POST['Issue'].' where BID='.$jpub[(int)$_GET['editpublication']].';';
                        if(mysqli_query($conn,$quer)){
                            if(mysqli_query($conn,'DELETE from `bookids` where BID='.$jpub[(int)$_GET['editpublication']].';')){
                                $j=1;
                                while(isset($_POST["Author".$j])){
                                    if(mysqli_query($conn,'INSERT into `bookids`(BID,EID) values('.$jpub[(int)$_GET['editpublication']].','.$_POST["Author".$j].')')){
                                        $j++;
                                    }
                                    else{
                                        break;
                                    }
                                }
                                if($j-1==$noofauth)  echo "<script>popupform('Success','Your Book Chapter has been EDITED')</script>"; 
                                else echo "<script>popupform('BookChapter not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                            }
                            else{
                                echo "<script>popupform('Bookchapter not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                            } 
                        }
                        else{
                            echo "<script>popupform('Bookchapter not EDITED','Server Error.Sorry for the inconvinience!');</script>"; 
                        }   
                    }
                }
                
            }
        }
    }

?>  