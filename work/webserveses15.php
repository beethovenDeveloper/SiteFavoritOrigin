<?php
   class ListProduct
   {
	   public $products;
   }
   class Product
   {
      public $idProduct;
	  public $nameProduct;
	  public $typeProduct;
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
   $i=0;
   
   $link=mysqli_connect($url,$user,$password,$database) or die("error");
   
   $sqlQuery1="select * from product";
   
   $result=mysqli_query($link,$sqlQuery1) or die("error query");
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
			$list->products[$i]=$product;
			$i++;
	    }
   }
   
   mysqli_close($link);


   echo json_encode($list);
?>