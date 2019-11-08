<?php
include("validate.php");
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";

$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
include("cont.php");
if($req=="Send")
{
$reply=$_REQUEST["reply"];
$dt=date('d-m-Y h:i:s a');
if(empty($reply))
$error="Feild Empty...!";



if(empty($error))
{
$q="update feedback set reply='$reply',dateofreply='$dt' where feedbackid='$sid'";
$qery=mysqli_query($con,$q);
$error="Reply sent Successfully...!";
}
}

$p="select * from feedback where feedbackid='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);
include("admintop.php");


?>

<form action="feedback_reply.php" method="post">

<input type="hidden" name="sid" value="<?=$res[0]?>">
  <div align="center">
    <center>
    <table border="0" cellpadding="0" cellspacing="0" width="72%" height="600" class="bkwhite">
      <tr>
        <td width="100%" height="448">
        <div align="center">
          <center>
          <table border="0" cellpadding="0" cellspacing="0" width="70%" height="187" class="tab">
            <tr>
              <td width="118%" colspan="5" height="38" class="title" id="border_bottom">
              Feedback form</td>
            </tr>
            <tr>
              <td width="100%" colspan="5" height="20" class="msg"><center><?=$error?></center></td>
            </tr>
            <tr>
              <td width="1%" height="31" id="border_bottom">&nbsp;</td>
              <td width="34%" height="31" class="labels" id="border_bottom">
              From</td>
              <td width="61%" height="31" id="border_bottom" colspan="2" >
              <?=$res[1]?></td>
              <td width="25%" height="31" id="border_bottom">&nbsp;</td>
            </tr>
            <tr>
              <td width="1%" height="46" id="border_bottom">&nbsp;</td>
              <td width="34%" height="46" class="labels" id="border_bottom" valign="top">
              Feedback</td>
              <td width="61%" height="46" id="border_bottom" valign="top" colspan="2">
              <?=$res[2]?></td>
              <td width="25%" height="46" id="border_bottom">&nbsp;</td>
            </tr>
            <tr>
              <td width="1%" height="169" id="border_bottom">&nbsp;</td>
              <td width="19%" height="169" class="labels" id="border_bottom" valign="top">
              Reply</td>
              <td width="61%" height="169" id="border_bottom" colspan="2" valign="top">
              <textarea rows="2" name="reply" cols="20" class="textarea"></textarea></td>
              <td width="25%" height="169" id="border_bottom">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="48"><center>&nbsp;</center></td>
              <td width="20%" height="48">&nbsp;</td>
              <td width="36%" height="48">&nbsp;</td>
              <td width="10%" height="48">
              <input type="submit" value="Send" name="action" class="buttons"></td>
              <td width="24%" height="48">&nbsp;</td>
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