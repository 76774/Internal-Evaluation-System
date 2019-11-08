<?php
include("validate.php");
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";



if($req=="Next")
{
$stream=$_REQUEST["stream"];
$ses=$_REQUEST["ses"];
$lect=$_REQUEST["lect"];
$sub=$_REQUEST["sub"];
$sem=$_REQUEST["sem"];

if(empty($lect))
$error="Field Empty..!";

if(empty($stream))
$error="Field Empty..!";

if(empty($error))
{

$_SESSION["stream"] = $stream;
$_SESSION["semester"]=$sem;
$_SESSION["subject"]=$sub;
$_SESSION["sess"]=$ses;
$_SESSION["lect"]=$lect;
header("location:attendance_form2.php");
}

}



include("facultytop.php");
?>




<form action="attendance_form1.php" method="post">
<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0"  width="72%" height="61" class="bkwhite">
  <tr>
    <td width="100%" height="353">
    <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" class="regtab"  width="85%" height="209">
        <tr>
          <td width="100%" height="47" colspan="6" id="border_bottom" class="title">Attendance Form 1</td>
        </tr>
        <tr>
          <td width="100%" height="23" colspan="6" class="msg"><center><?=$error?></center></td>
        </tr>
        <tr>
          <td width="2%" height="40" id="border_bottom">&nbsp;</td>
          <td width="17%" height="40" class="labels" id="border_bottom">Stream</td>
          <td width="37%" height="40" id="border_bottom" >
          <?php
            include("cont.php");
            $q="select distinct stream from student_detail where status='T' order by stream";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="stream" class="regdrop">
          <option value="">Select stream from..</option>
          
          <?php
            while($res=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
           
            ?>
          
          </select></td>
          <td width="12%" height="40" class="labels" id="border_bottom">Semester</td>
          <td width="28%" height="40" id="border_bottom">
          
          <?php
            include("cont.php");
            $q="select distinct semester from student_detail where status='T' order by semester";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>

        
          
          <select size="1" name="sem" class="regdrop">
           <?php
           
            while($res=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
           
            ?>

          
      

          
          
          </select></td>
          <td width="4%" height="40" id="border_bottom">&nbsp;</td>
        </tr>
        <tr>
          <td width="2%" height="40"  id="border_bottom">&nbsp;</td>
          <td width="17%" height="40" class="labels" id="border_bottom">Subject</td>
          <td width="37%" height="40" id="border_bottom">
          <?php
            include("cont.php");
            $q="select distinct subjectname from subject where status='T' order by subjectname";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>

          
          
          
          <select size="1" name="sub" class="regdrop">
          
          <?php
           
            while($res=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
           
            ?>

          
          </select></td>
          <td width="12%" height="40" class="labels" id="border_bottom">Session</td>
          <td width="28%" height="40" id="border_bottom">
          
           <?php
            include("cont.php");
            $q="select distinct session from student_detail where status='T' order by session";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>

          
          
          
          <select size="1" name="ses" class="regdrop">
          
             <?php
           
            while($res=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
           
            ?>

           
           

          
          
          </select></td>
          <td width="4%" height="40" id="border_bottom">&nbsp;</td>
        </tr>
        <tr>
          <td width="2%" height="47" id="border_bottom">&nbsp;</td>
          <td width="17%" height="47" class="labels" id="border_bottom">Total Lectures</td>
          <td width="37%" height="47" id="border_bottom">
          <input type="text" name="lect" size="20" class="textbox" autocomplete="off"></td>
          <td width="12%" height="47" id="border_bottom">&nbsp;</td>
          <td width="28%" height="47" id="border_bottom">&nbsp;</td>
          <td width="4%" height="47" id="border_bottom">&nbsp;</td>
        </tr>
        <tr>
          <td width="100%" height="47" colspan="6" align="center">
          <input type="submit" value="Next" name="action" class="buttons"> <input type="reset" value="Reset" name="B2" class="buttons"></td>
        </tr>
      </table>
      </center>
    </div>
    </td>
  </tr>
</table>



  </center>
</div>


</form>

<?php
include("bottom.php");
?>