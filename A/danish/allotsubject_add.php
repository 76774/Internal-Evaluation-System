<?php
include("validate.php");

$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";

if($req=="Submit")
{
$sid=uniqid();
$facname=$_REQUEST["facname"];
$subname=$_REQUEST["subname"];
$subcode=$_REQUEST["subcode"];
$ses=$_REQUEST["ses"];
$sem=$_REQUEST["sem"];
$stream=$_REQUEST["stream"];
$dt=date('d-m-Y h:i:s a');


if(empty($subname))
$error="Field Empty..!";

if(empty($subcode))
$error="Field Empty..!";


if(empty($error))
{
include("cont.php");
$p="insert into allotsubject(allotid,facultyname,subjectname,subjectcode,session,stream,semester,date)values
('$sid','$facname','$subname','$subcode','$ses','$stream','$sem','$dt')"; 
$qry=mysqli_query($con,$p);
$error="Data inserted Successfully";
mysqli_close($con);
}
}
include("admintop.php");
?>
<script language="javascript">

 function subjectcode()
{
   var code ; 
   var p = document.getElementById("subname").value; 

   if(p=="Computer Fundamentals")
        code = "BCA-101";

   if(p=="Problem solving using C-language") 
         code = "BCA-102";

if(p=="General English") 
         code = "AA-101";

if(p=="Computer Networks")
code="BCA-401";

if(p=="Mathematics") 
         code = "MA-101";

if(p=="Database Management System") 
         code = "BCA-302";

if(p=="Fundamentals of Operating System") 
         code = "BCA-301";

if(p=="Paradigm") 
         code = "BCA-401";

   
document.getElementById("subcode").value = code;



}

</script>
<form action="allotsubject_add.php"method="post"> 
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="454">
    <tr>
      <td width="100%" height="454">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tbl" width="55%" height="376">
          <tr>
            <td width="100%" colspan="4" height="43" class="title" id="border_bottom">Allot Subject</td>
          </tr>
          <tr>
            <td width="100%" height="19" colspan="4" class="msg"><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="10%" height="43" id="border_bottom">&nbsp;</td>
            <td width="40%" height="43" class="labels" id="border_bottom" >Faculty Name</td>
            <td width="38%" height="43" id="border_bottom">
            <?php
            include("cont.php");
            $q="select distinct name from account where status='T' and type <> 'A' order by name";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="facname" class="regdrop">
          
          
          <?php
            while($res=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
           
            ?>
          
          </select>            
            
            
            
            </td>
            <td width="12%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="43" id="border_bottom">&nbsp;</td>
            <td width="40%" height="43" class="labels"id="border_bottom">Subject Name</td>
            <td width="38%" height="43" id="border_bottom">
            
            <?php
           
            $q="select distinct subjectname from subject where status='T' order by subjectname asc";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="subname" id="subname" class="regdrop" onchange="subjectcode();">
        <option value="">Select Subject</option>
          
          <?php
            while($res=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$res[0]?>"><?=$res[0]?></option>
            <?php
            }
           
            ?>
          
          </select>
            
            
            </td>
            <td width="12%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Subject Code</td>
            <td width="38%" height="42" id="border_bottom">
<input type="text" name="subcode" id="subcode" size="20" class="textbox" readonly></td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Session</td>
            <td width="38%" height="42" id="border_bottom">
            
            <?php
            
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
          
          </select>
            
            
            </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Semester</td>
            <td width="38%" height="42" id="border_bottom">
            
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

          
      

          
          
          </select>
            
            
            
            </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="10%" height="42" id="border_bottom">&nbsp;</td>
            <td width="40%" height="42" class="labels" id="border_bottom">Stream</td>
            <td width="38%" height="42" id="border_bottom">
            
            
            <?php
            include("cont.php");
            $q="select distinct stream from student_detail where status='T' order by stream";
            
           
            $qery=mysqli_query($con,$q);
            
            ?>
          
          
          
          
          <select size="1" name="stream" class="regdrop">
          
          
          <?php
            while($res=mysqli_fetch_row($qery))
            {
            
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
           
            ?>
          
          </select>
            
            
            </td>
            <td width="12%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="42" colspan="4" align="center">
            <input type="submit" value="Submit" name="action" class="buttons"></td>
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