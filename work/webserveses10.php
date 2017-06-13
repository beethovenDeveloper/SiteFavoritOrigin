<?php

    $ti=$_GET["title"];
    $ty=$_GET["type"];
    $co=$_GET["content"];
	$da=$_GET["date"];
	$au=$_GET["author"];
	$im=$_GET["image"];

    $connews="<news></news>";
    $xml=new SimpleXMLElement($connews);
    $xml->addChild("title",$ti);
	$xml->addChild("image",$im);
    $xml->addChild("author",$au);
	$xml->addChild("date",$da);
    $xml->addChild("type",$ty);
	$xml->addChild("content",$co);
    
    $fold=opendir("news");
    $i=1;//$fold->count;
    while(($e=readdir($fold))!==false)
	{
		$i++;
	}
    $xml->asXML("news/news".$i.".xml");

?>