<?php

$error = isset($_REQUEST["error"])?$_REQUEST["error"]:"";

$req = isset ($_REQUEST["action"])?$_REQUEST["action"]:"";

if ($req == "SignIn")
{
$login = MD5($_REQUEST["login"]);

$password = MD5($_REQUEST["password"]);

$con = new mysqli("localhost","root","","project") or die("ERROR WITH SERVER");

$p = "select * from account where loginname = '$login' and password = '$password' and status = 'T' ";

$query = mysqli_query($con,$p);

$ctr = mysqli_num_rows($query);

if($ctr > 0)
{
header("location:module.php");
}
else
{
$error= "INVALID USERNAME OR PASSWORD";
}
}

include("top.php");
?>

<form action ="login.php" method = "post">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="65%" height="344" class="bkwhite" id="border_bottom">
    <tr>
      <td width="100%" height="344" align="left">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" width="79%" height="174">
          <tr>
            <td width="100%" height="46" colspan="4" class="title" id="border_bottom">It's Good To Have You Back!</td>
          </tr>
          <tr>
            <td width="100%" height="18" colspan="4"><font color="#ff0000"><?=$error?></fonts></td>
          </tr>
          <tr>
            <td width="1%" height="39">&nbsp;</td>
            <td width="36%" height="39" class="labels" id="border_bottom">LOGIN NAME</td>
            <td width="71%" height="39" colspan="2">
            <input type="text" name="login" size="32" autocomplete="off" placeholder="Login Name" class="textbox"></td>
          </tr>
          <tr>
            <td width="1%" height="39">&nbsp;</td>
            <td width="36%" height="39" class="labels" id="border_bottom">PASSWORD</td>
            <td width="71%" height="39" colspan="2">
            <input type="password" name="password" size="32" autocomplete="off" placeholder="Password" class="textbox"></td>
          </tr>
          <tr>
            <td width="8%" height="39">&nbsp;</td>
            <td width="21%" height="39" colspan="2" class="labels" id="border_bottom">ENTER CODE</td>
            <td width="71%" height="39">
            <div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="0" width="96%" height="31">
                <tr>
                  <td width="31%" height="31">&nbsp;</td>
                  <td width="69%" height="31">
                  <input type="text" name="T1" size="20" class="textbox1"></td>
                </tr>
              </table>
              </center>
            </div>
            </td>
          </tr>
          <tr>
            <td width="100%" height="39" colspan="4">
            <center>
            <input type="submit" value="SignIn" name="action" class="buttons"> </center></td>
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