<?php

session_start();
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
include("cont.php");



if($req=="Submit")
{
$from=$_REQUEST["from"];
$fid=uniqid();
$feed=$_REQUEST["feed"];
$code=$_REQUEST["code"];
$dt=date('d-m-Y h:i:s a');

if(empty($from))
   $error = "Field Empty !...";


if(empty($feed))
   $error = "Field Empty !...";



$vc = $_SESSION["security_code"];



if(empty($code))
    $error = "Field  Empty !..";
else
{

  if($vc != $code)
   $error = "Verification Code Does't Match";

}
if(empty($error))
{


$p="insert into feedback(feedbackid,fromuser,feedback,reply,dateofreply,date) values ('$fid','$from','$feed','1','1','$dt')";
$qry=mysqli_query($con,$p);
$error="Thankyou for your feedback!!!!";


}
}

$q="select * from feedback where status='T'";
$qrey=mysqli_query($con,$q);


include("top.php");
?>
<form action="feedback.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0"  width="72%" height="400" class="bkwhite">
    <tr>
      <td width="50%" height="555">
      <div align="center">
          <center>
          <table border="0" cellpadding="0" cellspacing="0" width="90%" height="225" class="regtab">
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
              <input type="text" name="from" size="20" class="textbox" autocomplete="off"></td>
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
                    <input type="text" name="code" size="7" class="textbox1" autocomplete="off"></td>
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
        </div>
      
  </td>
      <td width="50%" height="555" align="center">
      
<center>
  <table border="0" cellpadding="0" cellspacing="0"  width="95%" height="392" class="regtab">
  <tr>
    <td width="364" height="290" align="left" valign="top"> 
    <div align="center">
       <?php
    $a  = 1;
    
    while($res=mysqli_fetch_row($qrey))
    {
    $query=substr($res[2],0,20);
    $reply=substr($res[3],0,20);
    ?>
    <div align="center" id="border_bottom">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="95%" height="85" >
          <tr>
            <td width="34%"  height="2" class="labels" > From </td>
            <td width="66%" height="2" > <font color="#FF0000"> <?=$res[1]?> </font> </td>
          </tr>
          <tr>
            <td width="34%"  height="17" class="labels">Feedback</td>
            <td width="66%"  height="17"><?=$query."...."?>......</td>
          </tr>
          <tr>
            <td width="34%"  height="22" class="labels">Reply</td>
            <td width="66%"  height="22"> <?=$reply."...."?><a href="feedbackmanage_view.php?sid=<?=$res[0]?>">Readmore</a></td>
          </tr>
          
        </table>
        </div>
        <?php
       $a++;
      }
      ?>
        </center>
      </div>
      <br>
       </td>
  </tr>
  
  </table></center>

      
      
      
      
      
      
      
      
      
      
      
      </td>
    </tr>
  </table>
  </center>
</div>
</form>
<?php
include("bottom.php");
?>