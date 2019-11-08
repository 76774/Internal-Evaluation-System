<?php
include("validate.php");
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";




if($req=="Submit")
{
$sid=uniqid();
$sn=$_REQUEST["sname"];
$sln=$_REQUEST["sloginname"];
$pass=$_REQUEST["spassword"];
$styp=$_REQUEST["stype"];
$dt=date('d-m-Y h:i:s a');

if(empty($sn))
$error="Field Empty..!";



if(empty($sln))
$error="Field Empty..!";
if(empty($pass))
$error="Field Empty..!";
if(empty($styp))
$error="Field Empty..!";

if(empty($error))
{
$sln=MD5($sln);
$pass=MD5($pass);
include("cont.php");
$p="insert into account (accountid,name,loginname,password,type,date)values('$sid','$sn','$sln','$pass','$styp','$dt')";
$qry=mysqli_query($con,$p);
$error="Account Created Successfully";
mysqli_close($con);
}
}

include("admintop.php");
?>
<form action="account_create.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="72%" height="248" class="bkwhite">
    <tr>
      <td width="100%" height="440">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="44%" height="186" class="tab">
          <tr>
            <td width="100%" colspan="4" height="43" class="title" id="border_bottom">Create an account</td>
          </tr>
          <tr>
            <td width="100%" height="18" colspan="4" class="msg" ><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="9%" height="44" id="border_bottom">&nbsp;</td>
            <td width="33%" height="44" class="labels" id="border_bottom">Name</td>
            <td width="50%" height="44" id="border_bottom"><input type="text" name="sname" size="20" class="textbox" autocomlete="off"></td>
            <td width="8%" height="44" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="9%" height="43" id="border_bottom">&nbsp;</td>
            <td width="33%" height="43" class="labels" id="border_bottom">Login Name</td>
            <td width="50%" height="43" id="border_bottom"><input type="text" name="sloginname" size="20" autocomplete="off" class="textbox"></td>
            <td width="8%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="9%" height="43" id="border_bottom">&nbsp;</td>
            <td width="33%" height="43" class="labels" id="border_bottom">Password</td>
            <td width="50%" height="43" id="border_bottom"><input type="password" name="spassword" size="20" class="textbox"></td>
            <td width="8%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="9%" height="43" id="border_bottom">&nbsp;</td>
            <td width="33%" height="43" class="labels" id="border_bottom">Type</td>
            <td width="50%" height="43" id="border_bottom" ><select size="1" name="stype" class="regdrop">
            <option>A</option>
            <option>S</option>
            <option>O</option>
            <option>F</option>
            </select></td>
            <td width="8%" height="43" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" colspan="4" height="39">
            <center><input type="submit" value="Submit" name="action" class="buttons"></center></td>
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