<?php
include("validate.php");
include("admintop.php");

include("cont.php");
$p="select * from allotsubject";
$qry=mysqli_query($con,$p);

?>


<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0"  width="72%" height="400" class="bkwhite">
    <tr>
      <td width="100%" height="415">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="94%" height="68" class="tbl">
          <tr>
            <td width="7%" align="center" height="28" class="border_grn"><b>S No</b></td>
            <td width="14%" height="28" class="border_grn"> <b>Faculty Name </b></td>
            <td width="26%" height="28" class="border_grn"> <b>Alloted Subject</td>
            <td width="10%" align="center" height="28" class="border_grn"> <b>
            Session</b></td>
            <td width="9%" align="center" height="28" class="border_grn"> <b>
            Stream</b></td>
            <td width="10%" align="center" height="28" class="border_grn"><b>
            Semester<b></td>
            <td width="6%" align="center" height="28" class="border_grn"></td>
            <td width="6%" align="center" height="28" class="border_grn"></td>
            <td width="6%" align="center" height="28" class="border_grn"></td>
            <td width="6%" align="center" height="28" class="border_grn"></td>
          </tr>
          
          
          <?php
  $a=1;
  while($res=mysqli_fetch_row($qry))
  {
  if($res[7]=="T")
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
            <td width="7%" height="28" class="border_btm" align="center"><?=$a?></td>
            <td width="14%" height="28" class="border_btm"><?=$res[1]?></td>
            <td width="26%" height="28" class="border_btm"><?=$res[2]?></td>
            <td width="10%" height="28" class="border_btm" align="center"><?=$res[4]?></td>
            <td width="9%" height="28" class="border_btm" align="center"><?=$res[5]?></td>
            <td width="10%" height="28" class="border_btm" align="center"><?=$res[6]?></td>
            <td width="6%" height="28" class="border_btm" align="center">
            <center>
   <a href="allotsubject_status.php?sid=<?=$res[0]?>&status=<?=$status?>">
  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center>
            
            
            </td>
            <td width="6%" height="28" class="border_btm" align="center">
            
            
            <center>
     <a href="allotsubject_view.php?sid=<?=$res[0]?>"><img border="0" src="images/view.png" width="19" height="19"></a> </center>
            
            
            </td>
            <td width="6%" height="28" class="border_btm" align="center">
            
            <center>
     <a href="allotsubject_update.php?sid=<?=$res[0]?>"><img border="0" src="images/edit.png" width="19" height="19"></a> </center>
            
            
            </td>
            <td width="6%" height="28" class="border_btm" align="center">
            
            <a href="allotsubject_delete.php?sid=<?=$res[0]?>"><img border="0" src="images/drop.png" width="18" height="18"></a> </center>
            
            
            </td>
          </tr>
          
<?php
$a++;
  }


?>          
          
          
          
          <tr>
            <td width="7%" height="10"></td>
            <td width="14%" height="10"></td>
            <td width="26%" height="10"></td>
            <td width="10%" height="10"></td>
            <td width="9%" height="10"></td>
            <td width="10%" height="10"></td>
            <td width="6%" height="10"></td>
            <td width="6%" height="10"></td>
            <td width="6%" height="10"></td>
            <td width="6%" height="10"></td>
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