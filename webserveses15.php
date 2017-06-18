<?php
   class ListProduct
   {
	   public $categoryProduct;
   }
   class CategoryProduct
   {
   	   public $nameCategory;
       public $typeProduct;
   }

   class TypeProduct
   {
   	 public $nameType;
   	 public $products;
   }
   class Product
   {
      public $idProduct;
	  public $nameProduct;
	  public $content;
	  public $titleImage;
	  public $image1;
	  public $image2;
	  public $image3;
	  public $image4;
	  public $price;
	  public $availability;
	  public $count;
   }

   $user="root";
   $password="111111";
   $url="localhost";
   $database="products";
   
   $list=new ListProduct();
   
   $link=mysqli_connect($url,$user,$password,$database) or die("error");


   $arrayType;
   $sqlQuery2="select * from categoryProduct";
   $j=0;
   $result1=mysqli_query($link,$sqlQuery2)or die("error query 1");
   if($result1)
   {
         while($row=mysqli_fetch_row($result1))
         {
         	$list->categoryProduct[$j]=getTypeProduct($row[1],$link);
         	$j++;
         }
   }


   function getTypeProduct($categorys,$links)
   {
   	 $categor=new CategoryProduct();
   	 $categor->nameCategory=$categorys;
   	 $i=0;
   	 $sqlQuery1="select * from typeproduct where categoryPr='".$categorys."'";
   	 $result=mysqli_query($links,$sqlQuery1) or die("error query");
   	 if($result)
    	{
        	while($row=mysqli_fetch_row($result))
	   			{
                    $categor->typeProduct[$i]=getListProduct($row[1],$links);
                    $i++;
	   			}
	   	}
	   	return $categor;
   }

   function getListProduct($TypP,$links)
   {
   $type=new TypeProduct();
   $type->nameType=$TypP;
   $i=0;
   $sqlQuery1="select * from product where typeProduct='".$TypP."'";
   $result=mysqli_query($links,$sqlQuery1) or die("error query");
   if($result)
   {
       while($row=mysqli_fetch_row($result))
	   {
			$product=new Product();
			$product->idProduct=$row[0];
			$product->nameProduct=$row[1];
			$product->typeProduct=$row[2];
			$product->content=$row[3];
			$product->titleImage=$row[4];
			$product->image1=$row[5];
			$product->image2=$row[6];
			$product->image3=$row[7];
			$product->image4=$row[8];
			$product->price=$row[9];
			$product->availability=$row[10];
			$product->count=$row[11];
			$type->products[$i]=$product;
			$i++;
	    }
   }
   return $type;
   }
   
   mysqli_close($link);


   echo json_encode($list);
?>