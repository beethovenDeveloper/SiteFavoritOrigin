<html ng-app="app"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="main.css" rel="stylesheet" type="text/css">
        <link href="mycss.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/ang.js"></script>
		        <script type="text/javascript" src="js/angular.min.js"></script>
                    <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<!--[if lt IE 9]>
  <script type="text/javascript" src="/js/excanvas/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="js/spinners/spinners.min.js"></script>
<script type="text/javascript" src="js/lightview/lightview.js"></script>

<link rel="stylesheet" type="text/css" href="css/lightview/lightview.css"/>




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

                  <?php
                        $adr=$_GET['files'];
		               $xml=simplexml_load_file($adr);
                        $i=count($xml->xpath("//nameProduct"));
                        echo "<p class='titleProd'>".$xml->xpath('//typeProduct')[0]."</p>";
              $pages1=$_GET["page"];
              $ras=$i/6;
              $rasOkr=floor($ras);
              $stringNum;
              $startPosition=($pages1-1)*6;
              $endPosition=$pages1*6;

                       echo "<p style='text-align:center;font-size=16px;'>По зпросу ".$xml->xpath('//typeProduct')[0]." найдено -  ".$i." видов продукции</p>";

                       for($j=$startPosition;$j<$endPosition;++$j)
                      {
                   $drd="";
                   $cll="";
                   $dat="".$xml->xpath('//priceProduct')[$j];
                   $nal=$xml->xpath('//nalich')[$j];
                     if($nal=='yas')
                     {
                         $drd="в наличии";
                         $cll="prod";
                         if($dat=="0")
                         {
                            $dat="Договорная";
                         }
                         else
                         {
                            $dat="".$dat." грн.";
                         }
                     }
                     else
                     {
                         $drd="нет в наличии";
                         $cll="prod1";
                         if($dat=="0")
                         {
                            $dat="Не определена";
                         }
                         else
                         {
                            $dat="".$dat." грн.";
                         }
                     }

                    $nameProductss="".$xml->xpath('//nameProduct')[$j];
                    if($nameProductss!="")
                    {

                         $imageTit="".$xml->xpath('//titleImage')[$j];
                        

                         if($imageTit=="")
                         {
                              $imageTit="image/photo.jpg";
                         }
                     echo "<div class='".$cll."'>";
		            
		             echo "<div class='imP' dopp='".$nal."''><a href='".$imageTit."' class='lightview' data-lightview-title='".$nameProductss."''><img src='".$imageTit."' width='100' height='100' style='margin-left:10px;'></a></div>";
		             echo "<div class='nameP'><p style='text-align:center;font-style:italic'>".$xml->xpath('//nameProduct')[$j]."</p></div>";
		             echo "<div class='descP'><br>".$xml->xpath('//description')[$j]."</div>";
		            // echo "<div class='picP'>".$xml->xpath('//description')[$j]."</div>";
                   
                    
		             echo "<div class='priceP'><p style='font-size:22px;'>".$dat."</p><p>".$drd."</p>

                     </div>";
                     

                     $t=$xml->xpath('//image[@ln='.$j.']');
                     //$t=$xml->xpath('//image');
                     if($t[0]==""){
                          $t[0]="image/photo.jpg";
                     }
                     if($t[1]=="")
                     {
                          $t[1]="image/photo.jpg";
                     }
                    if($t[2]=="")
                     {
                          $t[2]="image/photo.jpg";
                     }
                    if($t[3]=="")
                     {
                          $t[3]="image/photo.jpg";
                     }

                     echo "<div class='picP'><table><tr>";
                     echo "<td style='width:50px;height:50px;'><a href='".$t[0]."' class='lightview' data-lightview-group='shared_options".$j."'  data-lightview-title='".$nameProductss."'><img src='".$t[0]."' width='40' height='40'></a></td><td><a href='".$t[1]."' class='lightview' data-lightview-group='shared_options".$j."'  data-lightview-title='".$nameProductss."'><img src='".$t[1]."' width='40' height='40'></a></td></tr><tr>";
                     echo "<td><a href='".$t[2]."' class='lightview' data-lightview-group='shared_options".$j."'  data-lightview-title='".$nameProductss."'><img src='".$t[2]."' width='40' height='40'></a></td><td><a href='".$t[3]."' class='lightview' data-lightview-group='shared_options".$j."'   data-lightview-title='".$nameProductss."'><img src='".$t[3]."' width='40' height='40'></a></td>";
                     /*for($u=0;$u<5;$u++)
                     {
                        echo "<td>".$t[$u]."</td>";
                     }*/
                     echo "</tr></table></div>";
                     echo "</div>";
                 }

                 }

                  if($ras>$rasOkr)
             {
                $ras++;
             }
              for($rr=1;$rr<=$ras;$rr++)
              {
               $stringNum.="<a href='http://favorit-3.biz.ua/product.php?page=".$rr."&files=".$adr."'>".$rr."</a> - ";
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

