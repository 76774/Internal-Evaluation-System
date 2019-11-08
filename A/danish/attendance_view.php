<?php
include("validate.php");
$session=$_REQUEST["session"];
$stream=$_REQUEST["stream"];



$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="select * from attendance where attendanceid ='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);

include("facultytop.php");
?>

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
            <td width="100%" height="46" colspan="6" class="title" id="border_bottom">
            Attendance Details</td>
          </tr>
          <tr>
            <td width="100%" height="19" colspan="6" class="msg"></td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Roll No</td>
            <td width="33%" height="46" id="border_bottom"><?=$res[1]?></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Name</td>
            <td width="30%" height="46" id="border_bottom"><?=$res[2]?></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Stream</td>
            <td width="33%" height="46" id="border_bottom" ><?=$res[3]?></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Semester</td>
            <td width="30%" height="46" id="border_bottom"><?=$res[4]?></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">
            Subject</td>
            <td width="33%" height="46" id="border_bottom"><?=$res[5]?></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Session</td>
            <td width="30%" height="46" id="border_bottom"><?=$res[6]?></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="46" id="border_bottom">&nbsp;</td>
            <td width="14%" height="46" class="labels" id="border_bottom">Total Lectures</td>
            <td width="33%" height="46" id="border_bottom"><?=$res[7]?></td>
            <td width="16%" height="46" class="labels" id="border_bottom">Lectures Attended</td>
            <td width="30%" height="46" id="border_bottom" ><?=$res[8]?></td>
            <td width="4%" height="46" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="47" colspan="6" align="center"><a href="attendance_manage.php?&session=<?=$session?>&stream=<?=$stream?>">
          <b>Back</b></a></td>
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