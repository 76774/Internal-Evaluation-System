<?php
include("validate.php");
$session=$_REQUEST["session"];
$stream=$_REQUEST["stream"];
$semester=$_REQUEST["semester"];

include("cont.php");

$p="select * from student_detail where session = '$session'  and stream ='$stream' and semester= '$semester'";
$qry=mysqli_query($con,$p);

include("admintop.php");
?>
   <?php
          
         while($res=mysqli_fetch_row($qry))
         {
          
          
          
       ?>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0"  width="72%" height="100" class="bkwhite">
    <tr>
      <td width="100%" height="509">
      
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="regtab" width="100%" height="442">
          <tr>
            <td width="102%" height="33" colspan="9" align="center" class="title" id="border_bottom">REPORT</td>
          </tr>
          <tr>
            <td width="102%" height="16" colspan="9"></td>
          </tr>
          <tr>
       
            <td width="2%" height="41" id="border_bottom">&nbsp;</td>
            <td width="19%" height="41" class="labels" id="border_bottom">Name</td>
            <td width="16%" height="41" class="labels" id="border_bottom"><?=$res[1]?></td>
            <td width="14%" height="41" class="labels" id="border_bottom">Parentage</td>
            <td width="25%" height="41" class="labels" id="border_bottom" colspan="2"><?=$res[2]?></td>
            <td width="21%" height="206" colspan="2" rowspan="5" id="border_bottom"><center><img src="upload_pic/<?=$res[14]?>" height="180" width="220"></center></td>
            <td width="3%" height="41">&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="41" id="border_bottom">&nbsp;</td>
            <td width="19%" height="41" class="labels" id="border_bottom">Date Of Birth</td>
            <td width="16%" height="41" class="labels" id="border_bottom"><?=$res[4]?></td>
            <td width="14%" height="41" class="labels" id="border_bottom">Gender</td>
            <td width="25%" height="41" class="labels" id="border_bottom" colspan="2"><?=$res[3]?></td>
            <td width="3%" height="41" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="41" id="border_bottom">&nbsp;</td>
            <td width="19%" height="41" class="labels" id="border_bottom">Stream</td>
            <td width="16%" height="41" class="labels" id="border_bottom"><?=$res[9]?></td>
            <td width="14%" height="41" class="labels" id="border_bottom">Semester</td>
            <td width="25%" height="41" class="labels" id="border_bottom" colspan="2"><?=$res[11]?></td>
            <td width="3%" height="41" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="41" id="border_bottom">&nbsp;</td>
            <td width="19%" height="41" class="labels" id="border_bottom">Class Roll No</td>
            <td width="16%" height="41" class="labels" id="border_bottom"><?=$res[12]?></td>
            <td width="14%" height="41" class="labels" id="border_bottom">Session</td>
            <td width="25%" height="41" class="labels" id="border_bottom" colspan="2"><?=$res[8]?></td>
            <td width="3%" height="41" class="labels" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="42" id="border_bottom">&nbsp;</td>
            <td width="19%" height="42" class="labels" id="border_bottom">Catagory</td>
            <td width="16%" height="42" class="labels" id="border_bottom"><?=$res[7]?></td>
            <td width="14%" height="42" class="labels" id="border_bottom">Contact No</td>
            <td width="25%" height="42" class="labels" id="border_bottom" colspan="2"><?=$res[5]?></td>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
           
            
           
            
            
          </tr>
          <tr>
            <td width="2%" height="42" id="border_bottom">&nbsp;</td>
            <td width="51%" height="42" colspan="3" align="center" class="labels2" id="border_bottom" >Marks</td>
            <td width="32%" height="42" colspan="3" align="center" class="labels2" id="border_bottom" id="border_left">Assignment</td>
            <td width="14%" height="42" align="center" class="labels2" class="title" id="border_bottom">Attendance</td>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="43" id="border_bottom">&nbsp;</td>
            <td width="19%" height="43" align="left" class="labels2" id="border_bottom">Subject Name</td>
            <td width="16%" height="43" align="center" class="labels2" id="border_bottom">
          <center>  Max Marks </center></td>
            <td width="14%" height="43" align="center" class="labels2" id="border_bottom">
            <center>Obt marks</center></td>
            <td width="9%" height="43" align="center" class="labels2" id="border_bottom">
            <center>Assignment</center></td>
            <td width="12%" height="43" align="center" class="labels2" id="border_bottom">
           <center> Max Marks</center>
          
            </td>
            <td width="11%" height="43" align="center" class="labels2" id="border_bottom">
            <center>Obt Marks</center></td>
            <td width="14%" height="43" align="left" class="labels2" id="border_bottom"><center>Attendance Marks</center></td>
            <td width="3%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <?php
          $q="select * from marks,assignment where  marks.refstudentid=
(select studentid from student_detail where studentid='$res[0]') and 
assignment.refstudentid=(select studentid from student_detail where studentid='$res[0]') 
and marks.refstudentid=assignment.refstudentid and marks.subject = assignment.subject 
order by assignment.subject asc,assignment.assignment asc";
$qery=mysqli_query($con,$q);
             $oldsb = "";

          while($data=mysqli_fetch_row($qery))
         {
             $sb = $data[5];
          if($sb != $oldsb)
             {
              $dis = $sb ;
              $oldsb = $sb; 
              }
          else
              $dis = "";    
          
          ?>
          
          
          
          <tr>
          
          
            <td width="2%" height="42" id="border_bottom"></td>
            <td width="19%" height="42" class="labels" id="border_bottom"><?=$dis?></td>
            <td width="16%" height="42" align="center" class="labels" id="border_bottom"><center><?=$data[8]?></center></td>
            <td width="14%" height="42" align="center" class="labels" id="border_bottom"><center><?=$data[9]?></center></td>
            <td width="11%" height="42" class="labels" id="border_bottom"><center><?=$data[22]?></center></td>
            <td width="11%" height="42" class="labels" id="border_bottom"><center><?=$data[24]?></center></td>
            <td width="10%" height="42" class="labels" id="border_bottom"><center><?=$data[25]?></center></td>
            <td width="14%" height="42" class="labels" id="border_bottom"><center><?=$data[10]?></center></td>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>

          </tr>
          
        <?php
          }
          ?>
          
          
          <tr>
            <td width="102%" height="24" colspan="9">&nbsp;</td>
          </tr>
        </table>
        </center>
      </div>
      
      </td>
    </tr>
    
     
           
  </table>
  </center>
</div>
<br>
<br>
 <?php
    }

include("bottom.php");
?>