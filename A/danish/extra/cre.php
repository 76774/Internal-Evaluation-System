<?php
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
if($req=="Submit")
{
$sid=uniqid();
$sn=$_REQUEST["sname"];
$sln=MD5($_REQUEST["sloginname"]);
$pass=MD5($_REQUEST["spassword"]);
$styp=$_REQUEST["stype"];
$dt=date('d-m-Y h:i:s a');
$con=new mysqli("localhost","root","","information")or die("Error with server");
$p="insert into admin(accountid,name,loginname,password,type,date)values('$sid','$sn','$sln','$pass','$styp','$dt')";
$qry=mysqli_query($con,$p);
echo("Data inserted successfully!!!!");
mysqli_close($con);
}

include("top.php");
?>

<div align="center">
      <center>

<table border="0" cellpadding="0" cellspacing="0"  width="72%" height="248" class="bkwhite">
  <tr>
    <td width="100%" height="492">
    <div align="center">
      <center>
      <table border="0" cellpadding="0" cellspacing="0" width="56%" height="233" class="tab">
        <tr>
          <td width="100%" colspan="4" height="35" class="title">Form</td>
        </tr>
        <tr>
          <td width="100%" colspan="4" height="23">&nbsp;</td>
        </tr>
        <tr>
          <td width="8%" height="34">&nbsp;</td>
          <td width="22%" height="34" class="labels">Name</td>
          <td width="63%" height="34"><input type="text" name="T1" size="20" class="textbox"></td>
          <td width="7%" height="34">&nbsp;</td>
        </tr>
        <tr>
          <td width="8%" height="34">&nbsp;</td>
          <td width="22%" height="34" class="labels">Login Name</td>
          <td width="63%" height="34"><input type="text" name="T1" size="20" class="textbox"></td>
          <td width="7%" height="34">&nbsp;</td>
        </tr>
        <tr>
          <td width="8%" height="34">&nbsp;</td>
          <td width="22%" height="34" class="labels">Password</td>
          <td width="63%" height="34"><input type="password" name="T1" size="20" class="textbox"></td>
          <td width="7%" height="34">&nbsp;</td>
        </tr>
        <tr>
          <td width="8%" height="34">&nbsp;</td>
          <td width="22%" height="34" class="labels">Type</td>
          <td width="63%" height="34"><select size="1" name="D1">
          <option>A</option>
          <option>S</option>
          <option>O</option>
          </select></td>
          <td width="7%" height="34">&nbsp;</td>
        </tr>
        <tr>
          <td width="100%" colspan="4" height="33">
          <center><input type="submit" value="Submit" name="B1" class="buttons"></center></td>
        </tr>
        </table>
      </center>
    </div>
    </td>
  </tr>
  </center>
  </div
</table>



<?php
include("bottom.php");
?>