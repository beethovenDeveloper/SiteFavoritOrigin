<?php
   class UserData
   {
   	   public $userName;
   	   public $password;
   	   public $name;
   	   public $position;
   	   public $typeAccess;
   }

  $userName=$_GET["userName"];
  $passwordUser=$_GET["passwordUser"];
    
   $f=file_get_contents("data/user.xml"); 
   $xml=new SimpleXMLElement($f);
   $mainUser=new UserData();
   $mainUser->userName="guest";

   $i=count($xml->xpath("//userName"));
   for($j=0;$j<$i;$j++)
   {
       $usData=new UserData();
       $usData->userName="".$xml->xpath("//userName")[$j];
       $usData->password="".$xml->xpath("//password")[$j];
       $usData->name="".$xml->xpath("//name")[$j];
       $usData->position="".$xml->xpath("//position")[$j];
       $usData->typeAccess="".$xml->xpath("//typeAccess")[$j];
       if(($userName==$usData->userName)&&($passwordUser==$usData->password))
       {
             $mainUser=$usData;
       }
   }
echo json_encode($mainUser);
   
?>