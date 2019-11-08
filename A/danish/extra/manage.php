<?php
$con=new mysqli("localhost","root","","information") or die("Error With Server");
$p="select * from admin";
$qry=mysqli_query($con,$p);

include("top.php");


?>








<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" width="72%" height="248" class="bkwhite">
  <tr>
    <td width="100%" height="353">





<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" width="41%" height="51" class="tbl">
  <tr>
    <td width="11%" height="23" class="border_grn"><center><b>S No</b></center>
    
    </td>
    <td width="50%" height="23" class="border_grn"> <center> <b>Name</b> </center>
    
    </td>
    <td width="14%" height="23" class="border_grn"> <center> <b>Status </b> </center>
    
    </td>
    <td width="13%" height="23"  class="border_grn"> <center> <b>Update </b> </center>
    
    </td>
    <td width="12%" height="23" class="border_grn"> <center> <b>Drop</b> </center>
    
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
    
    <td width="50%" height="27" class="border_btm"><center><?=$res[1]?></center></td>
    
    <td width="14%" height="27" class="border_btm"><center>
   <a href="status.php?sid=<?=$res[0]?>&status=<?=$status?>">  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center></td>
    
    <td width="13%" height="27" class="border_btm"><center>
     <a href="update.php?sid=<?=$res[0]?>"><img border="0" src="images/edit.png" width="19" height="19"></a> </center></td>
    
    <td width="12%" height="27" class="border_btm"><center>
   <a href="delete.php?sid=<?=$res[0]?>"> <img border="0" src="images/drop.png" width="18" height="18"></a> </center></td>
  
  </tr>
  <?php
  $a++;
  }
  ?>
  <tr>
    <td width="11%" height="17"></td>
    <td width="50%" height="17"></td>
    <td width="14%" height="17"></td>
    <td width="13%" height="17"></td>
    <td width="12%" height="17"></td>
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