<?php
include("validate.php");
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");

if($req=="Update")
{
$str=$_REQUEST["stream"];
$sub=$_REQUEST["subname"];
$scode=$_REQUEST["subcode"];
$sem=$_REQUEST["sem"];


if(empty($sub))
$error="Field Empty..!";

if(empty($scode))
$error="Field Empty..!";

if(empty($error))
{
$p="update subject set stream='$str',subjectname='$sub',subjectcode='$scode',semester='$sem' where subjectid='$sid'";
$qry=mysqli_query($con,$p);

$error="Data updated Successfully";
}
}
$q="select * from subject where subjectid='$sid'";

$qrey=mysqli_query($con,$q);
$res=mysqli_fetch_row($qrey);


include("admintop.php");
?>

<form action="subject_update.php" method="post">
<input type="hidden" name="sid" value="<?=$res[0]?>">




<div align="center">
  <center>
  

  <table border="0" cellpadding="0" cellspacing="0" width="72%" height="228" class="bkwhite">
    <tr>
      <td width="100%" height="429">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tab" width="43%" height="218">
          <tr>
            <td width="100%" colspan="4" height="42" class="title" id="border_bottom">
            Update Subject Deatils
</td>
          </tr>
          <tr>
            <td width="100%" height="16" colspan="4" class="msg"><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="8%" height="47" class="labels" id="border_bottom">&nbsp;</td>
            <td width="24%" height="47" class="labels" id="border_bottom">Stream</td>
            <td width="61%" height="47" id="border_bottom">
            

            
            
           
            
        
<select size="1" name="stream" class="regdrop">
<option>BCA</option>
<option>BA</option>
<option>BBA</option>
<option>BSC</option>
<option value="<?=$res[1]?>" selected><?=$res[1]?></option>

</select></td>
            
            
            <td width="7%" height="47" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="8%" height="47"  class="labels" id="border_bottom">&nbsp;</td>
            <td width="24%" height="47"  class="labels" id="border_bottom">Subject Name</td>
            <td width="61%" height="47" id="border_bottom"><input type="text" name="subname" size="20" class="textbox" value="<?=$res[2]?>" autocomplete="off"></td>
            <td width="7%" height="47" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="8%" height="47"  class="labels" id="border_bottom">&nbsp;</td>
            <td width="24%" height="47"  class="labels" id="border_bottom">Subject Code</td>
            <td width="61%" height="47" id="border_bottom"><input type="text" name="subcode" size="20" class="textbox" value="<?=$res[3]?>" autocomplete="off"></td>
            <td width="7%" height="47" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="8%" height="47"  class="labels" id="border_bottom">&nbsp;</td>
            <td width="24%" height="47"  class="labels" id="border_bottom">Semester</td>
            <td width="61%" height="47" id="border_bottom"><select size="1" name="sem" class="regdrop">
           <option>Sem-I</option>
            <option>Sem-II</option>
            <option>Sem-III</option>
            <option>Sem-IV</option>
            <option>Sem-V</option>
<option>Sem-VI</option>
           <option value="<?=$res[4]?>" selected > <?=$res[4]?> </option>


            </select></td>
            <td width="7%" height="47" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="47" colspan="4" align="center">
            <input type="submit" value="Update" name="action" class="buttons"></td>
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