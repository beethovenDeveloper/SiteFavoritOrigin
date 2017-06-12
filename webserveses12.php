<?php
  class InfoClass
  {
  	public $infor;
  }
  
  $titN=$_GET["newsTitle"];
  $fold=opendir("news");
  $info=new InfoClass();
  $info->infor="false";
  while(($fileNext=readdir($fold))!==false)
  {
    if(($fileNext==".") || ($fileNext==".."))
	{
	}
	else
	{
		$f=file_get_contents("news/".$fileNext);
		$fileNews=new SimpleXMLElement($f);
		$str="".$fileNews->xpath("//title")[0];
		if($str==$titN)
		{
        if(unlink("news/".$fileNext))
        {
             $info->infor="true";
        }
		}
	}
}


echo json_encode($info);
?>