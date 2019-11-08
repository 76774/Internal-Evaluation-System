<?php
include("validate.php");
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";

$req = isset($_REQUEST["action"])?$_REQUEST["action"]:"";


if($req=="Next")
{
$str = $_REQUEST["str"];
$sem = $_REQUEST["sem"];
$sub=   $_REQUEST["sub"];
$test= $_REQUEST["test"];
$ses= $_REQUEST["ses"];
$marks= $_REQUEST["marks"];

if(empty($str))
$error="Field Empty..!";

if(empty($marks))
$error="Field Empty..!";

if(empty($error))
{
$_SESSION["stream"] = $str;

$_SESSION["semester"]=$sem;
$_SESSION["subject"]=$sub;
$_SESSION["test"]=$test;
$_SESSION["sess"]=$ses;
$_SESSION["marks"]=$marks;
header("location:marks_form2.php");
}
}



include("facultytop.php");
?>




<form action="marks_form1.php" method="post">
<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" width="72%" height="474" class="bkwhite" >
  <tr>
    <td width="100%" height="474">
    <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" width="90%" height="209" class="regtab">
        <tr>
          <td width="100%" colspan="6" height="42" class="title" id="border_bottom">Marks form 1</td>
        </tr>
        <tr>
          <td width="100%" colspan="6" height="27" class="msg"><center><?=$error?></center></td>
        </tr>
        <tr>
          <td width="3%" height="48" id="border_bottom">&nbsp;</td>
          <td width="12%" height="48" class="labels" id="border_bottom">Stream</td>
          <td width="37%" height="48" id="border_bottom">
          <?php
            include("cont.php");
            $q="select distinct stream from student_detail where status='T' order by stream asc";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="str" class="regdrop">
           <option value="">Select stream from..</option>
            
            <?php
            while($res=mysqli_fetch_row($qery))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select></td>
          <td width="14%" height="48" class="labels" id="border_bottom">Semester</td>
          <td width="29%" height="48" id="border_bottom">
          

<?php
            
            $r="select distinct semester from student_detail where status='T' order by semester asc";
            
           
            $qeury=mysqli_query($con,$r);
            ?>
<select size="1" name="sem" class="regdrop">
           
            
            <?php
            while($res=mysqli_fetch_row($qeury))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>




</td>
          <td width="5%" height="48" id="border_bottom">&nbsp;</td>
        </tr>
        <tr>
          <td width="3%" height="47" id="border_bottom">&nbsp;</td>
          <td width="12%" height="47" class="labels" id="border_bottom">Subject</td>
          <td width="37%" height="47" id="border_bottom">



<?php
            
            $r="select distinct subjectname from subject where status='T' order by subjectname asc";
            
           
            $qeury=mysqli_query($con,$r);
            ?>
<select size="1" name="sub" class="regdrop">
           
            
            <?php
            while($res=mysqli_fetch_row($qeury))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>


          










</td>
          <td width="14%" height="47" class="labels" id="border_bottom">Internal Exam</td>
          <td width="29%" height="47" id="border_bottom">
          <select size="1" name="test" class="regdrop">
          <option>Internal-1</option>
          
          </select></td>
          <td width="5%" height="47" id="border_bottom">&nbsp;</td>
        </tr>
        <tr>
          <td width="3%" height="46" id="border_bottom">&nbsp;</td>
          <td width="12%" height="46" class="labels" id="border_bottom">Session</td>
          <td width="37%" height="46" id="border_bottom">
          

<?php
            
            $r="select distinct session from student_detail where status='T' order by session asc";
            
           
            $qeury=mysqli_query($con,$r);
            ?>
<select size="1" name="ses" class="regdrop">
           
            
            <?php
            while($res=mysqli_fetch_row($qeury))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>






</td>
          <td width="14%" height="46" class="labels" id="border_bottom">Max Marks</td>
          <td width="29%" height="46" id="border_bottom">
          <input type="text" name="marks" size="20" class="textbox" autocomplete="off"></td>
          <td width="5%" height="46" id="border_bottom">&nbsp;</td>
        </tr>
        <tr>
          <td width="121%" colspan="6" height="47" align="center" >
          <input type="submit" value="Next" name="action" class="buttons">
          <input type="reset" value="Reset" name="B2" class="buttons"></td>
        </tr>
      </table>
      </center>
    </div>
    </td>
  </tr>
</table>

  </center>
</div>
</form>



<?php
include("bottom.php");
?>