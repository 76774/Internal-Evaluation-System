<?php
include("validate.php");
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";

if($req == "Submit")
{
$sid=uniqid();
$n=$_REQUEST["name"];
$parentage=$_REQUEST["parentage"];
$gender=$_REQUEST["gender"];
$no=$_REQUEST["no"];
$gno=$_REQUEST["gno"];
$category=$_REQUEST["category"];
$ses=$_REQUEST["ses"];
$stream=$_REQUEST["stream"];
$subject=$_REQUEST["subject"];
$sem=$_REQUEST["sem"];
$roll=$_REQUEST["roll"];
$add=$_REQUEST["add"];
$dt=date('d-m-Y h:i:s A');

if(empty($n))
$error="Field Empty..!";

if(empty($parentage))
$error="Field Empty..!";

if(empty($gender))
$error="Field Empty..!";

if(empty($no))
$error="Field Empty..!";

if(empty($gno))
$error="Field Empty..!";

if(empty($category))
$error="Field Empty..!";

if(empty($ses))
$error="Field Empty..!";

if(empty($stream))
$error="Field Empty..!";

if(empty($subject))
$error="Field Empty..!";

if(empty($sem))
$error="Field Empty..!";

if(empty($roll))
$error="Field Empty..!";

if(empty($add))
$error="Field Empty..!";


if(empty($error))
{
include("cont.php");
$p="insert into student_detail(studentid,name,parentage,gender,contactno,guardiancontactno,category,session,stream,subject,semester,classrollno,address,date)
values('$sid','$n','$parentage','$gender','$no','$gno','$category','$ses','$stream','$subject','$sem','$roll','$add','$dt')";
$qry=mysqli_query($con,$p);

$error="Data Insearted Successfully";
mysqli_close($con);
}
}
include("admintop.php");
?>

<form action="registration_form.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="72%" height="589" class="bkwhite">
    <tr>
      <td width="100%" height="589">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="regtab" width="97%" height="520">
          <tr>
            <td width="100%" colspan="6" height="42" class="title" id="border_bottom">
            Registration Form</td>
          </tr>
          <tr>
            <td width="100%" height="21" colspan="6" class="msg" align="center"><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Name</td>
            <td width="32%" height="42" id="border_bottom">
            <input type="text" name="name" size="20" class="textbox"></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Parentage</td>
            <td width="30%" height="42" id="border_bottom">
            <input type="parentage" name="parentage" size="20" class="textbox"></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Gender</td>
            <td width="32%" height="42" id="border_bottom">
            <select size="1" name="gender" class="regdrop">
            <option>Male</option>
            <option>Female</option>
            <option>Transgender</option>
            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Date Of 
            Birth</td>
            <td width="29%" height="42" id="border_bottom">
            &nbsp;</td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Contact 
            No</td>
            <td width="32%" height="42" id="border_bottom">
            <input type="text" name="no" size="20" class="textbox"></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Guardian 
            Contact No</td>
            <td width="30%" height="42" id="border_bottom">
            <input type="text" name="gno" size="20" class="textbox"></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Category</td>
            <td width="32%" height="42" id="border_bottom">
            <select size="1" name="category" class="regdrop">
            <option>OM</option>
            <option>ST</option>
            <option>SC</option>
            <option>OBC</option>
            <option>ALC</option>
            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Session</td>
            <td width="30%" height="42" id="border_bottom">
            <select size="1" name="ses" class="regdrop">
            <option>2000-2003</option>
            <option>2001-2004</option>
            <option>2002-2005</option>
            <option>2003-2006</option>
            <option>2004-2007</option>
            <option>2005-2008</option>
            <option>2006-2009</option>
            <option>2007-2010</option>
            </select></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Stream</td>
            <td width="32%" height="42" id="border_bottom">
            <select size="1" name="stream" class="regdrop">
            <option>BCA</option>
            <option>BBA</option>
            <option>BSC</option>
            <option>BA</option>
            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Subject</td>
            <td width="30%" height="42" id="border_bottom">
            <input type="text" name="subject" size="20" class="textbox"></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Semester</td>
            <td width="32%" height="42" id="border_bottom">
            <select size="1" name="sem" class="regdrop">
            <option>First</option>
            <option>Second</option>
            <option>Third</option>
            <option>Fourth</option>
            <option>Fifth</option>
            <option>Sixth</option>
            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Class 
            Roll No</td>
            <td width="30%" height="42" id="border_bottom">
            <input type="text" name="roll" size="20" class="textbox"></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="114" id="border_bottom">&nbsp;</td>
            <td width="14%" height="114" valign="top" class="labels" id="border_bottom">
            Address</td>
            <td width="78%" height="114" colspan="3" valign="top" id="border_bottom">
            <textarea rows="2" name="add" cols="20" class="textarea1"></textarea><select size="1" name="dob" class="regdrop">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
            </select><select size="1" name="D2" class="regdrop">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>0</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            </select><select size="1" name="D1" class="regdrop"></select></td>
            <td width="4%" height="114" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="41" id="border_bottom">&nbsp;</td>
            <td width="14%" height="41" class="labels" id="border_bottom">Upload 
            Picture</td>
            <td width="78%" height="41" colspan="3" id="border_bottom">
            <input type="file" name="pic" size="20" class="pic"></td>
            <td width="4%" height="41" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="40" colspan="6" align="center">
            <input type="submit" value="Submit" name="action" class="buttons"></td>
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