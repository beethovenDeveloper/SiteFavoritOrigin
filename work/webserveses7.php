<?php


class ListNews
{
	public $news;
}
class News
{
	public $title;
    public $image;
    public $author;
    public $dates;
    public $type;
    public $content;
}
$listNews=new ListNews();
$dirs=opendir("news");
$i=0;
while(($e=readdir($dirs))!==false)
{
	if(($e==".") || ($e==".."))
	{
	}
	else
	{
		$news=new News();
		$f=file_get_contents("news/".$e);
		$fileNews=new SimpleXMLElement($f);
		$news->title="".$fileNews->xpath("//title")[0];
		$news->image="".$fileNews->xpath("//image")[0];
		$news->author="".$fileNews->xpath("//author")[0];
		$news->dates="".$fileNews->xpath("//dates")[0];
		$news->type="".$fileNews->xpath("//type")[0];
		$news->content="".$fileNews->xpath("//content")[0];
		$listNews->news[$i]=$news;
		$i++;
	}
}


echo json_encode($listNews);

?>