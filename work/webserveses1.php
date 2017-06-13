<?php
class ListProduct{
	public $products;
}

class Products
{
	public $nameProduct;
	public $description;
	public $priceProduct;
	public $titleImage;
	public $nalich
;
}
 $getss=$_GET["nameFold"];
 $namePr=$_GET["nameProduct"];
     $arrayL;
     $listProduct=new ListProduct();
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






for($l=0;$l<count($arrayL);$l++)
{
    $xml=simplexml_load_file("".$arrayL[$l]);

		if( $namePr=="".$xml->xpath("//typeProduct")[0])     //strCmp( $namePr, "".$xml->xpath("//typeProduct")[0]))
		{
			$i=count($xml->xpath("//nameProduct"));

					for($j=0;$j<$i;++$j)
					{
					$product1=new Products();
					$product1->nameProduct="".$xml->xpath('//nameProduct')[$j];
					$product1->description="".$xml->xpath('//description')[$j];
					$product1->priceProduct= "".$xml->xpath('//priceProduct')[$j];
					$product1->titleImage="".$xml->xpath('//titleImage')[$j];
					$product1->nalich="".$xml->xpath('//nalich')[$j];
					$listProduct->products[$j]=$product1;
					}

		}
}

echo json_encode($listProduct);
?>