<?php


include("validate.php");
$session=$_REQUEST["session"];
$stream=$_REQUEST["stream"];



include("cont.php");
$p="select * from attendance where session='$session' and stream='$stream'";
$qry=mysqli_query($con,$p);
include("facultytop.php");
?>


<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="492">
    <tr>
      <td width="100%" height="492">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tbl" width="88%" height="56">
          <tr>
            <td width="7%" height="27" align="center" class="border_grn"></b>S No</b></td>
            <td width="10%" height="27" align="center" class="border_grn"><b>Roll No</b></td>
            <td width="15%" height="27" class="border_grn"><b>Name</b></td>
            <td width="17%" height="27" align="center" class="border_grn"><b>Lectures Attended</b></td>
            <td width="14%" height="27" align="center" class="border_grn"><b>Total Lectures</b></td>
            <td width="9%" height="27" align="center" class="border_grn"></td>
            <td width="10%" height="27" align="center" class="border_grn"></td>
            <td width="9%" height="27" align="center" class="border_grn"></td>
            <td width="9%" height="27" align="center" class="border_grn"></td>
          </tr>
          
           <?php
  $a=1;
  while($res=mysqli_fetch_row($qry))
  {
  if($res[9]=="T")
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
            <td width="7%" height="29"  class="border_btm" align="center"><center>
            <?=$a?></center>
            
            </td>
            
            
            
            
            <td width="10%" height="29"  class="border_btm" align="center">
            
            <?=$res[1]?>
            </td>
            
            
            
            
            <td width="15%" height="29"  class="border_btm"> <?=$res[2]?></td>
            
            
            
            <td width="17%" height="29"  class="border_btm" align="center"> <?=$res[8]?></td>
            
            
            
            <td width="14%" height="29"  class="border_btm" align="center"> <?=$res[7]?></td>
            
            
            
            <td width="9%" height="29"  class="border_btm" align="center">
            <center>  <a href="attendance_status.php?sid=<?=$res[0]?>&status=<?=$status?>&session=<?=$session?>&stream=<?=$stream?>">  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center>
            
            </td>
            
            
            
            <td width="10%" height="29"  class="border_btm" align="center">
            <center>
            <a href="attendance_view.php?sid=<?=$res[0]?>&session=<?=$session?>&stream=<?=$stream?>"><img border="0" src="images/view.png" width="19" height="16"></center></a>

            
            </td>
            
            
            
            <td width="9%" height="29"  class="border_btm" align="center">
            
            <center>
     <a href="attendance_update.php?sid=<?=$res[0]?>&session=<?=$session?>&semester=<?=$res[4]?>"><img border="0" src="images/edit.png" width="19" height="16"></a> </center>

            </td>
            
            
            
            <td width="9%" height="29"  class="border_btm" align="center">
            <a href="attendance_delete.php?sid=<?=$res[0]?>&session=<?=$session?>&stream=<?=$stream?>"> <img border="0" src="images/drop.png" width="18" height="18"></a> </center>

            
            </td>
          </tr>
          
<?php
  $a++;
  }
  ?>
          
          
          
          
          <tr>
            <td width="7%" height="14"></td>
            <td width="10%" height="14"></td>
            <td width="15%" height="14"></td>
            <td width="17%" height="14"></td>
            <td width="14%" height="14"></td>
            <td width="9%" height="14"></td>
            <td width="10%" height="1"></td>
            <td width="9%" height="1"></td>
            <td width="9%" height="1"></td>
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