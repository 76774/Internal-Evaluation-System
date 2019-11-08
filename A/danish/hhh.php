<?php
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$error=isset($_REQUEST["error"])?$_REQUEST["error"]:"";
$sid=isset($_REQUEST["sid"])?$_REQUEST["sid"]:"";
include("cont.php");
if($req == "Update")
{

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



$p="update student_detail set name='$n',parentage='$parentage',gender='$gender',contactno='$no',guardiancontactno='$gno',category='$category',session='$ses',stream='$stream',subject='$subject',semester='$sem',classrollno='$roll',address='$add' where studentid='$sid'";
echo $p;
$qry=mysqli_query($con,$p);

$error="Data updated Successfully";
}
$p="select * from student_detail where studentid='$sid'";
$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);
include("admintop.php");
?>


<form action=""student_update.php"" method="post">
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
            <td width="31%" height="42" id="border_bottom">
            <input type="text" name="name" size="20" class="textbox" value="<?=$res[1]?>"></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Parentage</td>
            <td width="31%" height="42" id="border_bottom">
            <input type="parentage" name="parentage" size="20" class="textbox" value="<?=$res[2]?>"></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Gender</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="gender" class="regdrop">
            <option>Male</option>
            <option>Female</option>
            <option>Transgender</option>
            <option value="<?=$res[3]?>" selected> <?=$res[3]?></option>

            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Date Of 
            Birth</td>
            <td width="30%" height="42" id="border_bottom">
            <div align="center">
              <center>
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="32">
              <tr>
                <td width="32%" height="32"><select size="1" name="d" class="regdrop2">
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
            </select></td>
                <td width="32%" height="32"><select size="1" name="mt" class="regdrop2">
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
            </select></td>
                <td width="36%" height="32"><select size="1" name="yr" class="regdrop2">
            <option>1996</option>
            </select></td>
              </tr>
            </table>
              </center>
            </div>
            </td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Contact 
            No</td>
            <td width="31%" height="42" id="border_bottom">
            <input type="text" name="no" size="20" class="textbox" value="<?=$res[5]?>"></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Guardian 
            Contact No</td>
            <td width="31%" height="42" id="border_bottom">
            <input type="text" name="gno" size="20" class="textbox" value="<?=$res[6]?>" ></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Category</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="category" class="regdrop">
            <option>OM</option>
            <option>ST</option>
            <option>SC</option>
            <option>OBC</option>
            <option>ALC</option>
            <option value="<?=$res[7]?>" selected> <?=$res[7]?></option>

            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Session</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="ses" class="regdrop">
            <option>2000-2003</option>
            <option>2001-2004</option>
            <option>2002-2005</option>
            <option>2003-2006</option>
            <option>2004-2007</option>
            <option>2005-2008</option>
            <option>2006-2009</option>
            <option>2007-2010</option>
             <option value="<?=$res[8]?>" selected> <?=$res[8]?></option>

            </select></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Stream</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="stream" class="regdrop">
            <option>BCA</option>
            <option>BBA</option>
            <option>BSC</option>
            <option>BA</option>
             <option value="<?=$res[9]?>" selected> <?=$res[9]?></option>


            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Subject</td>
            <td width="31%" height="42" id="border_bottom">
            <input type="text" name="subject" size="20" class="textbox" value="<?=$res[10]?>"></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
            <td width="14%" height="42" class="labels" id="border_bottom">Semester</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="sem" class="regdrop">
            <option>First</option>
            <option>Second</option>
            <option>Third</option>
            <option>Fourth</option>
            <option>Fifth</option>
            <option>Sixth</option>
            
              <option value="<?=$res[11]?>" selected> <?=$res[11]?></option>
            </select></td>
            <td width="16%" height="42" class="labels" id="border_bottom">Class 
            Roll No</td>
            <td width="31%" height="42" id="border_bottom">
            <input type="text" name="roll" size="20" class="textbox" value="<?=$res[12]?>"></td>
            <td width="4%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="4%" height="114" id="border_bottom">&nbsp;</td>
            <td width="14%" height="114" valign="top" class="labels" id="border_bottom">
            Address</td>
            <td width="78%" height="114" colspan="3" valign="top" id="border_bottom">
            <textarea rows="2" name="add" cols="20" class="textarea1" > <?=$res[13]?></textarea></td>
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