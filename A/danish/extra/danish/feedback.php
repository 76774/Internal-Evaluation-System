<?php

$error = isset($_REQUEST["error"])?$_REQUEST["error"]:"";

$req = isset ($_REQUEST["action"])?$_REQUEST["action"]:"";

$sid = uniqid(); 
$feedback = $_REQUEST["feedback"];

$dt = date (' d-M-Y h:i:s A');

$con = new mysqli("localhost","root","","project") or die("error with server");

$p = "Insert into feedback(feedbackid,feedback,reply,dateofreply,date)
 values('$sid','$feedback','1','1','$dt')";

$query = mysqli_query ($con,$p);


mysqli_close($con);

include("top.php");
?>

<form action ="feedback.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0"  width="44%" height="226" class="bkwhite">
    <tr>
      <td width="100%" height="226">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" width="88%" height="197" class="tab">
          <tr>
            <td width="100%" height="30" colspan="3" class="title" id="border_bottom">FEEDBACK FORM</td>
          </tr>
          <tr>
            <td width="100%" height="1" colspan="3"></td>
          </tr>
          <tr>
            <td width="35%" height="132" colspan="2" align="left" valign="top" class="labels" id="border_bottom">
            FEEDBACK</td>
            <td width="65%" height="132">
            <textarea rows="6" name="feedback" cols="36" class="textarea"></textarea></td>
          </tr>
          <tr>
            <td width="34%" height="25" class="labels" id="border_bottom">ENTER CODE</td>
            <td width="66%" height="25" colspan="2">
            <div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="0" width="98%" height="25">
                <tr>
                  <td width="32%" height="25">&nbsp;</td>
                  <td width="68%" height="25">
                  <input type="text" name="code" size="25" class="textbox2"></td>
                </tr>
              </table>
              </center>
            </div>
            </td>
          </tr>
          <tr>
            <td width="100%" height="23" colspan="3"><center>
            <input type="submit" value="Submit" name="action" class="buttons"> </center></td>
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