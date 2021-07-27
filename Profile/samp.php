<form action="../Profile/publications.php" method="POST">

        <!-- Author element added on clicking plus icon -->        

            <div class="row firstblock">
                <div class="col-lg-3">
                <label for="Link">Author 1 :</label>
                <span style="color:red;">(Enter email id)</span>
                </div>
                <div class="col-lg-auto" style="display: inline-block;">
                    <div style="margin-top: 7.5px;">
                        <input type="text" name="Author1" oninput="searchname(this)" autocomplete="off" value="" >
                        <div class="appearfac"></div>
                        <input type="hidden" name="AuthorID1" value="null">
                    </div>
                </div>
                
                <div style="display : inline-block;">
                        <div style="margin-top: 10px;">
                                <!-- onclicking this element (plus icon) insertC function will be triggered-->
                                <i class="fa fa-plus-circle" style="color : green; font-size : 20px;" onclick="insertC(this)"></i>
                        </div>
                </div>
            </div>

            <div class="text-center mt-4" id="appendbefore">
                <button type="submit" name="MANUALPOST" class="btn btn-success">POST THE DETAILS</button>
            </div>
</form>


<script>
    // onclicking plus icon
    function insertC(ele){
        // beforeclone is the object reference for the first element in "firstblock" classList
        var beforeclone=document.getElementsByClassName("firstblock")[0];
        var element = beforeclone.cloneNode(true);
        // clone created
        $(element.children[1].children[0].children[1].children[0]).remove();
        $(element.children[1].children[0].children[0]).val("");
        // adding minus icon for removing the row and on click deleteC will be triggered
        element.children[2].children[0].innerHTML=element.children[2].children[0].innerHTML+'<i class="fa fa-minus-circle"style="color : red; font-size : 20px;" onclick="deleteC(this)"></i>';
        var str=ele.parentElement.parentElement.previousElementSibling.previousElementSibling.children[0].innerHTML;
        $(element.children[1].children[0].children[0]).attr("name","Author"+(parseInt(str.slice(7,str.length-2))+1));
        $(element.children[1].children[0].children[2]).attr("name","AuthorID"+$(element.children[1].children[0].children[0]).attr("name").slice(6));
        element.children[0].children[0].innerHTML="Author "+(parseInt(str.slice(7,str.length-2))+1)+" :";
        // appending the clone in the form
        $(element).insertBefore("#appendbefore");
    }
    function deleteC(ele){
        // removes the element
        $(ele.parentElement.parentElement.parentElement).remove();
    }
</script>    