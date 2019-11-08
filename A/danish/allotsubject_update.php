<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
include("cont.php");
if($req=="Update")
{

$facname=$_REQUEST["facname"];
$subname=$_REQUEST["subname"];
$subcode=$_REQUEST["subcode"];
$ses=$_REQUEST["ses"];
$sem=$_REQUEST["sem"];
$stream=$_REQUEST["stream"];


if(empty($subcode))
$error="Field Empty..!";


if(empty($error))
{
$p="update allotsubject set facultyname='$facname',subjectname='$subname',subjectcode='$subcode',session='$ses',stream='$stream',semester='$sem' where allotid='$sid'";

$qry=mysqli_query($con,$p);
$error="Data Updated Successfully";

}
}



$q="select * from allotsubject where allotid='$sid'";

$qrey=mysqli_query($con,$q);
$res=mysqli_fetch_row($qrey);

include("admintop.php");
?>





<form action="allotsubject_update.php"method="post">
<input type="hidden" name="sid" value="<?=$res[0]?>">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="454">
    <tr>
      <td width="100%" height="454">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tbl" width="55%" height="376">
          <tr>
            <td width="100%" colspan="4" height="43" class="title" id="border_bottom">Update Alloted Subject</td>
          </tr>
          <tr>
            <td width="100%" height="19" colspan="4" class="msg"><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="10%" height="43" id="border_bottom">&nbsp;</td>
            <td width="40%" height="43" class="labels" id="border_bottom" >Faculty Name</td>
            <td width="38%" height="43" id="border_bottom">
            <?php
            include("cont.php");
            $q="select distinct name from account where status='T' and type <> 'S' order by name";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="facname" class="regdrop">
          
          
          <?php
            while($resi=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$resi[0]?>"> <?=$resi[0]?> </option>
            <?php
            }
           
            ?>
  <option value="<?=$res[1]?>" selected> <?=$res[1]?> </option>        
          </select>            
            
            
            
            </td>
            <td width="12%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="43" id="border_bottom">&nbsp;</td>
            <td width="40%" height="43" class="labels"id="border_bottom">Subject Name</td>
            <td width="38%" height="43" id="border_bottom">
            
            <?php
            include("cont.php");
            $q="select distinct subjectname from subject where status='T' order by subjectname";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="subname" class="regdrop">
        
          
          <?php
            while($resi=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$resi[0]?>"> <?=$resi[0]?> </option>
            <?php
            }
           
            ?>
          <option value="<?=$res[2]?>" selected> <?=$res[2]?> </option>
          </select>
            
            
            </td>
            <td width="12%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Subject Code</td>
            <td width="38%" height="42" id="border_bottom"><input type="text" name="subcode" size="20" class="textbox" value="<?=$res[3]?>"></td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Session</td>
            <td width="38%" height="42" id="border_bottom">
            
            <?php
            include("cont.php");
            $q="select distinct session from student_detail where status='T' order by session";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="ses" class="regdrop">
          
          
          <?php
            while($resi=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$resi[0]?>"> <?=$resi[0]?> </option>
            <?php
            }
           
            ?>
          
          <option value="<?=$res[4]?>" selected> <?=$res[4]?> </option>

          </select>
            
            
            </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Semester</td>
            <td width="38%" height="42" id="border_bottom">
            
            <?php
            include("cont.php");
            $q="select distinct semester from student_detail where status='T' order by semester";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>

        
          
          <select size="1" name="sem" class="regdrop">
           <?php
           
            while($resi=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$resi[0]?>"> <?=$resi[0]?> </option>
            <?php
            }
           
            ?>

          
      

           <option value="<?=$res[6]?>" selected> <?=$res[6]?> </option>

          
          </select>
            
            
            
            </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Stream</td>
            <td width="38%" height="42" id="border_bottom">
            
            
            <?php
            include("cont.php");
            $q="select distinct stream from student_detail where status='T' order by stream";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="stream" class="regdrop">
          
          
          <?php
            while($resi=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$resi[0]?>"> <?=$resi[0]?> </option>
            <?php
            }
           
            ?>
<option value="<?=$res[5]?>" selected> <?=$res[5]?> </option>
          
          </select>
            
            
            </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="42" colspan="4" align="center">
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