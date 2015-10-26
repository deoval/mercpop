<?php  $components = 'templates.default.components.';?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$loja->nome}} | Mercpop</title>
  <link rel="icon" href="assets/images/favicon.ico">
  <!--[if IE 8]><html class="ie8"><![endif]-->
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="assets/css/theme.css">

	
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div class="wrapper-body">

    <!-- NAVBAR -->
    <!--===============================================================-->
    <div id="header">
      <nav id="nav" class="navbar navbar-default navbar-static-top"> 
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h3 class="title-sm text-theme text-theme-sm"><a class="navbar-brand" href="index.html">MercPop</a></h3>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li class="dropdown">
                <a href="index.html">Home</a>
              </li>       
              <li class="dropdown">
                <a href="#">Mercado</a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="contact-us-option-1.html">Mercado Popular 1</a></li>
          <li><a href="contact-us-option-2.html">Mercado Popular 2</a></li>
          <li><a href="contact-us-option-3.html">Mercado Popular 3</a></li>
          <li><a href="contact-us-option-4.html">Mercado Popular 4</a></li>
                </ul>
              </li> 
        <li class="dropdown">
                <a href="faq.html">FAQ</a>  
              </li>       
              <li class="dropdown">
                <a href="about-us-option-1.html">Sobre</a>  
              </li>       
        <li class="dropdown">
                <a href="contact-us-option-3.html">Contato</a>  
              </li>
            </ul>
      <div class="navbar-right" style="margin-top:12px;margin-left:35px;">
        <div class="dropdown-login pull-left" >
          <a href="#" class="text-theme-xs a-black" >Cadastre-se</a> |      
                    <button class="btn-menu-top" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Entrar</button>
                    <div class="dropdown-menu dropdown-menu-right stop-prop" role="menu" aria-labelledby="dLabel">
                      <div class="wrapper-form-box">
                        <h3>Entrar</h3>
                        <form>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              <input type="text" class="form-control" placeholder="Username">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                              <input type="password" class="form-control" placeholder="Password">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary text-theme-xs mr-8">Entrar</button>
                          <a href="#" class="text-theme-xs pull-right a-black">Esqueceu sua senha?</a>      
                        </form>
                      </div>
                    </div>
                </div>        
        <div class="dropdown-cart pull-left">
        <button class="btn-menu-top hidden-xs" id="dShop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-heart"></i> Desejos</button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-cart stop-prop" role="menu" aria-labelledby="dShop">
          <div class="panel-shopping-cart">
          <table class="table">
            <thead>
            <tr>
              <th class="text-center"><i class="fa fa-shopping-cart"></i></th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Total</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="table-first"><img class="img-responsive" src="assets/images/general/imac.png" alt="theme-img"></td>
              <td><span class="title">Apple iMac 21.5</span></td>
              <td><input type="text" class="form-control" maxlength="3" value="1"></td>
              <td><span>$1249</span></td>
              <td class="close-cart"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-times"></i></a></td>
            </tr>
            <tr>
              <td class="table-first"><img class="img-responsive" src="assets/images/shop/80x80.gif" alt="theme-img"></td>
              <td><span class="title">Asus Laptop</span></td>
              <td><input type="text" class="form-control" maxlength="3" value="1"></td>
              <td><span>$1249</span></td>
              <td class="close-cart"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-times"></i></a></td>
            </tr>
            <tr>
              <td class="table-first"><img class="img-responsive" src="assets/images/shop/80x80.gif" alt="theme-img"></td>
              <td><span class="title">Lenovo Tablet</span></td>
              <td><input type="text" class="form-control" maxlength="3" value="1"></td>
              <td><span>$1249</span></td>
              <td class="close-cart"><a href="#" class="btn btn-primary btn-sm "><i class="fa fa-times"></i></a></td>
            </tr>
            </tbody>
          </table>
          <div class="panel-footer">
            <div class="row">
            <div class="col-sm-3">
              <a href="#" class="btn btn-default btn-sm">Continue Shopping</a>
            </div>
            <div class="col-sm-9 text-right">
              <a href="#" class="btn btn-default btn-sm">Update Cart</a>
              <a href="#" class="btn btn-primary btn-sm">Procceed to checkout</a>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
       </div>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div>
    <!-- NAVBAR END -->
  
    <div class="container mt">
      <div class="row">
        <!-- MAIN CONTENT -->
        <!--===============================================================-->
        <div class="col-sm-8 col-sm-push-2">
        @include("$components.header")
        
        @include("$components.menu")
      
        @include("$components.slideshow")


          <div class="row mt-20">
            <div class="col-md-12">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-tabs-shop" role="tablist">
                <li class="active">
                  <a href="#top-selling-items" role="tab" data-toggle="tab">Destaques</a>
                </li>
                <li>
                  <a href="#newest-laptops" role="tab" data-toggle="tab">Novos</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content tab-content-shop">
            <!-- TAB-CONTENT-1 -->
            <!--===============================================================-->
            <div class="tab-pane fade in active" id="top-selling-items">
              <div class="row mt-20">
                @each("$components.produtos", $destaques, 'produto')
              </div>  
            </div>
            <!-- TAB-CONTENT-2 -->
            <!--===============================================================-->
            <div class="tab-pane fade" id="newest-laptops">
              <div class="row mt-20">
                <div class="col-sm-4">
                  <div class="shop-box bordered">
                    <a href="#" class="img-box text-theme">
                      <img class="img-responsive" src="assets/images/shop/500x500.gif" alt="img-theme">
                    </a>
                    <h3 class="title-sm text-theme text-theme-sm"><a href="#">Ipad Mini</a></h3>
                    <p class="text-theme-sm"><small>Descrição do produto</small>
                    </p>
                    <h3 class="shop-price text-theme-sm">$16.89</h3>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-shopping-cart"></i>Colocar no carrinho</a>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-angle-right"></i>Detalhes</a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="shop-box bordered">
                    <a href="#" class="img-box text-theme">
                      <img class="img-responsive" src="assets/images/shop/500x500.gif" alt="img-theme">
                    </a>
                    <h3 class="title-sm text-theme text-theme-sm"><a href="#">Moto G</a></h3>
                    <p class="text-theme-sm"><small>Descrição do produto</small>
                    </p>
                    <h3 class="shop-price text-theme-sm">$16.89</h3>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-shopping-cart"></i>Colocar no carrinho</a>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-angle-right"></i>Detalhes</a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="shop-box bordered">
                    <a href="#" class="img-box text-theme">
                      <img class="img-responsive" src="assets/images/shop/500x500.gif" alt="img-theme">
                    </a>
                    <h3 class="title-sm text-theme text-theme-sm"><a href="#">Mac Pro</a></h3>
                    <p class="text-theme-sm"><small>Descrição do produto</small>
                    </p>
                    <h3 class="shop-price text-theme-sm">$16.89</h3>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-shopping-cart"></i>Colocar no carrinho</a>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-angle-right"></i>Detalhes</a>
                  </div>
                </div>
              </div>
              <div class="row mt-20">
                <div class="col-sm-4">
                  <div class="shop-box bordered">
                    <a href="#" class="img-box text-theme">
                      <img class="img-responsive" src="assets/images/shop/500x500.gif" alt="img-theme">
                    </a>
                    <h3 class="title-sm text-theme text-theme-sm"><a href="#">LG Led Tv</a></h3>
                    <p class="text-theme-sm"><small>Descrição do produto</small>
                    </p>
                    <h3 class="shop-price text-theme-sm">$16.89</h3>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-shopping-cart"></i>Colocar no carrinho</a>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-angle-right"></i>Detalhes</a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="shop-box bordered">
                    <a href="#" class="img-box text-theme">
                      <img class="img-responsive" src="assets/images/shop/500x500.gif" alt="img-theme">
                    </a>
                    <h3 class="title-sm text-theme text-theme-sm"><a href="#">Playstation 4</a></h3>
                    <p class="text-theme-sm"><small>Descrição do produto</small>
                    </p>
                    <h3 class="shop-price text-theme-sm">$16.89</h3>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-shopping-cart"></i>Colocar no carrinho</a>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-angle-right"></i>Detalhes</a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="shop-box bordered">
                    <a href="#" class="img-box text-theme">
                      <img class="img-responsive" src="assets/images/shop/500x500.gif" alt="img-theme">
                    </a>
                    <h3 class="title-sm text-theme text-theme-sm"><a href="#">Mac Mini</a></h3>
                    <p class="text-theme-sm"><small>Descrição do produto</small>
                    </p>
                    <h3 class="shop-price text-theme-sm">$16.89</h3>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-shopping-cart"></i>Colocar no carrinho</a>
                    <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="#"><i class="fa fa-angle-right"></i>Detalhes</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <ul class="pagination pagination-lg mt-50">
                <li class="active">
                  <a href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>
                  <a href="#">4</a>
                </li>
                <li>
                  <a href="#">Próxima Página »</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- SIDEBAR -->
        <!--===============================================================-->
    <!-- Avaliação e Reviews -->
      </div>
    </div>
    
    @include("$components.avaliacao")

  <!-- GRID POSTS END -->
  <!--===============================================================-->
  
    <!-- SECTION FOOTER -->
    <!--===============================================================-->

    @include("$components.footer")

    <!--SECTION FOOTER BOTTOM -->
    <!--===============================================================-->
    @include("footer-mercpop")
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <script src="assets/js/jquery.bxslider.js"></script>
  <script src="assets/js/page/theme.js"></script>
  <script src="assets/js/page/page.shop-sidebar-and-item.js"></script>
</body>

</html>
