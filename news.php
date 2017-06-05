<?php
   function listNews()
   {
   $folderNews=opendir("news");
   while($newsFile=readdir($folderNews))
   {
   	  if(($newsFile!=".")&&($newsFile!=".."))
   	  {
         $content=file_get_contents("news/".$newsFile);
         $xmlNews=new SimpleXMLElement($content);
         echo "<div class='col-md-3 mainN'>";
         echo "<table><tr>";
         echo "<td style='font-size:10px;width:50%'>".$xmlNews->xpath("//date")[0]."</td>";
         echo "<td style='font-size:10px;width:50%;text-align:right;'>".$xmlNews->xpath("//author")[0]."</td>";
         echo "</tr></table>";
         echo "<table><tr><td style='height:50%'><img src='".$xmlNews->xpath("//image")[0]."' class='img-responsive' height='100'width='100'></td></tr></table>";
         echo "<h2>".$xmlNews->xpath("//title")[0]."</h2>";
         echo "<p>".$xmlNews->xpath("//content")[0]."</p>";
         echo "<p>ddddd</p>";
         echo "</div>";
   	  }
   }
}
?>