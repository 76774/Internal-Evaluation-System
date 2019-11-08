<?php
include("validate.php");
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
$oldlogin=isset($_REQUEST["oldlogin"])?$_REQUEST["oldlogin"]:"";
$oldpass=isset($_REQUEST["oldpass"])?$_REQUEST["oldpass"]:"";

$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
include("cont.php");
if($req=="Update")
{
$n=$_REQUEST["sname"];
$ln=$_REQUEST["sloginname"];
$pass=$_REQUEST["spassword"];
$typ=$_REQUEST["stype"];
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
$q="update account set name='$n',loginname='$ln',password='$pass',type='$typ' where accountid='$sid'";
$qery=mysqli_query($con,$q);
$error="Data Updated Successfully...!";
}
$p="select * from account where accountid='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);
include("admintop.php");


?>

<form action="account_update.php" method="POST">
<input type="hidden" name="sid" value="<?=$res[0]?>">
<input type="hidden" name="oldlogin" value="<?=$res[2]?>">
<input type="hidden" name="oldpass" value="<?=$res[3]?>">



<div align="center">
  <center>

<table border="0" cellpadding="0" cellspacing="0" width="72%" height="300" class="bkwhite">
  <tr>
    <td width="100%" height="353">



<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="43%" height="230" class="tab">
    <tr>
      <td width="100%" colspan="4" height="38" class="title" id="border_bottom">Update account details</td>
    </tr>
    <tr>
      <td width="103%" height="18" colspan="4" class="msg"><center><?=$error?> </center></td>
    </tr>
    <tr>
      <td width="10%" height="44" class="labels" id="border_bottom">&nbsp;</td>
      <td width="28%" height="44" class="labels" id="border_bottom">Name</td>
      <td width="53%" height="44" id="border_bottom"><input type="text" name="sname" size="20" class="textbox" value="<?=$res[1]?>" autocomplete="off"></td>
      <td width="12%" height="44" id="border_bottom">&nbsp;</td>
    </tr>
    <tr>
      <td width="10%" height="43" class="labels" id="border_bottom">&nbsp;</td>
      <td width="28%" height="43" class="labels" id="border_bottom">Login Name</td>
      <td width="53%" height="43" id="border_bottom"><input type="text" name="sloginname" size="20" class="textbox" autocomplete="off"></td>
      <td width="12%" height="43" id="border_bottom">&nbsp;</td>
    </tr>
    <tr>
      <td width="10%" height="43" class="labels" id="border_bottom">&nbsp;</td>
      <td width="28%" height="43" class="labels" id="border_bottom">Password</td>
      <td width="53%" height="43" id="border_bottom"><input type="password" name="spassword" size="20" class="textbox" autocomplete="off"></td>
      <td width="12%" height="43" id="border_bottom">&nbsp;</td>
    </tr>
    <tr>
      <td width="10%" height="43" class="labels" id="border_bottom">&nbsp;</td>
      <td width="28%" height="43" class="labels" id="border_bottom">Type</td>
      <td width="53%" height="43" id="border_bottom"><select size="1" name="stype" class="regdrop" >
      <option>A</option>
      <option>S</option>
      <option>O</option>
      <option selected value="<?=$res[4]?>"><?=$res[4]?></option>
      </select></td>
      <td width="12%" height="43" id="border_bottom">&nbsp;</td>
    </tr>
    <tr>
          <td width="100%" colspan="4" height="40">
     <center> <input type="submit" value="Update" name="action" class="buttons"></center></td>
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