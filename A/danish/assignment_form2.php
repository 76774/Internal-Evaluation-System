<?php
include("validate.php");
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";

$stream = $_SESSION["stream"];

$semester = $_SESSION["semester"];

$subject = $_SESSION["subject"];
$session = $_SESSION["sess"];

$assignment = $_SESSION["assignment"];
$max=$_SESSION["marks"];


if($req == "Submit")
{
$sid=uniqid();
$roll=$_REQUEST["roll"];

$temp = explode(",",$roll);

$roll = $temp[0];
$studentid  = $temp[2];


$sname=$_REQUEST["sname"];

$obt=$_REQUEST["obt"];

$dt=date('d-m-Y h:i:s A');

if(empty($sname))
$error="Field Empty..!";

if(empty($obt))
$error="Field Empty..!";

if(empty($error))
{
include("cont.php");
$p="insert into assignment(assignmentid,rollno,name,stream,semester,subject,assignment,session,maxmarks,obtmarks,
date,refstudentid)
values('$sid',$roll,'$sname','$stream','$semester','$subject','$assignment','$session','$max','$obt','$dt','$studentid')";
$qry=mysqli_query($con,$p);

$error="Data Insearted Successfully";
mysqli_close($con);
}
}




include("facultytop.php");
?>
<script language="javascript">

function studentinfo()
{

var x  = new Array();
rn   =    document.getElementById("roll").value;
x        =  rn.split(",");
document.getElementById("sname").value = x[1];
document.getElementById("srno").value = x[0];

return 1;
}

</script>
<form action="assignment_form2.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0"  width="72%" height="400" class="bkwhite">
    <tr>
      <td width="100%" height="400">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="96%" height="346" class="regtab">
          <tr>
            <td width="100%" colspan="7" class="title" id="border_bottom" height="45">
            Assignment form 2</td>
          </tr>
          <tr>
            <td width="100%" colspan="7" height="19" class="msg" ><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom"  >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Roll No</td>
            <td width="37%" height="47" id="border_bottom" colspan="2"  >



<?php
            include("cont.php");
            $q="select classrollno,name,studentid from student_detail where status='T' and session='$session' and semester='$semester' order by classrollno asc";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="roll" id="roll" class="regdrop" onchange="return studentinfo();">
           
            
            <?php
            while($res=mysqli_fetch_row($qery))
            {
            ?>
  <option value='<?=$res[0].",".$res[1].",".$res[2]?>'> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>
</td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Name</td>
            <td width="25%" height="47" id="border_bottom">
             <input type="text" name="sname" id="sname" size="20" class="textbox" autocomplete="off" ></td>
            <td width="16%" height="47" id="border_bottom"  >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom"  >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Stream</td>
            <td width="37%" height="47" id="border_bottom" colspan="2"  ><input type="text" name="stream" size="20" class="textbox" value='<?=$stream?>' autocomplete="off"></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Semester</td>
            <td width="25%" height="47" id="border_bottom" ><input type="text" name="semester" size="20" class="textbox" value='<?=$semester?>' autocomplete="off" ></td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Subject</td>
            <td width="37%" height="47" id="border_bottom" colspan="2" ><input type="text" name="subject" size="20" class="textbox" value='<?=$subject?>' autocomplete="off" ></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >
            Assignment</td>
            <td width="25%" height="47" id="border_bottom" ><input type="text" name="tes" size="20" class="textbox" value = '<?=$assignment?>' autocomplete="off" > </td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Session</td>
            <td width="37%" height="47" id="border_bottom" colspan="2" ><input type="text" name="session" size="20" class="textbox" value='<?=$session?>' autocomplete="off"></td>
            <td width="17%" height="47" class="labels" id="border_bottom" >Max Marks</td>
            <td width="25%" id="border_bottom" height="47" ><input type="text" name="max" size="20" class="textbox" value= '<?=$max?>' autocomplete="off"></td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="2%" height="47" id="border_bottom" >&nbsp;</td>
            <td width="15%" height="47" class="labels" id="border_bottom" >Obtained Marks</td>
            <td width="29%" height="47" id="border_bottom" ><input type="text" name="obt" size="20" class="textbox" autocomplete="off"></td>
            <td width="8%" height="47" id="border_bottom" align="center" class="labels" >&nbsp;</td>
            <td width="17%" height="47" class="labels" id="border_bottom" >&nbsp;</td>
            <td width="25%" height="47" id="border_bottom" >
            <table border="0" cellpadding="0" cellspacing="0"  width="100%" height="35">
              <tr>
                <td width="33%" height="35">
                &nbsp;</td>
                <td width="36%" height="35" class="labels"> &nbsp;</td>
                <td width="31%" height="35">&nbsp;</td>
              </tr>
            </table>
            </td>
            <td width="16%" height="47" id="border_bottom" >&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" colspan="7" height="47" align="center" >
            <input type="submit" value="Submit" name="action" class="buttons"> <input type="reset" value="Reset" name="B2" class="buttons"></td>
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