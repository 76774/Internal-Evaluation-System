<?php
include("validate.php");
$session=$_REQUEST["session"];
$stream=$_REQUEST["stream"];
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="select * from assignment where assignmentid ='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);

include("facultytop.php");
?>



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
             Marks View</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom"  >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Roll No</td>
            <td width="37%" height="47" id="border_bottom" colspan="2"  ><?=$res[1]?></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Name</td>
            <td width="25%" height="47" id="border_bottom"  ><?=$res[2]?></td>
            <td width="16%" height="47" id="border_bottom"  >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom"  >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Stream</td>
            <td width="37%" height="47" id="border_bottom" colspan="2"  ><?=$res[3]?></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Semester</td>
            <td width="25%" height="47" id="border_bottom" ><?=$res[4]?></td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Subject</td>
            <td width="37%" height="47" id="border_bottom" colspan="2" ><?=$res[5]?></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Assignment</td>
            <td width="25%" height="47" id="border_bottom" ><?=$res[6]?></td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Session</td>
            <td width="37%" height="47" id="border_bottom" colspan="2" ><?=$res[7]?></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Max Marks</td>
            <td width="25%" id="border_bottom" height="47" ><?=$res[8]?></td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom"  >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Obtained Marks</td>
            <td width="29%" height="47" id="border_bottom"  ><?=$res[9]?></td>
            <td width="8%" height="47"  align="center" class="labels" id="border_bottom" >&nbsp;</td>
            <td width="17%" height="47" class="labels" id="border_bottom"  >&nbsp;</td>
            <td width="25%" height="47" id="border_bottom" >
            <table border="0" cellpadding="0" cellspacing="0"  width="100%" height="35">
              <tr>
                <td width="33%" height="35">
                </td>
                <td width="36%" height="35" class="labels"> &nbsp;</td>
                <td width="31%" height="35"></td>
              </tr>
            </table>
            </td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" colspan="7" height="47" align="center" >
            <b><a href="assignment_manage.php?session=<?=$session?>&stream=<?=$stream?>">Back</a></b> </td>
          </tr>
          </table>
        </center>
      </div>
      </td>
    </tr>
  </table>
  </center>
</div>
<?php
include("bottom.php");
?>