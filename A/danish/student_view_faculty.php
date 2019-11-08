<?php
include("validate.php");
include("facultytop.php");


$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="select * from student_detail where studentid ='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);







?>







<meta http-equiv="Content-Language" content="en-us">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="72%" height="489" class="bkwhite">
  <tr>
    <td width="100%" height="489">
    <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" width="705" height="108" class="viewtbl">
        <tr>
          <td width="701" height="30" colspan="4" class="title" id="border_bottom">Student Details</td>
        </tr>
        <tr>
          <td width="168" height="23" class="labels" id="border_bottom">Name</td>
          <td width="329" colspan="2" height="23" id="border_bottom"><?=$res[1]?></td>
          <td width="204" height="128" rowspan="4" id="border_bottom"><center><img src="upload_pic/<?=$res[14]?>" height="120" width="170"></center></td>
        </tr>
        <tr>
          <td width="168" height="25" class="labels" id="border_bottom">
          Parentage</td>
          <td width="329" colspan="2" height="25" id="border_bottom"><?=$res[2]?></td>
        </tr>
        <tr>
          <td width="168" height="24" class="labels" id="border_bottom">Gender</td>
          <td width="329" colspan="2" height="24" id="border_bottom"><?=$res[3]?></td>
        </tr>
        <tr>
          <td width="168" height="23" class="labels" id="border_bottom">Date Of 
          Birth</td>
          <td width="329" colspan="2" height="23" id="border_bottom"><?=$res[4]?></td>
        </tr>
        <tr>
          <td width="168" height="30" class="labels" id="border_bottom">Contact No</td>
          <td width="212" height="30" id="border_bottom"><?=$res[5]?></td>
          <td width="116" height="30" class="labels" id="border_bottom">Session</td>
          <td width="204" height="30" id="border_bottom"><?=$res[8]?></td>
        </tr>
        <tr>
          <td width="168" height="29" class="labels" id="border_bottom">Guardian Contact No</td>
          <td width="212" height="29" id="border_bottom"><?=$res[6]?></td>
          <td width="116" height="29" class="labels" id="border_bottom">Stream</td>
          <td width="204" height="29" id="border_bottom"><?=$res[9]?> </td>
        </tr>
        <tr>
          <td width="168" height="29" class="labels" id="border_bottom">Category</td>
          <td width="212" height="29" id="border_bottom"><?=$res[7]?></td>
          <td width="116" height="29" class="labels" id="border_bottom">Subject</td>
          <td width="204" height="29" id="border_bottom"><?=$res[10]?></td>
        </tr>
        <tr>
          <td width="168" height="29" class="labels" id="border_bottom">Semester</td>
          <td width="212" height="29" id="border_bottom"><?=$res[11]?></td>
          <td width="116" height="29" class="labels" id="border_bottom">Class Roll No</td>
          <td width="204" height="29" id="border_bottom"><?=$res[12]?></td>
        </tr>
        <tr>
          <td width="168" height="40" class="labels" >Address</td>
          <td width="534" height="40" colspan="3"><?=$res[13]?></td>
        </tr>
      </table>
      </center>
    </div>
    </td>
  </tr>
</table></center>
</div>


<?php
include("bottom.php");
?>