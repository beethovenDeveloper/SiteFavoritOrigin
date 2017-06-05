<html ng-app="app"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="main.css" rel="stylesheet" type="text/css">
        <link href="mycss.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/angular.min.js"></script>
                    <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="js/ang.js"></script>
    </head><body background="1.jpg">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>ЧП "Фаворит - ІІІ"</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse" ng-controller="Contact">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="index.html">Домой</a>
                        </li>
                        <li ng-click="luckContact();">
                            <a href="contact.php">Контакты</a>
                        </li>

                        <li>
                            <a href="https://webmail.adm.tools">Почта</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section" style="background-color: rgba(220, 220,220, 0.8);">
            <div class="container">
                <div class="row">
                    <div class="contact">
                        <center>
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <p style="font-size:16px;font-style:italic;">Контактные данные:</p>
                                        </td>
                                        <td style="width:30px">
                                        </td>
                                        <td>
                                        тел. <img src="image/teh/kievstar.png" width="15" height="15">067 243 52 95
                                        </td>
                                         <td style="width:30px">
                                        </td>
                                        <td>
                                            <img src="image/teh/vodafon.jpg" width="15" height="15"> 095 228 10 55
                                        </td>
                                         <td style="width:60px">
                                        </td>
                                        <td>
                                            E-mail
                                        </td>
                                         <td style="width:30px">
                                        </td>
                                        <td>
                                            Manager@favorit-3.biz.ua
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="index.html">Стартовая страница</a>
                                </li>
                                <li>
                                    <a href="#">Продукция</a>
                                </li>
                                <li>
                                    <a href="#">Сообщения</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
            <div class="row">
              <div class="prodPan">
                     <p style="font-size:40px;text-align:center">
                     Прадукция в наличии</p>
         <?php

      $arrayL;
     $desrr=@opendir("product");
     if($desrr)
     {
        $i=0;
        while($obgg=readdir($desrr))
        {
            if($obgg!='uslugi')
            {
              if($obgg!='.')
               {
                if($obgg!='..')
                {
                     $descr=@opendir("product/".$obgg."/");
                     if($descr)
                     {
                        //chdir("product/fructe");
                        while($obj=readdir($descr))
                        {
                            if($obj!='.')
                            {
                                if($obj!='..')
                                {
                                    $arrayL[$i]="product/".$obgg."/".$obj;
                                    $i++;

                                }
                            }
                        }
                        closedir($descr);
                    }
                 }
             }
         }
         }
    }

class Prod{
    public $nameProduct;
    public $titleImage;
    public $description;
    public $price;

}
$iNum=0;
$iCol=5;
$arrayProduct;

$pages1=$_GET["page"];
        for($l=0;$l<count($arrayL);$l++)
          {
               $xmls=simplexml_load_file("".$arrayL[$l]);
               
               $numsI=count($xmls->xpath('//product'));

                      for($i=0;$i<$numsI;$i++)
                      {
                            $datasr="".$xmls->xpath('//nalich')[$i];

                            if($datasr=='yas')
                            {

                                $pr=new Prod();
                                $pr->nameProduct="".$xmls->xpath('//nameProduct')[$i];
                                $pr->titleImage="".$xmls->xpath('//titleImage')[$i];
                                $pr->description="".$xmls->xpath('//description')[$i];
                                $pr->price="".$xmls->xpath('//priceProduct')[$i];
                                $arrayProduct[$iNum]=$pr;
                                $iNum++;
                              
                                 // $iNum++;
                             }
                       }
             }
             $colP=count($arrayProduct);
             echo "<p style='font-size:18px;text-align:center'>Найдено - ".$colP." доступнх товара</p>";
              $ras=$colP/5;
              $rasOkr=floor($ras);
              $stringNum;
              $startPosition=($pages1-1)*5;
              $endPosition=$pages1*5;

             for($e=$startPosition;$e<$endPosition;$e++)
             {
                $prod=$arrayProduct[$e];
                     echo "<div class='prod'>";
                                
                     echo "<div class='imP' dopp='''><img src='".$prod->titleImage."' width='100' height='100' style='margin-left:10px;'></div>";
                     echo "<div class='nameP'><p style='text-align:center;font-style:italic'>".$prod->nameProduct."</p></div>";
                     echo "<div class='descP'><br>".$prod->description."</div>";
                    // echo "<div class='picP'>".$xml->xpath('//description')[$j]."</div>";
                   
                    
                     echo "<div class='priceP'><p style='font-size:26px;'>".$prod->price." грн.</p><p>".$drd."</p>

                     </div>";
                     

                     $t=$xmls->xpath('//image[@ln='.$i.']');
                     echo "<div class='picP'><table><tr>";
                     echo "<td style='width:50px;height:50px;'><img src='".$t[0]."' width='40' height='40'></td><td><img src='".$t[1]."' width='40' height='40'></td></tr><tr>";
                     echo "<td><img src='".$t[2]."' width='40' height='40'></td><td><img src='".$t[3]."' width='40' height='40'></td>";
                     echo "</tr></table></div>";
                     echo "</div>";
             }
             if($ras>$rasOkr)
             {
                $ras++;
             }
              for($rr=1;$rr<=$ras;$rr++)
              {
               $stringNum.="<a href='http://favorit-3.biz.ua/alltrueproducts.php?page=".$rr."'>".$rr."</a> - ";
              }
              echo "<br><p style='font-size:16px;text-align:center;'>".$stringNum."</p>";
             ?>

                
               	</div>
              </div>
            </div>
            </div>
            <footer class="section section-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>ЧП "ФАВОРИТ - ІІІ"</h1>
                            <br>
                            <p style="text-align:center;">............BEET)(OVEN ..........company</p>
                        </div>
                    </div>
                </div>
            </footer>
            <script type="text/javascript" src="js/angular.min.js"></script>
            <script type="text/javascript" src="js/ang.js"></script>
            <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
        </div>
    
                 <script>
                  
           var s=document.documentElement.clientWidth;
           var d=(s-900)/2;
           $(".prodPan").css({marginLeft:d});
                </script>
</body></html>