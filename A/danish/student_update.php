<?php
include("validate.php");
$oldpic=isset($_REQUEST["oldpic"])?$_REQUEST["oldpic"]:"";
$req=isset($_REQUEST["action"])?$_REQUEST["action"]:"";
$picture=isset($_REQUEST["picture"])?$_REQUEST["picture"]:"";
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
$d=$_REQUEST["dt"];
$mt=$_REQUEST["mt"];
$yr=$_REQUEST["yr"];
$dob=$d."-".$mt."-".$yr;



if(empty($picture))
$picture=$oldpic;
else
{
include_once("pic_upload.php");
$picture=$_SESSION['fileName1'];
}
$p="update student_detail set name='$n',parentage='$parentage',gender='$gender',dateofbirth='$dob',contactno='$no',guardiancontactno='$gno',category='$category',session='$ses',stream='$stream',subject='$subject',semester='$sem',classrollno='$roll',address='$add',picture='$picture' where studentid='$sid'";
$qry=mysqli_query($con,$p);

$m1="update marks set rollno='$roll',name='$n',stream='$stream',semester='$sem' where refstudentid='$sid'";
mysqli_query($con,$m1);

$ass1="update assignment set rollno='$roll',name='$n',stream='$stream',semester='$sem'  where refstudentid='$sid'  ";
mysqli_query($con,$ass1);

$att1="update attendance set rollno='$roll',name='$n',stream='$stream',semester='$sem' where refstudentid='$sid'";
mysqli_query($con,$att1);





$error="Data updated Successfully";
}
$p="select * from student_detail where studentid='$sid'";



$qry=mysqli_query($con,$p);
$res=mysqli_fetch_row($qry);
$d_d=substr($res[4],0,2);
$m_m=substr($res[4],3,2);
$y_y=substr($res[4],6,4);
include("admintop.php");
?>

<form action="student_update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="sid" value="<?=$res[0]?>">
<input type="hidden" name="oldpic" value="<?=$res[14]?>">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="72%" height="589" class="bkwhite">
    <tr>
      <td width="100%" height="589">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="regtab" width="95%" height="550">
          <tr>
            <td width="100%" colspan="8" height="42" class="title" id="border_bottom">
            Update Student Details</td>
          </tr>
          <tr>
            <td width="100%" height="21" colspan="8" class="msg" align="center"><center><?=$error?></center></td>
          </tr>
          <tr>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
            <td width="15%" height="42" class="labels" id="border_bottom">Name</td>
            <td width="31%" height="42" id="border_bottom">
            <input type="text" name="name" size="20" class="textbox" value="<?=$res[1]?>" autocomplete="off"></td>
            <td width="17%" height="42" class="labels" id="border_bottom">Parentage</td>
            <td width="33%" height="42" id="border_bottom" colspan="3">
            <input type="parentage" name="parentage" size="20" class="textbox" value="<?=$res[2]?>" autocomplete="off"></td>
            <td width="1%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
            <td width="15%" height="42" class="labels" id="border_bottom">Gender</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="gender" class="regdrop">
            <option>Male</option>
            <option>Female</option>
            <option>Transgender</option>
            <option value="<?=$res[3]?>" selected> <?=$res[3]?></option>

            </select></td>
            <td width="17%" height="42" class="labels" id="border_bottom">Date Of 
            Birth</td>
            <td width="10%" height="42" id="border_bottom">
            <select size="1" name="dt" class="regdrop2">
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
<option value="<?=$d_d?>" selected><?=$d_d?></option>            

</select></td>
            <td width="10%" height="42" id="border_bottom">
            <select size="1" name="mt" class="regdrop2">
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
            <option>11</option>
            <option>12</option>
<option value="<?=$m_m?>" selected><?=$m_m?></option>  
            </select></td>
            <td width="12%" height="42" id="border_bottom">
            <select size="1" name="yr" class="regdrop2">
<option>1984</option>
            <option>1985</option>
            <option>1986</option>
            <option>1987</option>
            <option>1988</option>
            <option>1989</option>


<option>1990</option>



            <option>1991</option>
            <option>1992</option>
            <option>1993</option>
            <option>1994</option>
            <option>1995</option>
            <option>1996</option>
            <option>1997</option>
            <option>1998</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
<option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>



<option value="<?=$y_y?>" selected><?=$y_y?></option>  
</select></td>
            <td width="1%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
            <td width="15%" height="42" class="labels" id="border_bottom">Contact 
            No</td>
            <td width="31%" height="42" id="border_bottom">
            <input type="text" name="no" size="20" class="textbox" value="<?=$res[5]?>" autocomplete="off"></td>
            <td width="17%" height="42" class="labels" id="border_bottom">Guardian 
            Contact No</td>
            <td width="33%" height="42" id="border_bottom" colspan="3">
            <input type="text" name="gno" size="20" class="textbox" value="<?=$res[6]?>" autocomplete="off"></td>
            <td width="1%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
            <td width="15%" height="42" class="labels" id="border_bottom">Category</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="category" class="regdrop">
            <option>OM</option>
            <option>ST</option>
            <option>SC</option>
            <option>OBC</option>
            <option>ALC</option>
            <option value="<?=$res[7]?>" selected> <?=$res[7]?></option>
            </select></td>
            <td width="17%" height="42" class="labels" id="border_bottom">Session</td>
            <td width="33%" height="42" id="border_bottom" colspan="3">
            <select size="1" name="ses" class="regdrop">
            <option>1996-1997</option>
<option>1997-1998</option>
            <option>1998-1999</option>
            <option>1999-2000</option>



            <option>2000-2001</option>
            <option>2001-2002</option>
<option>2002-2003</option>

            <option>2003-2004</option>
<option>2004-2005</option>
            <option>2005-2006</option>
            <option>2006-2007</option>
            <option>2007-2008</option>
            <option>2008-2009</option>
            <option>2009-2010</option>
<option>2011-2012</option>
            <option>2012-2013</option>
<option>2013-2014</option>

            <option>2014-2015</option>
<option>2015-2016</option>
            <option>2016-2017</option>
            <option>2017-2018</option>
            
            <option value="<?=$res[8]?>" selected> <?=$res[8]?></option>

            </select></td>
            <td width="1%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
            <td width="15%" height="42" class="labels" id="border_bottom">Stream</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="stream" class="regdrop">
            <option>BCA</option>
            <option>BBA</option>
            <option>BSC</option>
            <option>BA</option>
            <option value="<?=$res[9]?>" selected> <?=$res[9]?></option>

            </select></td>
            <td width="17%" height="42" class="labels" id="border_bottom">Subject</td>
            <td width="33%" height="42" id="border_bottom" colspan="3">
            <input type="text" name="subject" size="20" class="textbox" value="<?=$res[10]?>" autocomplete="off"></td>
            <td width="1%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="42" id="border_bottom">&nbsp;</td>
            <td width="15%" height="42" class="labels" id="border_bottom">Semester</td>
            <td width="31%" height="42" id="border_bottom">
            <select size="1" name="sem" class="regdrop">
            <option>Sem-I</option>
            <option>Sem-II</option>
            <option>Sem-III</option>
            <option>Sem-IV</option>
            <option>Sem-V</option>
            <option>Sem-VI</option>

            <option value="<?=$res[11]?>" selected> <?=$res[11]?></option>

            </select></td>
            <td width="17%" height="42" class="labels" id="border_bottom">Class 
            Roll No</td>
            <td width="33%" height="42" id="border_bottom" colspan="3">
            <input type="text" name="roll" size="20" class="textbox" value="<?=$res[12]?>" autocomplete="off"></td>
            <td width="1%" height="42" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="114" id="border_bottom">&nbsp;</td>
            <td width="15%" height="114" valign="top" class="labels" id="border_bottom">
            Address</td>
            <td width="81%" height="114" colspan="5" valign="top" id="border_bottom">
            <textarea rows="2" name="add" cols="20" class="textarea1" ><?=$res[13]?></textarea></td>
            <td width="1%" height="114" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="3%" height="41" id="border_bottom">&nbsp;</td>
            <td width="15%" height="41" class="labels" id="border_bottom">Upload 
            Picture</td>
            <td width="81%" height="41" colspan="5" id="border_bottom">
            <input type="file" name="picture" size="20" class="pic"></td>
            <td width="1%" height="41" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="40" colspan="8" align="center">
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