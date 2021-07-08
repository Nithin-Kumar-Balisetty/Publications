<?php 
    if(isset($_GET["editpublication"])&isset($_GET['type'])){
        $obj=new SQL();
        $conn=$obj->SQLi();
        if(!$conn) die();
        else{

            if($_GET['type']=='journal'){ 
                $query="SELECT * from journals where JID=".$jpub[(int)$_GET["editpublication"]];
                $res=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($res);
                ?>
                <style>
                span{
                    margin-left: 20px;
                    color:green;
                }
                </style>
                <div id='journaledit'>
                <h3 style="display: inline-block;;">Edit Journal Details</h3>
                <button type="button" class="close mt-5 closebutton1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script>
                    $(".closebutton1").click(function(){
                        $("#journaledit").hide();
                    });
                </script>
                <hr class="mt-2">
                        <form action="./publications.php<?php echo "?editpublication=".$_GET['editpublication']."&type=".$_GET['type'];?>" method="POST">
                        <div class='row' >
                            <p style='color:green;margin-left:15px;'><?php echo "Paper Title(Original Entry) : ".$result['Paper_Title'];?></p>
                        </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="PName">Paper Title : <span style="color : red;">*</span></label>
                        </div>
                        <div class="col-lg-9">
                        <input type="text" name="Title" size="75">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="ConName">Journal Name :</label>
                        </div>
                        <div class="col-lg-8">
                        <input type="text" name="ConferenceName" >
                        <span><?php echo "Original Entry : ".$result['Journal'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="ISSN">ISSN :</label>
                        <span style="color:red;">*</span>
                        </div>
                        <div class="col-lg-9">
                        <input type="number" name="ISSN1"  style="display : inline-block;" min="1000" max="9999">
                        <p style="display : inline-block;">-</p>
                        <input type="number" name="ISSN2"  style="display : inline-block;" min="1000" max="9999">
                        <span><?php echo "Original Entry : ".$result['ISSN'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Listnames">Author's List :</label>
                        <br>
                        <span style='color:red;margin-left:0px'>Enter names seperated by comma</span>
                        </div>
                        <div class="col-lg-9">
                        <input type="text" name="Listnames" size='50'>
                        <span><?php echo "Original Entry : ".$result['AuthorList'];?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3">
                        <label for="VolumeNo">Volume No :</label>
                        </div>
                        <div class="col-lg-4">
                        <input type="number" name="Vol" >
                        <span><?php echo "Original Entry : ".$result['VolNo'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Pages">Issue No :</label>
                        </div>
                        <div class="col-lg-4">
                        <input type="number" name="Issue" >
                        <span><?php echo "Original Entry : ".$result['Issue'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Pages">Pages :</label>
                        </div>
                        <div class="col-lg-4">
                        <input type="number" name="Pages" >
                        <span><?php echo "Original Entry : ".$result['Pages'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Month and Year :</label>
                        <span style='color:red;'>*</span>
                        </div>
                        <div class="col-lg-8">
                        <input type="month" name="Month" >
                        <span><?php echo "Original Entry : ".$months[(int)$result['month']-1]." , ".$result['Year'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Impact factor :</label>
                        <span style='color:red;'>*</span>
                        </div>
                        <div class="col-lg-4">
                        <input type="number" step='any' name="IFactor" >
                        <span><?php echo "Original Entry : ".$result['IFactor'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Publisher :</label>
                        </div>
                        <div class="col-lg-9">
                            <select name="publisher" id="publisher">
                                <?php
                                for($i=0;$i<sizeof($journalpublisher);$i++){
                                    echo '<option value="'.$i.'">'.$journalpublisher[$i].'</option>';
                                }
                                ?>
                            </select>
                            <span><?php echo "Original Entry : ".$result['Publisher'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Open Access :</label>
                        </div>
                        <div class='col-lg-1'>
                            <input type="radio" name='OA' value='1'>
                            <label for='OA'>Yes</label>
                        </div>
                        <div class='col-lg-8'>
                            <input type="radio" name='OA' value='0'>
                            <label for="OA">No</label>
                            <span><?php if($result['OpenAccess']==1) echo "Original Entry : "."Yes"; else echo "Original Entry : "."No"?></span>

                        </div>
                    </div>
                    <div class='row mt-2'>
                    <p style='color:green;margin-left:15px;'><?php 
                    $strn="";
                    for($i=0;$i<sizeof($indexing);$i++){
                        if($result[str_replace(" ","_",str_replace("-",'_',$indexing[$i]))]==1){
                            $strn=$strn.$indexing[$i]." , ";
                        }
                    }
                    echo "Selected Indexing(Original Entry) : ".substr($strn,0,strlen($strn)-3);
                    ?></p>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3">
                        <label for="Year">Indexing :</label>
                        </div>
                        <?php
                            for($i=0;$i<sizeof($indexing);$i++){?>
                            <div class="col-lg-2">
                                <input type="checkbox" name="<?php echo $indexing[$i];?>" value='1'> 
                            <label for="<?php echo $indexing[$i];?>"><?php echo $indexing[$i];?></label>
                            </div>
                        <?php } 
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Link">DOI   :</label>
                        <span style="color:red;">*</span>
                        </div>
                        <div class="col-lg-9">
                        <input type="text" name="Link" required>
                        <span><?php echo "Original Entry : ".$result['DOI'];?></span>
                        </div>
                    </div>
                    <div class='row mt-2'>
                    <p style='color:green;margin-left:15px;'><?php 
                    $query="SELECT name from journalauthor natural join faculty where JID=".$jpub[(int)$_GET['editpublication']];
                    $res=mysqli_query($conn,$query);
                    $strn='';
                    while($row=mysqli_fetch_assoc($res)){
                        $strn=$strn.$row['name']." , ";
                    }
                    echo "Author Names(Original Entry) : ".substr($strn,0,strlen($strn)-3);
                    ?></p>
                    </div>
                    <div class="row firstblock">
                        <div class="col-lg-3">
                        <label for="Link">Author 1 :</label>
                        <span style="color:red;">*</span>
                        </div>
                        <div class="col-lg-auto" style="display: inline-block;">
                            <div style="margin-top: 7.5px;">
                                <select name="Author1" id="">
                                        <?php 
                                        $obj=new SQL();
                                        if($obj->SQLi()){
                                            $res=$obj->query('SELECT `name`,`EID` from faculty');
                                            while($row=mysqli_fetch_assoc($res)){?>
                                                <option value="<?php echo $row["EID"] ?>"><?php echo $row["name"] ?></option>
                                            <?php   }  
                                        }  
                                        ?>
                                    </select>
                            </div>
                        </div>
                        <div style="display : inline-block;">
                                <div style="margin-top: 10px;">
                                    <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertC(this)"></i>
                                </div>
                        </div>
                    </div>
                    <div class="text-center mt-4" id="appendbefore">
                        <button type="submit" name="JournalPOSTEDIT" class="btn btn-success">POST</button>
                    </div>
                </form>
                </div>
                <script>
                    $('#fullcontainer').append($("#journaledit"));
                    $("#journaledit").css('font-size','14px');
                    $(".dropdown").css('display','none');
                </script>
            <?php 
                if(isset($_POST["JournalPOSTEDIT"])){
                        $check=0;
                        $str=strtolower($_POST["Title"]);
                        $quer='SELECT JID,Paper_Title,ISSN from `journals` where JID!='.$jpub[(int)$_GET['editpublication']].';';
                        $res=mysqli_query($conn,$quer);
                        while($row=mysqli_fetch_assoc($res)){
                            $title=strtolower($row["Paper_Title"]);
                            similar_text($title,$str,$per);
                            if(($per<=100 && $per>=95)||(($_POST["ISSN1"].$_POST["ISSN2"])==$row['ISSN'])){
                                $check=1;
                                echo "<script>popupform('Your Publication is not EDITED','There is already a publication under this TITLE or ISSN')</script>";
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
                            $new_str = str_replace(' ', '',$_POST["Listnames"]);
                            $my=explode('-',$_POST["Month"]);
                            $indexstr="`OpenAccess`=".$_POST['OA'];
                            for($j=0;$j<sizeof($indexing);$j++){
                                $indexstr=$indexstr.",`".str_replace(" ","_",str_replace("-",'_',$indexing[$j]))."`";
                                if(isset($_POST[str_replace(" ",'_',$indexing[$j])])){
                                    $indexstr=$indexstr."=1";
                                }
                                else{
                                    $indexstr=$indexstr."=0";
                                }
                            }
                            $quer='UPDATE `journals` SET `Paper_Title` = "'.$_POST["Title"].'",`Journal` = "'.$_POST["ConferenceName"].'",`VolNo` = '.$_POST["Vol"].',`Issue` = '.$_POST["Issue"].',`Pages` = '.$_POST["Pages"].',`Year` = '.$my[0].',`Month` ='.$my[1].',`Publisher` = "'.$journalpublisher[(int)$_POST["publisher"]].'",'.$indexstr.',`No_of_Auth` = '.$noofauth.',`ISSN` = "'.(($_POST["ISSN1"].$_POST["ISSN2"])).'",`DOI` = "'.$_POST["Link"].'",`AuthorList` = "'.$new_str.'",`IFactor` = '.$_POST["IFactor"].' where JID='.$jpub[(int)$_GET['editpublication']].';';
                            if(mysqli_query($conn,$quer)){
                                if(mysqli_query($conn,'DELETE from `journalauthor` where JID='.$jpub[(int)$_GET['editpublication']].';')){
                                    $j=1;
                                    while(isset($_POST["Author".$j])){
                                        if(mysqli_query($conn,'INSERT into `journalauthor`(JID,EID) values('.$jpub[(int)$_GET['editpublication']].','.$_POST["Author".$j].')')){
                                            $j++;
                                        }
                                        else{
                                            break;
                                        }
                                    }
                                    if($j-1==$noofauth)  echo "<script>popupform('Success','Your Journal Publication has been EDITED')</script>"; 
                                    else echo "<script>popupform('Publication not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                                }
                                else{
                                    echo "<script>popupform('Publication not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                                } 
                            }
                            else{
                                echo "<script>popupform('Insert Publication not EDITED','Server Error.Sorry for the inconvinience!');</script>"; 
                            }   
                        }
                }            
            }
            // hey hey
            if($_GET['type']=='conference'){

                $query="SELECT * from publications where PID=".$cpub[(int)$_GET["editpublication"]];
                $res=mysqli_query($conn,$query);
                $result=mysqli_fetch_assoc($res);
                ?>
                <style>
                span{
                    margin-left: 20px;
                    color:green;
                }
                </style>
                <div id='conferenceedit'>
                <h3 style="display: inline-block;">Edit Conference Details</h3>
                <button type="button" class="close mt-5 closebutton1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <script>
                    $(".closebutton1").click(function(){
                        $("#conferenceedit").hide();
                    });
                </script>
                <hr class="mt-2">
                        <form action="./publications.php<?php echo "?editpublication=".$_GET['editpublication']."&type=".$_GET['type'];?>" method="POST">
                        <div class='row' >
                            <p style='color:green;margin-left:15px;'><?php echo "Paper Title(Original Entry) : ".$result['Title'];?></p>
                        </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="PName">Paper Title : <span style="color : red;">*</span></label>
                        </div>
                        <div class="col-lg-9">
                        <input type="text" name="Title" size="75">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="ConName">Conference Name :</label>
                        </div>
                        <div class="col-lg-8">
                        <input type="text" name="ConferenceName" >
                        <span><?php echo "Original Entry : ".$result['ConferenceName'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="ConName">Proceedings :</label>
                        </div>
                        <div class="col-lg-8">
                        <textarea name="Proceedings" id="" cols="40" rows="5"></textarea>
                        <span><?php echo "Original Entry : ".$result['Proceedings'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="ISSN">ISSN :</label>
                        <span style="color:red;">*</span>
                        </div>
                        <div class="col-lg-9">
                        <input type="number" name="ISSN1"  style="display : inline-block;" min="1000" max="9999">
                        <p style="display : inline-block;">-</p>
                        <input type="number" name="ISSN2"  style="display : inline-block;" min="1000" max="9999">
                        <span><?php echo "Original Entry : ".$result['ISSN'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Listnames">Author's List :</label>
                        <br>
                        <span style='color:red;margin-left:0px'>Enter names seperated by comma</span>
                        </div>
                        <div class="col-lg-9">
                        <input type="text" name="Listnames" size='50'>
                        <span><?php echo "Original Entry : ".$result['AuthorList'];?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3">
                        <label for="Ctype">Conference Type :</label>
                        </div>
                        <div class="col-lg-2">
                        <input type="radio" name="Ctype" value='International'>
                        <label for="Ctype">International</label>
                        </div>
                        <div class='col-lg-2'>
                        <input type="radio" name='Ctype' value='National'>
                        <label for="Ctype">National</label>
                        </div>
                        <div class='col-lg-3'>
                            <span><?php echo "Original Entry : ".$result['type'];?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3">
                        <label for="VolumeNo">Volume No :</label>
                        </div>
                        <div class="col-lg-4">
                        <input type="number" name="Vol" >
                        <span><?php echo "Original Entry : ".$result['Vol'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Pages">Pages :</label>
                        </div>
                        <div class="col-lg-4">
                        <input type="number" name="Pages" >
                        <span><?php echo "Original Entry : ".$result['Pages'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Month and Year :</label>
                        <span style='color:red;'>*</span>
                        </div>
                        <div class="col-lg-8">
                        <input type="month" name="Month" >
                        <span><?php echo "Original Entry : ".$months[(int)$result['month']-1]." , ".$result['Year'];?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Year">Open Access :</label>
                        </div>
                        <div class='col-lg-1'>
                            <input type="radio" name='OA' value='1'>
                            <label for='OA'>Yes</label>
                        </div>
                        <div class='col-lg-8'>
                            <input type="radio" name='OA' value='0'>
                            <label for="OA">No</label>
                            <span><?php if($result['OpenAccess']==1) echo "Original Entry : "."Yes"; else echo "Original Entry : "."No"?></span>

                        </div>
                    </div>
                    <div class='row mt-2'>
                    <p style='color:green;margin-left:15px;'><?php 
                    $strn="";
                    for($i=0;$i<sizeof($indexing);$i++){
                        if($result[str_replace(" ","_",str_replace("-",'_',$indexing[$i]))]==1){
                            $strn=$strn.$indexing[$i]." , ";
                        }
                    }
                    echo "Selected Indexing(Original Entry) : ".substr($strn,0,strlen($strn)-3);
                    ?></p>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3">
                        <label for="Year">Indexing :</label>
                        </div>
                        <?php
                            for($i=0;$i<sizeof($indexing);$i++){?>
                            <div class="col-lg-2">
                                <input type="checkbox" name="<?php echo $indexing[$i];?>" value='1'> 
                            <label for="<?php echo $indexing[$i];?>"><?php echo $indexing[$i];?></label>
                            </div>
                        <?php } 
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        <label for="Link">DOI   :</label>
                        <span style="color:red;">*</span>
                        </div>
                        <div class="col-lg-9">
                        <input type="text" name="Link" required>
                        <span><?php echo "Original Entry : ".$result['DOI'];?></span>
                        </div>
                    </div>
                    <div class='row mt-2'>
                    <p style='color:green;margin-left:15px;'><?php 
                    $query="SELECT name from journalauthor natural join faculty where JID=".$jpub[(int)$_GET['editpublication']];
                    $res=mysqli_query($conn,$query);
                    $strn='';
                    while($row=mysqli_fetch_assoc($res)){
                        $strn=$strn.$row['name']." , ";
                    }
                    echo "Author Names(Original Entry) : ".substr($strn,0,strlen($strn)-3);
                    ?></p>
                    </div>
                    <div class="row firstblock">
                        <div class="col-lg-3">
                        <label for="Link">Author 1 :</label>
                        <span style="color:red;">*</span>
                        </div>
                        <div class="col-lg-auto" style="display: inline-block;">
                            <div style="margin-top: 7.5px;">
                                <select name="Author1" id="">
                                        <?php 
                                        $obj=new SQL();
                                        if($obj->SQLi()){
                                            $res=$obj->query('SELECT `name`,`EID` from faculty');
                                            while($row=mysqli_fetch_assoc($res)){?>
                                                <option value="<?php echo $row["EID"] ?>"><?php echo $row["name"] ?></option>
                                            <?php   }  
                                        }  
                                        ?>
                                    </select>
                            </div>
                        </div>
                        <div style="display : inline-block;">
                                <div style="margin-top: 10px;">
                                    <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertC(this)"></i>
                                </div>
                        </div>
                    </div>
                    <div class="text-center mt-4" id="appendbefore">
                        <button type="submit" name="ConferencePOSTEDIT" class="btn btn-success">POST</button>
                    </div>
                </form>
                </div>
                <script>
                    $('#fullcontainer').append($("#conferenceedit"));
                    $("#conferenceedit").css('font-size','14px');
                    $(".dropdown").css('display','none');
                </script>
            <?php 
                if(isset($_POST["ConferencePOSTEDIT"])){
                        $check=0;
                        $str=strtolower($_POST["Title"]);
                        $quer='SELECT PID,Title,ISSN from `publications` where PID!='.$cpub[(int)$_GET['editpublication']].';';
                        $res=mysqli_query($conn,$quer);
                        while($row=mysqli_fetch_assoc($res)){
                            $title=strtolower($row["Title"]);
                            similar_text($title,$str,$per);
                            if(($per<=100 && $per>=95)||(($_POST["ISSN1"].$_POST["ISSN2"])==$row['ISSN'])){
                                $check=1;
                                echo "<script>popupform('Your Publication is not EDITED','There is already a publication under this TITLE or ISSN')</script>";
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
                            $new_str = str_replace(' ', '',$_POST["Listnames"]);
                            $my=explode('-',$_POST["Month"]);
                            $indexstr="`OpenAccess`=".$_POST['OA'];
                            for($j=0;$j<sizeof($indexing);$j++){
                                $indexstr=$indexstr.",`".str_replace(" ","_",str_replace("-",'_',$indexing[$j]))."`";
                                if(isset($_POST[str_replace(" ",'_',$indexing[$j])])){
                                    $indexstr=$indexstr."=1";
                                }
                                else{
                                    $indexstr=$indexstr."=0";
                                }
                            }
                            $quer='UPDATE `publications` SET `Title` = "'.$_POST["Title"].'",`ConferenceName` = "'.$_POST["ConferenceName"].'",`Vol` = '.$_POST["Vol"].',`Proceedings` = "'.$_POST["Proceedings"].'",`Pages` = '.$_POST["Pages"].',`Year` = '.$my[0].',`Month` ='.$my[1].',`type` = "'.$_POST["Ctype"].'",'.$indexstr.',`No_of_Auth` = '.$noofauth.',`ISSN` = "'.(($_POST["ISSN1"].$_POST["ISSN2"])).'",`DOI` = "'.$_POST["Link"].'",`AuthorList` = "'.$new_str.'" where PID='.$cpub[(int)$_GET['editpublication']].';';
                            if(mysqli_query($conn,$quer)){
                                if(mysqli_query($conn,'DELETE from `pubicationauthor` where PID='.$cpub[(int)$_GET['editpublication']].';')){
                                    $j=1;
                                    while(isset($_POST["Author".$j])){
                                        if(mysqli_query($conn,'INSERT into `pubicationauthor`(PID,EID) values('.$cpub[(int)$_GET['editpublication']].','.$_POST["Author".$j].')')){
                                            $j++;
                                        }
                                        else{
                                            break;
                                        }
                                    }
                                    if($j-1==$noofauth)  echo "<script>popupform('Success','Your Journal Publication has been EDITED')</script>"; 
                                    else echo "<script>popupform('Publication not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                                }
                                else{
                                    echo "<script>popupform('Publication not EDITED','Server Error.Sorry for the inconvinience!')</script>"; 
                                } 
                            }
                            else{
                                echo "<script>popupform('Insert Publication not EDITED','Server Error.Sorry for the inconvinience!');</script>"; 
                            }   
                        }
                }



            }
        }
    }
?>