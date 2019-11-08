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

<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 2</title>
<link href="stylesheet.css" type="text/css" rel="stylesheet"> 
</head>

<body>
<a href="module.php"><b>Back</b></a>
<form action="login.php" method="POST">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="42%" height="256" class="tab">
    <tr>
      <td width="100%" colspan="2" height="38" class="title"><center>FORM</center></td>
    </tr>
    <tr>
      <td width="24%" height="44" class="labels">Name</td>
      <td width="76%" height="44"><input type="text" name="sname" size="20" class="textbox"></td>
    </tr>
    <tr>
      <td width="24%" height="43" class="labels">Login Name</td>
      <td width="76%" height="43"><input type="text" name="sloginname" size="20" class="textbox" autocomplete="off"></td>
    </tr>
    <tr>
      <td width="24%" height="43" class="labels">Password</td>
      <td width="76%" height="43"><input type="password" name="spassword" size="20" class="textbox" autocomplete="off"></td>
    </tr>
    <tr>
      <td width="24%" height="43" class="labels">Type</td>
      <td width="76%" height="43"><select size="1" name="stype" class="textbox" >
      <option>A</option>
      <option>S</option>
      <option>O</option>
      </select></td>
    </tr>
    <tr>
      <td width="100%" colspan="2" height="40">
     <center> <input type="submit" value="Submit" name="action" class="buttons"></center></td>
    </tr>
  </table>
  </center>
</div>
</form>
</body>

</html>

<?php
include("bottom.php");
?>
