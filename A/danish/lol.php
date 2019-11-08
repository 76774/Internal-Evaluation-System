<?php
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";

 $con=new mysqli("localhost","root","","eproject") or die("Database connectin is not established");
if($req=="submit")
{
 $query=$_REQUEST["fedfrom"];
  $feedback=$_REQUEST["feedback"];
   
    $rdat="";
    $reply="";
    $id=uniqid();
    $status="T";
    $dat=date("d-m-Y h:i:s");
   
    $p="insert into feedback (id,query,feedback,dateofquery,reply,dateofreply,status)values('$id','$query','$feedback','$dat','$reply','$rdat','$status')";
    $qury=mysqli_query($con,$p);
   echo("data entered ");
    
    }
    $q="select * from feedback";
$qry=mysqli_query($con,$q);


include("admintop.php");
    ?>
    
<form action="ffeedback.php" method="post">

<div align="left">
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="534" align="left">
    <tr>
      <td width="55%" height="534" align="left" valign="top">
      
       <?php
    $a  = 1;
    while($res=mysqli_fetch_row($qry))
    {
    ?>
      <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%" height="39">
        <tr>
          <td width="16%" height="39">Name</td>
          <td width="184%" height="39"><?=$res[1]?></td>
        </tr>
        <tr>
          <td width="16%" height="39">Feedback</td>
          <td width="184%" height="39"><?=$res[2]?><a href="viewfd.php">Read More</a></td>
        </tr>
        <tr>
          <td width="16%" height="39">reply</td>
          <td width="184%" height="39" valign="baseline"><?=$res[4]?><a href="viewfd.php">Read More</a></td>
        </tr>
      </table>
      <p></p>
        <?php
       $a++;
      }
      ?>
      
      </td>
      <td width="45%" height="534" align="right" valign="top">
       <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="75%" height="187">
        <tr>
<div align="center">
          <center>
          <table border="0" cellpadding="0" cellspacing="0" width="69%" height="225" class="tab">
            <tr>
              <td width="118%" colspan="5" height="38" class="title" id="border_bottom">
              Feedback form</td>
            </tr>
            <tr>
              <td width="100%" colspan="5" height="20" class="msg"><center><?=$error?></center></td>
            </tr>
            <tr>
              <td width="1%" height="59" id="border_bottom">&nbsp;</td>
              <td width="31%" height="59" class="labels" id="border_bottom">
              From</td>
              <td width="59%" height="59" id="border_bottom" colspan="2">
              <input type="text" name="from" size="20" class="textbox"></td>
              <td width="27%" height="59" id="border_bottom">&nbsp;</td>
            </tr>
            <tr>
              <td width="1%" height="169" id="border_bottom">&nbsp;</td>
              <td width="31%" height="169" class="labels" id="border_bottom" valign="top">
              Feedback</td>
              <td width="59%" height="169" id="border_bottom" valign="top" colspan="2">
              <textarea rows="2" name="feed" cols="20" class="textarea"></textarea></td>
              <td width="27%" height="169" id="border_bottom">&nbsp;</td>
            </tr>
            <tr>
              <td width="1%" height="56" id="border_bottom">&nbsp;</td>
              <td width="16%" height="56" class="labels" id="border_bottom">Enter 
              code</td>
              <td width="59%" height="56" id="border_bottom" colspan="2">
              <div align="left">
                <table border="0" cellpadding="0" cellspacing="0" width="62%" height="32" style="border-collapse: collapse" bordercolor="#111111">
                  <tr>
                    <td width="42%" height="32">
                    <img src="imag.php" class="capcha"> </td>
                    <td width="153%" height="32">
                    <input type="text" name="code" size="7" class="textbox1"></td>
                  </tr>
                </table>
              </div>
              </td>
              <td width="27%" height="56" id="border_bottom">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="48"><center>&nbsp;</center></td>
              <td width="17%" height="48">&nbsp;</td>
              <td width="31%" height="48">&nbsp;</td>
              <td width="13%" height="48">
              <input type="submit" value="Submit" name="action" class="buttons"></td>
              <td width="26%" height="48">&nbsp;</td>
            </tr>
          </table>
          </center>
        </div>        </tr>
      </table>

      </td>
    </tr>
  </table>
</div>

<?php
include("bottom.php");
?>