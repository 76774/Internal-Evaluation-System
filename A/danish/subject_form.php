<?php
include("validate.php");
include("facultytop.php");
?>

<center>

<table border="0" cellpadding="0" cellspacing="0"  width="72%" height="61" class="bkwhite">
  <tr>
    <td width="100%" height="309" align="center">
    <table border="0" cellpadding="0" cellspacing="0" class="tbl" width="41%" height="139">
      <tr>
        <td width="6%" height="53" id="border_bottom">&nbsp;</td>
        <td width="25%" height="53" class="labels" id="border_bottom">Session</td>
        <td width="62%" height="53" id="border_bottom">
        
        <?php
            include("cont.php");
            $q="select distinct session from subject where status='T'";
            
           
            $qery=mysqli_query($con,$q);
            ?>
        
        
        <select size="1" name="D1" class="regdrop">
        <option>Select session from..</option>
            
            <?php
            while($res=mysqli_fetch_row($qery))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
        
        <option>View All</option>

        
        
        
        </select></td>
        <td width="7%" height="53" id="border_bottom">&nbsp;</td>
      </tr>
      <tr>
        <td width="6%" height="48" id="border_bottom">&nbsp;</td>
        <td width="10%" height="48" class="labels" id="border_bottom">Stream</td>
        <td width="25%" height="48" id="border_bottom">
        
        
        
        
        
        <?php
            include("cont.php");
            $q="select distinct stream from subject where status='T'";
            
           
            $qery=mysqli_query($con,$q);
            ?>
        
        
        <select size="1" name="D1" class="regdrop">
        <option>Select stream from..</option>
            
            <?php
            while($res=mysqli_fetch_row($qery))
            {
            ?>
  <option value="<?=$res[0]?>"> <?=$res[0]?> </option>
            <?php
            }
            ?>
        
        <option>View All</option>

        
        
        
        </select></td>

        
        
        </td>
        <td width="7%" height="48" id="border_bottom">&nbsp;</td>
      </tr>
      <tr>
        <td width="100%" height="36" colspan="4" align="center">
        <input type="submit" value="Submit" name="B1" class="buttons"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</center>
<?php

include("bottom.php");
?>