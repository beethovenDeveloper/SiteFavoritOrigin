<?php 
   /*
       this is webserveses for add data for database  table Category
   */
   include 'database/workdatabase.php';
   $nameCategoryForDatabase=$_GET['databaseCategory'];
   $mysqlConnect=mysqli_connect($url,$user,$password,$nameDatabase) or die ("error connect database ".$nameDatabase);

   $query="insert into category(nameCategory) values('".$nameCategoryForDatabase."'')";

   $result=mysqli_query($mysqlConnect,$query) or die("error query for database product");

   mysqli_close($mysqlConnect);

?>