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
                            <a href="#">Контакты</a>
                        </li>

                        <li>
                            <a href="https://webmail.adm.tools">Почта</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section" style="background-color: rgba(220, 220,220, 0.8);">
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
              <div class="contactData">

                  <p style="text-align:center;font-size:30px">Контактные данные</p>

                  <div class="phones">
                  <p style="text-align:center;font-size:24px">Контактные лица</p>
                      <table style="margin-left:25px;"> 
                      <tr>
                         <td style="width:100px;height:30px;"></td>
                         <td style="width:200px;height:30px;""></td>
                      </tr>
                       <tr>
                         <td colspan="2"><p style="text-align:center;font-size:18px">Менеджер по продажам</p></td>
                      </tr>
                       <tr>
                         <td style="width:100px;height:30px;"></td>
                         <td style="width:200px;height:30px;""></td>
                      </tr>
                      <tr>
                         <td>Телефоны :</td>
                         <td></td>
                      </tr>
                      <tr>
                         <td></td>
                         <td><img src="image/teh/kievstar.png" width="30" height="30">067 243 52 95</td>
                      </tr>
                      <tr>
                         <td></td>
                         <td><img src="image/teh/vodafon.jpg" width="30" height="30">095 288 10 55</td>
                      </tr>
                       <tr>
                         <td style="width:100px;height:30px;"></td>
                         <td style="width:200px;height:30px;""></td>
                      </tr>
                      <tr>
                         <td>E-mail</td>
                         <td>Manager@favorit-3.biz.ua</td>
                      </tr>
                      </table>
                  </div>

                  <div class="teritory">
                  <p style="text-align:center;font-size:24px">Адрес / Расположение</p>
                  <br>
                  <p style="text-align:center;font-size:20px;font-style:italic;">Юредический и фактический адрес</p>
                  <p style="text-align:center;font-size:16px;font-style:italic;">Украина, Херсонская обл., Каховский р-н., с. Роздольное. ул. Комплекс строений, дом 6, индекс 74840</p>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d43785.92766616169!2d33.54293832692183!3d46.69349100834886!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1469010738827" width="300" height="250" frameborder="0" style="border:1;margin-left:75px" allowfullscreen></iframe>
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
           $(".contactData").css({marginLeft:d});
                </script>
</body></html>

