<?php
include("validate.php");
$semester=isset($_REQUEST["semester"])?$_REQUEST["semester"]:"";
$session=isset($_REQUEST["session"])?$_REQUEST["session"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
if($req=="Update")
{
$roll=$_REQUEST["roll"];
$temp = explode(",",$roll);

$rollno          = $temp[0];
$studentid    =$temp[2];

$name=$_REQUEST["name"];
$str=$_REQUEST["stream"];
$subject=$_REQUEST["subject"];
$semester=$_REQUEST["semester"];
$session=$_REQUEST["session"];
$totlect=$_REQUEST["totlect"];
$lectatt=$_REQUEST["lectatt"];

if(empty($name))
$error="Field Empty..!";

if(empty($totlect))
$error="Field Empty..!";

if(empty($lectatt))
$error="Field Empty..!";

if(empty($error))
{



$p="update attendance set rollno='$rollno',name='$name',stream='$str',subject='$subject',semester='$semester',session='$session',totallectures='$totlect',lecturesattended='$lectatt',refstudentid='$studentid' where attendanceid='$sid'";
$qry=mysqli_query($con,$p);

$error="Data updated Successfully";

}
}
$p="select * from attendance where attendanceid='$sid'";

$qrey=mysqli_query($con,$p);
$res=mysqli_fetch_row($qrey);








include("facultytop.php");
?>


<script language="javascript">

function studentinfo()
{

var x  = new Array();


rn   =    document.getElementById("roll").value;
x        =  rn.split(",");





document.getElementById("name").value = x[1];
document.getElementById("srno").value = x[0];
return 1;

}

</script>




<form action="attendance_update.php" method="post">

<input type="hidden" name="sid" value="<?=$res[0]?>">
<input type="hidden" name="session" value="<?=$res[6]?>">
<input type="hidden" name="semester" value="<?=$res[4]?>">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite"  width="72%" height="422">
    <tr>
      <td width="100%" height="422">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="regtab" width="86%" height="302">
          <tr>
            <td width="100%" height="46" colspan="6" class="title" id="border_bottom">
            Update Attendance Details</td>
          </tr>
          <tr>
            <td width="100%" height="19" colspan="6" class="msg"><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Roll No</td>
            <td width="33%" height="46" id="border_bottom">
            
            <?php
            include("cont.php");
            $q="select distinct classrollno,name,studentid from student_detail where status='T' and session='$session'and semester='$semester' order by classrollno";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="roll" id="roll" class="regdrop" onchange="return studentinfo();">
           
            
            <?php
            while($rs=mysqli_fetch_row($qery))
            {
            ?>
  <option value='<?=$rs[0].",".$rs[1].",".$rs[2]?>'> <?=$rs[0]?> </option>
            <?php
            }
            ?>
            
            
            
            
            <option value='<?=$res[1].",".$res[2].",".$res[11]?>' selected><?=$res[1]?> </option>

</select>
            
            
            
            
            
            </td>
            <td width="16%" height="46" class="labels" id="border_bottom">Name</td>
            <td width="30%" height="46" id="border_bottom"><input type="text" name="name" id="name" size="20" class="textbox" value="<?=$res[2]?>"></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Stream</td>
            <td width="33%" height="46" id="border_bottom" >
            
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
            <td width="16%" height="46" class="labels" id="border_bottom">Semester</td>
            <td width="30%" height="46" id="border_bottom">
            
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
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">
            Subject</td>
            <td width="33%" height="46" id="border_bottom">
            
            
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
            <td width="16%" height="46" class="labels" id="border_bottom">Session</td>
            <td width="30%" height="46" id="border_bottom">
            
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
            
             <option value="<?=$res[6]?>" selected> <?=$res[6]?> </option>

</select>

            
            
            
            
            
            
            
            
            
            
            </td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Total Lectures</td>
            <td width="33%" height="46" id="border_bottom"><input type="text" name="totlect" size="20" class="textbox" value='<?=$res[7]?>' autocomplete="off"></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Lectures Attended</td>
            <td width="30%" height="46" id="border_bottom" ><input type="text" name="lectatt" size="20" class="textbox" value='<?=$res[8]?>' autocomplete="off"></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="47" colspan="6" align="center">
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