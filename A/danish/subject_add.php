<?php
include("validate.php");
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";

if($req=="Submit")
{
$sid=uniqid();
$str=$_REQUEST["stream"];
$sub=$_REQUEST["subname"];
$scode=$_REQUEST["subcode"];
$sem=$_REQUEST["sem"];
$dt=date('d-m-Y h:i:s a');

if(empty($str))
$error="Field Empty..!";


if(empty($sub))
$error="Field Empty..!";

if(empty($scode))
$error="Field Empty..!";

if(empty($error))
{
include("cont.php");
$p="insert into subject (subjectid,stream,subjectname,subjectcode,semester,date)values('$sid','$str','$sub','$scode','$sem','$dt')";
$qry=mysqli_query($con,$p);

$error="Data Insearted Successfully";
}
}



include("admintop.php");
?>
<form action="subject_add.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="72%" height="228" class="bkwhite">
    <tr>
      <td width="100%" height="429">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tab" width="43%" height="218">
          <tr>
            <td width="100%" colspan="4" height="42" class="title" id="border_bottom">Subject form</td>
          </tr>
          <tr>
            <td width="100%" height="16" colspan="4" class="msg"><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="8%" height="47" class="labels" id="border_bottom">&nbsp;</td>
            <td width="24%" height="47" class="labels" id="border_bottom">Stream</td>
            <td width="61%" height="47" id="border_bottom">
            

            
            
           
            
            
            <?php
            include("cont.php");
            $q="select distinct stream from student_detail where status='T'";
            
           
            $qery=mysqli_query($con,$q);
            ?>
             <select size="1" name="stream" class="regdrop">
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
            
            
            <td width="7%" height="47" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="8%" height="47"  class="labels" id="border_bottom">&nbsp;</td>
            <td width="24%" height="47"  class="labels" id="border_bottom">Subject Name</td>
            <td width="61%" height="47" id="border_bottom"><input type="text" name="subname" size="20" class="textbox" autocomplete="off"></td>
            <td width="7%" height="47" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="8%" height="47"  class="labels" id="border_bottom">&nbsp;</td>
            <td width="24%" height="47"  class="labels" id="border_bottom">Subject Code</td>
            <td width="61%" height="47" id="border_bottom"><input type="text" name="subcode" size="20" class="textbox" autocomplete="off"></td>
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
            </select></td>
            <td width="7%" height="47" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="47" colspan="4" align="center">
            <input type="submit" value="Submit" name="action" class="buttons"></td>
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