<?php
include("validate.php");



$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";

$stream = $_SESSION["stream"];

$semester = $_SESSION["semester"];

$subject = $_SESSION["subject"];
$session = $_SESSION["sess"];

$lect = $_SESSION["lect"];

if($req == "Submit")
{
$sid=uniqid();
$dt=date('d-m-Y h:i:s A');
$roll=$_REQUEST["roll"];
$temp = explode(",",$roll);
$roll = $temp[0];
$studentid = $temp[2];
$name=$_REQUEST["name"];
$lectatt=$_REQUEST["lectatt"];

if(empty($roll))
$error="Field Empty..!";

if(empty($name))
$error="Field Empty..!";

if(empty($lectatt))
$error="Field Empty..!";

if(empty($error))
{
include("cont.php");
$p="insert into attendance(attendanceid,rollno,name,stream,semester,subject,session,totallectures,lecturesattended,date,refstudentid)
values('$sid',$roll,'$name','$stream','$semester','$subject','$session','$lect','$lectatt','$dt','$studentid')";


$qry=mysqli_query($con,$p);

$error="Data Insearted Successfully";
mysqli_close($con);





}
}
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







<form action="attendance_form2.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite"  width="72%" height="422">
    <tr>
      <td width="100%" height="422">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="regtab" width="86%" height="302">
          <tr>
            <td width="100%" height="46" colspan="6" class="title" id="border_bottom">Attendance Form 2</td>
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
            $q="select classrollno,name,studentid from student_detail where status='T' and session='$session' and semester='$semester' order by classrollno asc";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="roll" id="roll" class="regdrop" onchange="return studentinfo();">
           
            
            <?php
            while($res=mysqli_fetch_row($qery))
            {
            ?>
  <option value='<?=$res[0].",".$res[1].",".$res[2]?>'> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>






























</td>
            

























<td width="16%" height="46" class="labels" id="border_bottom">Name</td>
            <td width="30%" height="46" id="border_bottom"><input type="text" name="name" id="name" size="20" class="textbox" autocomplete="off"></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Stream</td>
            <td width="33%" height="46" id="border_bottom" ><input type="text" name="T1" size="20" class="textbox" value='<?=$stream?>' autocomplete="off"></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Semester</td>
            <td width="30%" height="46" id="border_bottom"><input type="text" name="T1" size="20" class="textbox" value='<?=$semester?>' autocomplete="off"></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">
            Subject</td>
            <td width="33%" height="46" id="border_bottom"><input type="text" name="T1" size="20" class="textbox" value='<?=$subject?>' autocomplete="off"></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Session</td>
            <td width="30%" height="46" id="border_bottom"><input type="text" name="T1" size="20" class="textbox" value='<?=$session?>' autocomplete="off"></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Total Lectures</td>
            <td width="33%" height="46" id="border_bottom"><input type="text" name="T1" size="20" class="textbox" value='<?=$lect?>' autocomplete="off"></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Lectures Attended</td>
            <td width="30%" height="46" id="border_bottom" ><input type="text" name="lectatt" size="20" class="textbox" autocomplete="off"></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="47" colspan="6" align="center">
          <input type="submit" value="Submit" name="action" class="buttons"> <input type="reset" value="Reset" name="B2" class="buttons"></td>
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