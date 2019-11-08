<?php
session_start();
$picture = isset($_REQUEST["picture"])?$_REQUEST["picture"]:"";
$errmsg  = isset($_REQUEST["errmsg"])?$_REQUEST["errmsg"]:"";
$valid_formats = array("pdf","doc","docx","PDF","DOC","DOCX");


       if(!isset($_FILES) && isset($HTTP_POST_FILES))
             $_FILES = $HTTP_POST_FILES;
       if(!isset($_FILES['picture']))
             $errmsg = "A file was not found.";

       $name = basename($_FILES['picture']['name']);


          if(!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) )
				 $errmsg .= " $name is not a valid format";

          $ext = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
		
             if(empty($ext))
               $errmsg="Error Occur in Uploading File";
       if(empty($errmsg))
        {
        $id = time();
        $imgname = $id;                                                                                                           
        $picname = $imgname.".".$ext ;
        $_SESSION['fileName1'] = $picname;
        $newpicture = "uploadfile/" . $picname;
        $result = @move_uploaded_file($_FILES['picture']['tmp_name'], $newpicture);
 
 echo("<body leftmargin='0' topmargin='0'><tr><td width='16%' height='30'><font size='2' color='#ff0000'>&nbsp;File Uploaded Successfully.&nbsp;</font></td></body>");
?>
<td width='16%' height='30'>
<a href="fundorder_iframe1.php?picid=<?=$picname?>"><img src="images/crs.png" border="0" height="11" width="11"></a>
 &nbsp;<a href="uploadfile/<?=$picname?>" target="dynamic">view</a></td>
  </tr>
   </body>
<?php
        } //eof error if
   //************************end of image upload********************
        else                                   
          {                                                            
        $errmsg = "Error Occur in Uploading File" ;            
        echo("<body leftmargin='0' topmargin='1'>
        <tr>
        <td width='16%' height='30'>
        <font size='2' color='#ff0000'>".$errmsg."</font></td>");
        echo("<td width='16%' height='30'><a href='fundorder_iframe1.php'><font size='2' color='0000ff'>&nbsp;&nbsp;Reload</font></a></td></tr></body>"); 
          } //eof else
?>

      
            
         
         
        
     

    