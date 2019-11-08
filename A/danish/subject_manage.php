<?php
include("validate.php");
include("cont.php");
$p="select * from subject";
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
  <table border="0" cellpadding="0" cellspacing="0" class="tbl" width="85%" height="1">
    <tr>
      <td width="7%" height="26" class="border_grn" align="center"><b>S No</b></td>
      <td width="30%" height="26" class="border_grn"><b>Subject Name</b></td>
      <td width="13%" align="center" height="26" class="border_grn"><b>Subject Code</b></td>
      <td width="12%" align="center" height="26" class="border_grn"><b>Stream</b></td>
      <td width="12%" align="center" height="26" class="border_grn"><b>Semester</b></td>
      <td width="7%" align="center" height="26" class="border_grn"></td>
      <td width="8%" align="center" height="26" class="border_grn"></td>
      <td width="11%" align="center" height="26" class="border_grn"></td>
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
      <td width="9%" height="26" class="border_btm"><center><?=$a?></center>
      
      </td>
      <td width="30%" height="26" class="border_btm"><?=$res[2]?></td>
      <td width="15%" height="26" class="border_btm"><center><?=$res[3]?></center></td>
      <td width="12%" height="26" class="border_btm"><center><?=$res[1]?></center></td>
      <td width="12%" height="26" class="border_btm"><center><?=$res[4]?></center></td>
      <td width="7%" height="26" class="border_btm">
      <center>
   <a href="subject_status.php?sid=<?=$res[0]?>&status=<?=$status?>">  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center>
      
      </td>
      <td width="8%" height="26" class="border_btm">
      <center>
     <a href="subject_update.php?sid=<?=$res[0]?>"><img border="0" src="images/edit.png" width="19" height="19"></a> </center>
      
      
      </td>
      <td width="11%" height="26" class="border_btm">
      <center>
   <a href="subject_delete.php?sid=<?=$res[0]?>"> <img border="0" src="images/drop.png" width="18" height="18"></a> </center>
      
      
      </td>
    </tr>
    <?php
  $a++;
  }
  ?>

    
    
    
    <tr>
      <td width="7%" height="14"></td>
      <td width="30%" height="14"></td>
      <td width="13%" height="14"></td>
      <td width="12%" height="14"></td>
      <td width="12%" height="14"></td>
      <td width="7%" height="14"></td>
      <td width="8%" height="14"></td>
      <td width="11%" height="14"></td>
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