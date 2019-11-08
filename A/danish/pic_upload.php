
<?php
$picture = isset($_REQUEST["picture"])?$_REQUEST["picture"]:"";

$valid_formats = array("jpg","jpeg","png","JPG","JPEG");


       if(!isset($_FILES) && isset($HTTP_POST_FILES))
             $_FILES = $HTTP_POST_FILES;
       if(!isset($_FILES['picture']))
             $errmsg = "A file was not found.";

       $name = basename($_FILES['picture']['name']);


          if(!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) )
				 $error .= " $name is not a valid format";

          $ext = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
		
             if(empty($ext))
               $error.= "Error Occur in Uploading File";
       if(empty($error))
        {
        $id = time();
        $imgname = $id;                                                                                                           
        $picname = $imgname.".".$ext ;
        $_SESSION['fileName1'] = $picname;
        $newpicture = "upload_pic/" . $picname;
        $result = @move_uploaded_file($_FILES['picture']['tmp_name'], $newpicture);
 
 echo("<body leftmargin='0' topmargin='0'><tr><td width='16%' height='30'><font size='2' color='#ff0000'>&nbsp;File Uploaded Successfully.&nbsp;</font></td></body>");
}

?>
      
            
         
         
        
     

    