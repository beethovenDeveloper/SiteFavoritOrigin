<?php

class ListProductSite
{
  public $typeProduct;
  public $imageProduct;
  public $products;
}
class Product
{
	public $nameProduct;
	public $description;
	public $priceProduct;
	public $titleImage;
	public $images;
	public $nalich;

}

class Imagg
{
	public $image;
}

$nameProduct=$_GET["nameProduct"];
$imagePr=$_GET["imagePr"];
$descraib=$_GET["descraib"];
$price=$_GET["price"];
$nalich=$_GET["nalich"];
$namePath=$_GET["namePath"];
$typeProduct=$_GET["typeProduct"];

//serch name file and path file

 $namePr=$_GET["nameProduct"];
     $arrayL;
     $descr=@opendir($namePath);
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
     				$arrayL[$i]=$namePath.$obj;
     				$i++;

     		    }
     		}
     	}
     	closedir($descr);
     }

$fileXmlSave="text.xml";

$listProductSite=new ListProductSite();

        for($l=0;$l<count($arrayL);$l++)
          {
          	echo "".$arrayL[$l];
           $xmls=simplexml_load_file("".$arrayL[$l]);

		      if( $typeProduct=="".$xmls->xpath("//typeProduct")[0])     //strCmp( $namePr, "".$xml->xpath("//typeProduct")[0]))
		      {
			      $fileXmlSave="".$arrayL[$l];
                  $listProductSite->typeProduct="".$xmls->xpath('//typeProduct')[0];
                  $listProductSite->imageProduct="".$xmls->xpath('//imageProduct')[0];

		                   $pr=new Product();
		                   $pr->nameProduct="".$nameProduct;
		                   $pr->description="".$descraib;
		                   $pr->priceProduct="".$price;
		                   $pr->titleImage="".$imagePr;
		                   $pr->nalich="".$nalich;
			                   for($j=0;$j<4;$j++)
			                     {
				                     $im=new Imagg();
				                     $im->im="fgffff";
				                     $pr->images[$j]=$im;
				                 }
		                   $listProductSite->products[0]=$pr;



                  $numsI=count($xmls->xpath('//product'));
                  for($i=0;$i<$numsI;$i++)
                  {


	                    	$pr=new Product();
		                   $pr->nameProduct="".$xmls->xpath('//nameProduct')[$i];
		                   $pr->description="".$xmls->xpath('//description')[$i];
		                   $pr->priceProduct="".$xmls->xpath('//priceProduct')[$i];
		                   $pr->titleImage="".$xmls->xpath('//titleImage')[$i];
		                   $pr->nalich="".$xmls->xpath('//nalich')[$i];
			                   for($j=0;$j<4;$j++)
			                     {
				                     $im=new Imagg();
				                     $im->im="".$xmls->xpath('//image')[$j];
				                     $pr->images[$j]=$im;
				                 }
		                   $listProductSite->products[$i+1]=$pr;
	               }
	           }
	       }



$dom=new DomDocument('1.0');
$products=$dom->appendChild($dom->createElement('products'));
$typeProduct=$products->appendChild($dom->createElement('typeProduct'));
$typeProduct->appendChild($dom->createTextNode("".$listProductSite->typeProduct));
$imageProduct=$products->appendChild($dom->createElement('imageProduct'));
$imageProduct->appendChild($dom->createTextNode("".$listProductSite->imageProduct));

$ccr=count($listProductSite->products);
for($r=0;$r<$ccr;$r++)
{
	$pp=new Product();
	$pp=$listProductSite->products[$r];
	$product=$products->appendChild($dom->createElement('product'));
$nameProduct=$product->appendChild($dom->createElement('nameProduct'));
$nameProduct->appendChild($dom->createTextNode("".$pp->nameProduct));
$description=$product->appendChild($dom->createElement('description'));
$description->appendChild($dom->createTextNode("".$pp->description));
$priceProduct=$product->appendChild($dom->createElement('priceProduct'));
$priceProduct->appendChild($dom->createTextNode("".$pp->priceProduct));
$titpeImage=$product->appendChild($dom->createElement('titleImage'));
$titpeImage->appendChild($dom->createTextNode("".$pp->titleImage));
$nalich=$product->appendChild($dom->createElement('nalich'));
$nalich->appendChild($dom->createTextNode("".$pp->nalich));
     
     	$images=$product->appendChild($dom->createElement('images'));
        $image1=$images->appendChild($dom->createElement('image'));
        $image2=$images->appendChild($dom->createElement('image'));
        $image3=$images->appendChild($dom->createElement('image'));
        $image4=$images->appendChild($dom->createElement('image'));

}


$dom->formatOutput=true;
$dom->save($fileXmlSave);
?>