<?php
include("validate.php");

$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$userid=$_SESSION["userfaculty"];
$oldlogin=isset($_REQUEST["oldlogin"])?$_REQUEST["oldlogin"]:"";
$oldpass=isset($_REQUEST["oldpass"])?$_REQUEST["oldpass"]:"";
include("cont.php");


if($req=="Update")
{
$name=$_REQUEST["name"];
$ln=trim($_REQUEST["ln"]);
$pass=trim($_REQUEST["pass"]);

if(empty($ln))
{
$ln=$oldlogin;
}
else
{
$ln=MD5($ln);
}
if(empty($pass))
{
$pass=$oldpass;
}
else
{
$pass=MD5($pass);
}
$q="update account set name='$name',loginname='$ln',password='$pass' where accountid='$userid'";
$qery=mysqli_query($con,$q);
$error="Data Updated Successfully...!";
}

$p="select * from account where accountid='$userid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);
include("facultytop.php");
?>



<form action="account_manage_faculty.php" method="post">
<input type="hidden" name="oldlogin" value="<?=$res[2]?>">
<input type="hidden" name="oldpass" value="<?=$res[3]?>">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="130">
    <tr>
      <td width="100%" height="403">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tab" width="47%" height="251">
          <tr>
            <td width="100%" colspan="4" height="44" class="title" id="border_bottom" >Edit Account</td>
          </tr>
          <tr>
            <td width="100%" height="23" colspan="4" class="msg"> <center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="7%" height="50" id="border_bottom" ></td>
            <td width="28%" height="50" class="labels" id="border_bottom">Name</td>
            <td width="58%" height="50" id="border_bottom">
            <input type="text" name="name" size="20" class="textbox" value="<?=$res[1]?>"></td>
            <td width="7%" height="50" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="7%" height="50" id="border_bottom">&nbsp;</td>
            <td width="28%" height="50" class="labels" id="border_bottom">Login Name</td>
            <td width="58%" height="50" id="border_bottom">
            <input type="text" name="ln" size="20" class="textbox" autocomplete="off"></td>
            <td width="7%" height="50" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="7%" height="50" id="border_bottom">&nbsp;</td>
            <td width="28%" height="50" class="labels" id="border_bottom">Password</td>
            <td width="58%" height="50" id="border_bottom">
            <input type="password" name="pass" size="20" class="textbox" autocomplete="off"></td>
            <td width="7%" height="50" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="50" colspan="4" align="center" >
            <input type="submit" value="Update" name="action" class="buttons"></td>
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