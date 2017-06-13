<?php
   $uploadfile="image/newsImage/".basename($_FILES["picture"]['name']);
   if(move_uploaded_file($_FILES["picture"]['tmp_name'],$uploadfile))
   {
	   echo "true";
   }
   else
   {
	   echo "false";
   }
?>