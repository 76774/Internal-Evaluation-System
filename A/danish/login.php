<?php
session_start();


$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";

$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
if($req=="Login")
{

$login=$_REQUEST["login"];
$password=$_REQUEST["password"];
$code=$_REQUEST["code"];

if(empty($login))
   $error = "Invalid Detail !...";

if(empty($password))
     $error = "Invalid Detail !...";

$vc=$_SESSION["security_code"];

if(empty($code))
$error="Invalid Detail";
else
{
if($vc != $code)
$error="Verification Code does not match...!";
}



if(empty($error))
 {

$login = MD5($login);
$password= MD5($password);

include("cont.php");
$p="select * from account where loginname='$login' and password='$password' and status='T'";
$qry=mysqli_query($con,$p);
$ctr=mysqli_num_rows($qry);
if($ctr > 0)
{
$_SESSION["check"]= "on";
$res=mysqli_fetch_row($qry);
$_SESSION["userfaculty"]=$res[0];


if($res[4]=='S')
header("location:modules.php");


if($res[4]=='A')
header("location:modules.php");

if($res[4]=='F')
header("location:faculty_modules.php");
}
else
     $error="Invalid Username or Password";




}

}
include("top.php");
?>
<form action="login.php" method="post">
<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" width="72%" height="248" class="bkwhite">
  <tr>
    <td width="100%" height="353">
    <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" class="tab" width="53%" height="216">
        <tr>
          <td width="100%" height="38" colspan="3" class="title" id="border_bottom">Login</td>
        </tr>
        <tr>
          <td width="100%" height="33" colspan="3" class="msg"><center><?=$error?></center></td>
        </tr>
        <tr>
          <td width="8%" height="47" class="labels" id="border_bottom">&nbsp;</td>
          <td width="28%" height="47" class="labels" id="border_bottom">Login Name</td>
          <td width="64%" height="38" id="border_bottom"><input type="text" name="login" size="27" autocomplete="off" class="textbox" placeholder="Login Name"></td>
        </tr>
        <tr>
          <td width="8%" height="47" class="labels" id="border_bottom">&nbsp;</td>
          <td width="28%" height="47" class="labels" id="border_bottom">Password</td>
          <td width="64%" height="38" id="border_bottom"><input type="password" name="password" size="27" autocomplete="off" class="textbox" placeholder="Password"></td>
        </tr>
        <tr>
          <td width="8%" height="47" class="labels" id="border_bottom">&nbsp;</td>
          <td width="28%" height="47" class="labels" id="border_bottom">Enter Code</td>
          <td width="64%" height="47" id="border_bottom">
          <table border="0" cellpadding="0" cellspacing="0"  width="52%" height="41">
            <tr>
              <td width="26%" height="41">
              <img src="imag.php"  class="capcha">
              </td>
              <td width="128%" height="41"><center>
              <input type="text" name="code" size="14" class="textbox1" autocomplete="off"></center></td>
            </tr>
          </table>
          </td>
        </tr>
        <tr>
          <td width="100%" height="50" colspan="3">
          <center><input type="submit" value="Login" name="action" class="buttons"></center></td>
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