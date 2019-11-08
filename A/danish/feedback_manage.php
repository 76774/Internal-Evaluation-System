<?php
include("validate.php");
include("cont.php");
$p="select * from feedback";
$qry=mysqli_query($con,$p);

include("admintop.php");



?>

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="300">
    <tr>
      <td width="100%" height="465">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tbl" width="66%" height="74">
          <tr>
            <td width="13%" height="29" class="border_grn"> <center> <b>Sno</b> </center> </td>
            <td width="19%" height="29" class="border_grn"> <b>From </b></td>
            <td width="27%" height="29" class="border_grn"><center> <b>Feedback </b></center></td>
            <td width="13%" height="29" class="border_grn"> <center>
            <p></p>
            </center></td>
            <td width="14%" height="29" class="border_grn"> <center>
            <p></p>
            </center></td>
            <td width="14%" height="29" class="border_grn"> <center>
            <p></p>
            </center></td>
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
  
  $f=substr($res[2],0,20);
  ?>      
          
          
          
          <tr>
            <td width="13%" height="27" class="border_btm">  <center><?=$a?></center> </td>
            <td width="19%" height="27" class="border_btm"><?=$res[1]?></td>
            <td width="27%" height="27" class="border_btm"><center><?=$f?></center></td>
            <td width="13%" height="27" class="border_btm"><center>
            <a href="feedback_status.php?sid=<?=$res[0]?>&status=<?=$status?>">  <img border="0" src="images/<?=$imgname?>" width="16" height="14"><a/></center>
            
            
            </td>
            <td width="14%" height="27" class="border_btm">        
            <center>  <a href="feedback_reply.php?sid=<?=$res[0]?>">        <img border="0" src="images/reply.png" width="22" height="21"></a></center>
         
            </td>
            <td width="14%" height="27" class="border_btm"><center> 
            
   <a href="feedback_delete.php?sid=<?=$res[0]?>"> <img border="0" src="images/drop.png" width="18" height="18"></a> </center>
            
            </td>
          </tr>
          
          
           <?php
  $a++;
  }
  ?>
          
          
          <tr>
            <td width="13%" height="16"></td>
            <td width="19%" height="16"></td>
            <td width="27%" height="16"></td>
            <td width="13%" height="16"></td>
            <td width="14%" height="16"></td>
            <td width="14%" height="16"></td>
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