<?php
include("validate.php");
include("cont.php");
$p="select * from account";
$qry=mysqli_query($con,$p);

include("admintop.php");


?>








<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" width="72%" height="300" class="bkwhite">
  <tr>
    <td width="100%" height="353">





<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" width="51%" height="55" class="tbl">
  <tr>
    <td width="15%" height="23" class="border_grn"><center><b>S No</b></center>
    
    </td>
    <td width="27%" height="23" class="border_grn" align="left">  <b>Name</b> 
    
    </td>
    <td width="20%" height="23" class="border_grn"> <center> &nbsp;</center>
    
    </td>
    <td width="21%" height="23"  class="border_grn"> <center> <b>&nbsp;</b></center>
    
    </td>
    <td width="17%" height="23" class="border_grn"> <center> &nbsp;</center>
    
    </td>
  </tr>
  <?php
  $a=1;
  while($res=mysqli_fetch_row($qry))
  {
  if($res[5]=="T")
  {
  $status="F";
  $imgname="on.png";
  }
  else
  {
  $status="T";
  $imgname="off.png";
  }
  ?>
  <tr>
    <td width="11%" height="27" class="border_btm"><center><?=$a?></center></td>
    
    <td width="27%" height="27" class="border_btm"><?=$res[1]?></td>
    
    <td width="17%" height="27" class="border_btm"><center>
   <a href="account_status.php?sid=<?=$res[0]?>&status=<?=$status?>">  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center></td>
    
    <td width="21%" height="27" class="border_btm"><center>
     <a href="account_update.php?sid=<?=$res[0]?>"><img border="0" src="images/edit.png" width="19" height="19"></a> </center></td>
    
    <td width="17%" height="27" class="border_btm"><center>
   <a href="account_delete.php?sid=<?=$res[0]?>"> <img border="0" src="images/drop.png" width="18" height="18"></a> </center></td>
  
  </tr>
  <?php
  $a++;
  }
  ?>
  <tr>
    <td width="15%" height="12"></td>
    <td width="27%" height="12"></td>
    <td width="20%" height="12"></td>
    <td width="21%" height="12"></td>
    <td width="17%" height="12"></td>
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