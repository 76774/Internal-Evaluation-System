<?php
include("validate.php");
include("cont.php");
$p="select * from student_detail";
$qry=mysqli_query($con,$p);
include("admintop.php");
?>

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0"  width="72%" height="419" class="bkwhite">
    <tr>
      <td width="100%" height="419">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="59%" height="41" class="tbl">
          <tr>
            <td width="11%" height="24" class="border_grn"><center><b>S.No</b></center></td>
            <td width="21%" height="24" class="border_grn"> <b>Name </b></td>
            <td width="17%" align="center" height="24" class="border_grn"><b>Stream</b></td>
            <td width="16%" align="center" height="24" class="border_grn"> <b>Session </b></td>
            <td width="11%" align="center" height="24" class="border_grn"> &nbsp;</td>
            <td width="8%" align="center" height="24" class="border_grn"> <b>&nbsp;</b></td>
            <td width="8%" align="center" height="24" class="border_grn"> &nbsp;</td>
            <td width="8%" align="center" height="24" class="border_grn"> <b>&nbsp;</b></td>
          </tr>
          
          
          <?php
  $a=1;
  while($res=mysqli_fetch_row($qry))
  {
  if($res[15]=="T")
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
            <td width="11%" height="29"  class="border_btm"><center><?=$a?></center></td>
            <td width="21%" height="29"  class="border_btm">
            <?=$res[1]?> 
            </td>
            
            <td width="17%" height="29"  class="border_btm">
          <center><?=$res[9]?>   </center>
            </td>
            
            <td width="16%" height="29"  class="border_btm">
             <center>   <?=$res[8]?> </center>
            </td>
            
            
            
            <td width="11%" height="29"  class="border_btm"><center>  <a href="student_status.php?sid=<?=$res[0]?>&status=<?=$status?>">  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center></td>
            
            
            <td width="8%" height="29"  class="border_btm"><center>
            <a href="student_view.php?sid=<?=$res[0]?>"><img border="0" src="images/view.png" width="19" height="16"></center></a>
            
            </td>
            <td width="8%" height="29"  class="border_btm">
            <center>
     <a href="student_update.php?sid=<?=$res[0]?>"><img border="0" src="images/edit.png" width="19" height="16"></a> </center>
            </td>
            <td width="8%" height="29"  class="border_btm">
            <center>
   <a href="student_delete.php?sid=<?=$res[0]?>"> <img border="0" src="images/drop.png" width="18" height="18"></a> </center>
            </td>
          </tr>
          
<?php
  $a++;
  }
  ?>
          
          
          
          
          
          <tr>
            <td width="11%" height="12"></td>
            <td width="21%" height="12"></td>
            <td width="17%" height="12"></td>
            <td width="16%" height="12"></td>
            <td width="11%" height="12"></td>
            <td width="8%" height="12"></td>
            <td width="8%" height="12"></td>
            <td width="8%" height="12"></td>
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