<?php
include("validate.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="select * from allotsubject where allotid ='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);


include("facultytop.php");
?>





<form action="allotsubject_add.php"method="post"> 
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="454">
    <tr>
      <td width="100%" height="454">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="regtab" width="55%" height="376">
          <tr>
            <td width="100%" colspan="4" height="43" class="title" id="border_bottom">Allot Subject</td>
          </tr>
          <tr>
            <td width="100%" height="19" colspan="4"></td>
          </tr>
          <tr>
            <td width="10%" height="43" id="border_bottom"></td>
            <td width="40%" height="43" class="labels" id="border_bottom" >Faculty Name</td>
            <td width="38%" height="43" id="border_bottom"> <?=$res[1]?>
            </td>
            <td width="12%" height="43" id="border_bottom"></td>
          </tr>
          <tr>
            <td width="10%" height="43" id="border_bottom">&nbsp;</td>
            <td width="40%" height="43" class="labels" id="border_bottom">Subject Name</td>
            <td width="38%" height="43" id="border_bottom">
            <?=$res[2]?>
            </td>
            <td width="12%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Subject Code</td>
            <td width="38%" height="42" id="border_bottom"><?=$res[3]?></td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Session</td>
            <td width="38%" height="42" id="border_bottom">
            <?=$res[4]?>
        </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Semester</td>
            <td width="38%" height="42" id="border_bottom">
            <?=$res[6]?>
         </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Stream</td>
            <td width="38%" height="42" id="border_bottom">
            
            <?=$res[5]?>
         </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="42" colspan="4" align="center">
            <a href="allotsubject_manage.php"><b>Back</b></a></td>
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