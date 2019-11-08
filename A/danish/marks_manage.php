<?php
include("validate.php");
$session=$_REQUEST["session"];
$stream=$_REQUEST["stream"];

include("cont.php");
$p="select * from marks where session='$session' and stream='$stream'";
$qry=mysqli_query($con,$p);

include("facultytop.php");


?>


<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="454">
    <tr>
      <td width="100%" height="454">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tbl" width="98%" height="64">
          <tr>
            <td width="37" height="31" align="center" class="border_grn"> <b> S No</td>
            <td width="56" height="31" align="center" class="border_grn"> <b>Roll No</td>
            <td width="95" height="31" class="border_grn"> <b>Name</td>
            <td width="68" height="31" align="center" class="border_grn"> <b>Semester </b></td>
            <td width="215" height="31" align="center" class="border_grn"> <b>Subject </b></td>
            <td width="87" height="31" align="center" class="border_grn"> <b>Max Marks </b></td>
            <td width="85" height="31" align="center" class="border_grn"> <b>Obt Marks </b></td>
            <td width="38" height="31" align="center" class="border_grn"></td>
            <td width="34" height="31" align="center" class="border_grn"></td>
            <td width="38" height="31" align="center" class="border_grn"></td>
            <td width="38" height="31" align="center" class="border_grn"></td>
          </tr>
          
           <?php
  $a=1;
  while($res=mysqli_fetch_row($qry))
  {
  if($res[12]=="T")
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
            <td width="37" height="31" class="border_btm"><center><?=$a?></center></td>
            
            
            
            <td width="56" height="31" class="border_btm"> <center><?=$res[1]?></center></td>
  
          <td width="95" height="31" class="border_btm"><?=$res[2]?></td>

            <td width="68" height="31" class="border_btm"><center><?=$res[4]?></center></td>

            <td width="215" height="31" class="border_btm"><center><?=$res[5]?></center></td>

            <td width="87" height="31" class="border_btm"><center><?=$res[8]?></center></td>

            <td width="85" height="31" class="border_btm"><center><?=$res[9]?></center></td>

            <td width="38" height="31" class="border_btm"> <center>
   <a href="marks_status.php?sid=<?=$res[0]?>&status=<?=$status?>&session=<?=$session?>&stream=<?=$stream?>">
  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center></td>

            <td width="34" height="31" class="border_btm">
            <center>
     <a href="marks_view.php?sid=<?=$res[0]?>&session=<?=$session?>&stream=<?=$stream?>"><img border="0" src="images/view.png" width="19" height="19"></a> </center>
            
            </td>

            <td width="38" height="31" class="border_btm">
            <center>
     <a href="marks_update.php?sid=<?=$res[0]?>&session=<?=$session?>&semester=<?=$res[4]?>"><img border="0" src="images/edit.png" width="19" height="19"></a> </center></td>

            <td width="38" height="31" class="border_btm"><center>
   <a href="marks_delete.php?sid=<?=$res[0]?>&session=<?=$session?>&stream=<?=$stream?>"><img border="0" src="images/drop.png" width="18" height="18"></a> </center></td>
          </tr>
          
           <?php
  $a++;
  }
  ?>

          
          
          
          <tr>
            <td width="37" height="14"></td>
            <td width="56" height="14"></td>
            <td width="95" height="14"></td>
            <td width="68" height="14"></td>
            <td width="215" height="14"></td>
            <td width="87" height="14"></td>
            <td width="85" height="14"></td>
            <td width="38" height="14"></td>
            <td width="34" height="14"></td>
            <td width="38" height="14"></td>
            <td width="38" height="14"></td>
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