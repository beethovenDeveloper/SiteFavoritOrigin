<?php
   /*
      this is scrept for add type product for database product
   */
   include "database/workdatabase.php";

   $nameTypeProduct=$_GET['typeProduct'];
   $nameCategoryProduct=$_GET['categoryProduct'];
   $connectionDatabase=mysqli_connect($url,$user,$password,$database) or die("error connect database - ".$database);
   $sqlQuery="insert into typeProduct(nametype,camecategory)values('".$nameTypeProduct."','".$nameCategoryProduct."')";
   $result=mysqli_query($connectionDatabase,$sqlQuery);

   mysqli_close($connectionDatabase);
?>