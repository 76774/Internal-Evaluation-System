<?php
include("admintop.php");
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
$p="select * from feedback where feedbackid='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);
mysqli_close($con);
?>





<meta http-equiv="Content-Language" content="en-us">





<div align="center">
  <center>
<table border="1" cellpadding="0" cellspacing="0"  width="72%" height="300" class="bkwhite" style="border-collapse: collapse" bordercolor="#111111">
  <tr>
    <td width="100%" height="496">
    
    
    
    
    
    
    
    
    <div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" " width="54%" height="152" class="regtab">
    <tr>
      <td width="100%" height="50" colspan="4" class="title" id="border_bottom">View Feedback</td>
    </tr>
    <tr>
      <td width="10%" height="51" id="border_bottom" >&nbsp;</td>
      <td width="26%" height="51" id="border_bottom" class="labels">From</td>
      <td width="55%" height="51" id="border_bottom"><?=$res[1]?></td>
      <td width="9%" height="51" id="border_bottom">&nbsp;</td>
    </tr>
    <tr>
      <td width="10%" height="49" id="border_bottom" >&nbsp;</td>
      <td width="26%" height="49" id="border_bottom" class="labels">Feedback</td>
      <td width="55%" height="49" id="border_bottom"><?=$res[2]?></td>
      <td width="9%" height="49" id="border_bottom">&nbsp;</td>
    </tr>
    <tr>
      <td width="10%" height="49" id="border_bottom">&nbsp;</td>
      <td width="26%" height="49" class="labels" id="border_bottom">Reply</td>
      <td width="55%" height="49" id="border_bottom"><?=$res[3]?></td>
      <td width="9%" height="49" id="border_bottom">&nbsp;</td>
    </tr>
    <tr>
      <td width="100%" height="49" colspan="4" align="center"> <a href="feedback.php"> <b>Back</b> </a></td>
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