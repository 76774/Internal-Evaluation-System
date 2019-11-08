<?php
include("validate.php");
$semester=isset($_REQUEST["semester"])?$_REQUEST["semester"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
$session=isset($_REQUEST["session"])?$_REQUEST["session"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
include("cont.php");
if($req == "Update")
{
$stream=$_REQUEST["stream"];
$assignment=$_REQUEST["assignment"];
$subject=$_REQUEST["subject"];
$semester=$_REQUEST["semester"];
$session=$_REQUEST["session"];


$roll=$_REQUEST["roll"];
$temp = explode(",",$roll);
$roll = $temp[0];
$studentid=$temp[2];
$n=$_REQUEST["sname"];
$max=$_REQUEST["max"];
$obt=$_REQUEST["obt"];



if(empty($n))
$error="Field Empty..!";

if(empty($obt))
$error="Field Empty..!";


if(empty($error))
{

$p="update assignment set rollno='$roll',name='$n',stream='$stream',semester='$semester',subject='$subject',assignment='$assignment',session='$session',maxmarks='$max',obtmarks='$obt',refstudentid='$studentid' where assignmentid='$sid'";
$qry=mysqli_query($con,$p);

$error="Data updated Successfully";

}
}
$q="select * from assignment where assignmentid='$sid'";
$qrey=mysqli_query($con,$q);
$res=mysqli_fetch_row($qrey);
include("facultytop.php");
?>
<script language="javascript">

function studentinfo()
{

var x  = new Array();
rn   =    document.getElementById("roll").value;
x        =  rn.split(",");
document.getElementById("sname").value = x[1];
document.getElementById("srno").value = x[0];
return 1;

}

</script>


<form action="assignment_update.php" method="post">
<input type="hidden" name="sid" value="<?=$res[0]?>">
<input type="hidden" name="semester" value"<?=$res[4]?>">
<input type="hidden" name="session" value="<?=$res[7]?>">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0"  width="72%" height="400" class="bkwhite">
    <tr>
      <td width="100%" height="400">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="96%" height="346" class="regtab">
          <tr>
            <td width="100%" colspan="7" class="title" id="border_bottom" height="45">
            Update Assignment Details</td>
          </tr>
          <tr>
            <td width="100%" colspan="7" height="19" class="msg" ><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom"  >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Roll No</td>
            <td width="37%" height="47" id="border_bottom" colspan="2"  >

<?php
            include("cont.php");
            $q="select classrollno,name,studentid from student_detail where status='T' and session='$session' and semester='$semester' order by classrollno asc";
           
             
            $qery=mysqli_query($con,$q);
            ?>



<select size="1" name="roll" id="roll" class="regdrop" onchange="return studentinfo();">
             <?php
            while($rs=mysqli_fetch_row($qery))
            {
            ?>
  <option value='<?=$rs[0].",".$rs[1].",".$rs[2]?>'><?=$rs[0]?></option>
            <?php
            }
            ?>



            <option value='<?=$res[1].",".$res[2].",".$res[12]?>' selected><?=$res[1]?></option>

            </select></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Name</td>
            <td width="25%" height="47" id="border_bottom"  ><input type="text" name="sname" id="sname" size="20" class="textbox" value="<?=$res[2]?>" autocomplete="off"> </td>
            <td width="16%" height="47" id="border_bottom"  >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom"  >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Stream</td>
            <td width="37%" height="47" id="border_bottom" colspan="2"  >
            
            
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
            
             <option value="<?=$res[3]?>" selected> <?=$res[3]?> </option>

</select>
            
            
            
            
            
            </td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Semester</td>
            <td width="25%" height="47" id="border_bottom" >
            <?php
            include("cont.php");
            $q="select distinct semester from student_detail where status='T' order by semester";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="semester" class="regdrop">
           
            
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
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Subject</td>
            <td width="37%" height="47" id="border_bottom" colspan="2" >
            <?php
            include("cont.php");
            $q="select distinct subjectname from subject where status='T' order by subjectname ";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="subject" class="regdrop">
          
            
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
            <td width="17%" height="47" class="labels" id="border_bottom" >
            Assignment</td>
            <td width="25%" height="47" id="border_bottom" >
            
            <?php
            include("cont.php");
            $q="select distinct assignment from assignment where status='T' order by assignment asc";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="assignment" class="regdrop">
           
            
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
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Session</td>
            <td width="37%" height="47" id="border_bottom" colspan="2" >
            
            
            <?php
            include("cont.php");
            $q="select distinct session from student_detail where status='T' order by session";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="session" class="regdrop">
          
            
            <?php
            while($resi=mysqli_fetch_row($qery))
            {
            ?>
  <option value="<?=$resi[0]?>"> <?=$resi[0]?> </option>
            <?php
            }
            ?>
            
             <option value="<?=$res[7]?>" selected> <?=$res[7]?> </option>

</select>

            
            </td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Max Marks</td>
            <td width="25%" id="border_bottom" height="47" ><input type="text" name="max" size="20" class="textbox" value= "<?=$res[8]?>" autocomplete="off"></td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Obtained Marks</td>
            <td width="29%" height="47" id="border_bottom" ><input type="text" name="obt" size="20" class="textbox" value="<?=$res[9]?>" autocomplete="off"></td>
            <td width="8%" height="47" id="border_bottom" align="center" class="labels" >&nbsp;</td>
            <td width="17%" height="47" class="labels" id="border_bottom" >&nbsp;</td>
            <td width="25%" height="47" id="border_bottom" >
            <table border="0" cellpadding="0" cellspacing="0"  width="100%" height="35">
              <tr>
                <td width="33%" height="35">
                &nbsp;</td>
                <td width="36%" height="35" class="labels"> &nbsp;</td>
                <td width="31%" height="35">&nbsp;</td>
              </tr>
            </table>
            </td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" colspan="7" height="47" align="center" >
            <input type="submit" value="Update" name="action" class="buttons"> </td>
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