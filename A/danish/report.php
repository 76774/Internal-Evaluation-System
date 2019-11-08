<?php
include("validate.php");
include("admintop.php");
?>




<form action="reportfile.php" method="post">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" class="bkwhite" width="72%" height="399">
    <tr>
      <td width="100%" height="399">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" class="regtab" width="49%" height="227">
          <tr>
            <td width="100%" colspan="4" height="41" class="title" id="border_bottom">Report Form</td>
          </tr>
          <tr >
            <td width="8%" height="21">&nbsp;</td>
            <td width="28%" height="21">&nbsp;</td>
            <td width="54%" height="21" >&nbsp;</td>
            <td width="10%" height="21" >&nbsp;</td>
          </tr>
          <tr>
            <td width="8%" height="41" id="border_bottom">&nbsp;</td>
            <td width="28%" height="41" id="border_bottom" class="labels">Stream</td>
            <td width="54%" height="41" id="border_bottom">


<?php
            include("cont.php");
            $q="select distinct stream from student_detail where status='T' order by stream asc";
            
           
            $qery=mysqli_query($con,$q);
            ?>
<select size="1" name="stream" class="regdrop">
           <option value="">Select stream from..</option>
            
            <?php
            while($res=mysqli_fetch_row($qery))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>




</td>
            <td width="10%" height="41" id="border_bottom">&nbsp;</td>
          </tr>
          <tr id="border_bottom">
            <td width="8%" height="40" id="border_bottom">&nbsp;</td>
            <td width="28%" height="40" id="border_bottom" class="labels">Semester</td>
            <td width="54%" height="40" id="border_bottom">



<?php
            
            $r="select distinct semester from student_detail where status='T' order by semester asc";
            
           
            $qeury=mysqli_query($con,$r);
            ?>
<select size="1" name="semester" class="regdrop">
           
            
            <?php
            while($res=mysqli_fetch_row($qeury))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>




</td>
            <td width="10%" height="40" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="8%" height="40" id="border_bottom">&nbsp;</td>
            <td width="28%" height="40" id="border_bottom" class="labels">Session</td>
            <td width="54%" height="40" id="border_bottom">

<?php
            
            $r="select distinct session from student_detail where status='T' order by session asc";
            
           
            $qeury=mysqli_query($con,$r);
            ?>
<select size="1" name="session" class="regdrop">
           
            
            <?php
            while($res=mysqli_fetch_row($qeury))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
</select>





</td>
            <td width="10%" height="40" id="border_bottom">&nbsp;</td>
          </tr>
          <tr>
            <td width="100%" height="39" colspan="4" align="center">
            <input type="submit" value="Submit" name="B1" class="buttons"></td>
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