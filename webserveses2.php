<?php
     class ListNamePr
     {
     	public $namepr;
     }

     class Namep
     {
     	public $name;
     }
     $getss=$_GET["nameFold"];
     $arrayL;
     $lisstNamePr=new ListNamePr();
     $descr=@opendir($getss);
     if($descr)
     {
     	//chdir("product/fructe");
     	$i=0;
     	while($obj=readdir($descr))
     	{
     		if($obj!='.')
     		{
     			if($obj!='..')
     			{
     				$arrayL[$i]=$getss.$obj;
     				$i++;
     		    }
     		}
     	}
     	closedir($descr);
     }
     for($j=0;$j<count($arrayL);$j++)
     {
     	//chdir("product/fructe");
          $namess=new Namep();
     	$xml=simplexml_load_file($arrayL[$j]);
     	$namess->name="".$xml->xpath('//typeProduct')[0];
          $listNamePr->namepr[$j]=$namess;

     }

     echo json_encode($listNamePr);
?>