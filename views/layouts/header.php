<!doctype html>
<html>
  <head>
    <title>Комплектующие для окон</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    
    
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/tiles.css" rel="stylesheet">
   
    <link href="/template/css/menu-mobile.css" rel="stylesheet">

    <link href="/template/css/style.css" rel="stylesheet">
    <link href="/template/css/moskit.css" rel="stylesheet">
  </head>

  <body> 
    <div class="container-fluid header d-none d-lg-block">      
      <nav class="row navbar navbar-light">
        <div id="header-content" class="ml-auto mr-auto">
          <div class="col-auto d-flex align-items-center">
            <a href="/">
              <img id="logo" src="/template/imgs/logo.png" height="90" alt="">
            </a>
            <div id="title-wrap">
              <span id="company-name">Моё окошко</span><br>
              <span id="what-sell">Комплектующие для окон</span>
            </div>
            <div class="connects-icon-wrap">
<!--               <a class="icon-link" href="#" target="_blank">
                <img class="img-fluid vk-icon" src="/template/imgs/connect/vk.svg" width="25" height="25" alt="">
              </a>
              <a class="icon-link" href="#" target="_blank">
                <img class="img-fluid instagram-icon" src="/template/imgs/connect/instagram.svg" width="27" height="27" alt="">
              </a>
              <a class="icon-link" href="#" target="_blank">
                <img class="img-fluid facebook-icon" src="/template/imgs/connect/facebook.svg" width="29" height="29" alt="">
              </a>  
              <a class="icon-link" href="#" target="_blank">
                <img src="/template/imgs/connect/odnokl.svg" width="25" height="25" alt=""> 
              </a>  --> 
 <!--              <img class="whatsapp-icon" src="/template/imgs/connect/whatsapp.svg" width="27" height="27" alt="">
              <img class="viber-icon" src="/template/imgs/connect/viber.png" width="25" height="25" alt="">
              <img class="telegram-icon" src="/template/imgs/connect/telegram.png" width="25" height="25" alt="">  -->   
            </div>
            <div class="registr-wrap">
              <div class="registr-content">                
                <?php if ( (isset($resOfReg) && $resOfReg) || (User::isGuest() == false) ): ?>
                  <?php require ROOT . '/views/layouts/acc_out.php'; ?>
                  <?php else: ?>
                    <?php require ROOT . '/views/layouts/ent_reg.php'; ?>               
                <?php endif; ?>
              </div>    
            </div>

            <a class="icon-cart" href="/cart">
              <span id="tovarov-v-korz">Товаров в корзине:</span>
              <span id="quantity-goods">
                <?php 
                  if (isset($_SESSION['cart']['quantity'])) {
                    echo $_SESSION['cart']['quantity'];
                  } else echo 0;
                ?>                
              </span>
              <img class="img-fluid" src="/template/imgs/connect/cart.svg" width="25" height="25" alt=""> 
            </a> 
            <div class="col-auto d-flex align-items-center justify-content-end contacts-mob-phone ml-auto">  
              <img class="whatsapp-icon" src="/template/imgs/connect/whatsapp.svg" width="27" height="27" alt="">&nbsp;
              <img class="viber-icon" src="/template/imgs/connect/viber.png" width="25" height="25" alt="">&nbsp;
              <img class="telegram-icon" src="/template/imgs/connect/telegram.png" width="25" height="25" alt=""> &nbsp;
              <img class="phone-icon" src="/template/imgs/connect/phone.svg" width="17" height="17" alt="">
              <div class="phone-digits">+7 (495) 999-18-14</div>        
            </div>
            <div class="col-auto d-flex align-items-center justify-content-end contacts-city-phone ml-auto">        
              <div class="phone-digits">+7 (925) 143-92-99</div>        
            </div>
          </div>
        </div>
      </nav>      
    </div>
    
    <!-- Меню десктоп -->
    <div id="menu-wrap" class="container-fluid header d-none d-lg-block sticky-top">      
      <nav class="row navbar navbar-light">
        <div id="header-content" class="ml-auto mr-auto">
          <div class="col-auto d-flex align-items-center">
            <div id="menu-content">             
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="/home">Главная</a>
                </li>       
                <div class="btn-group">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Каталог         
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/otkos/calc" target="_blank">Откосы</a>
                    <div class="dropdown-divider"></div>                                        
                    <a class="dropdown-item" href="/moskit/calc" target="_blank">Москитные сетки</a>
                    <div class="dropdown-divider"></div>                    
                    <a class="dropdown-item" href="#" target="_blank">Подоконники / Ремонтные накладки</a>
                    <div class="dropdown-divider"></div>                  
                    <a class="dropdown-item" href="#" target="_blank">Материалы для монтажа</a>
                    <div class="dropdown-divider"></div>  
                    <a class="dropdown-item" href="#" target="_blank">Уплотнители</a>
                    <div class="dropdown-divider"></div>  
                    <a class="dropdown-item" href="#" target="_blank">Фурнитура / Ручки / Накладки</a>
                    <div class="dropdown-divider"></div>  
                    <a class="dropdown-item" href="#" target="_blank">Отливы / Козырьки</a>
                    <div class="dropdown-divider"></div>  
                    <a class="dropdown-item" href="#" target="_blank">Панели ПВХ / Сайдинг / Ламинат</a>
                    <div class="dropdown-divider"></div>  
                    <a class="dropdown-item" href="#" target="_blank">Пиломатериалы</a>
                    <div class="dropdown-divider"></div>  
                  </div>
                </div>                
                <li class="nav-item">
                  <a class="nav-link" href="/delivery" target="_blank">Доставка</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/payment" target="_blank">Оплата</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contacts" target="_blank">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>      
    </div>

    <!-- Menu mobile -->
    <div id="header-mob" class="pos-f-t sticky-top d-lg-none">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <!-- Меню -->
          <ul id="accordion" class="accordion list-unstyled">
            <li>      
              <div class="link"><a href="/home">Главная</a></div>
            </li>
            <li>
              <div class="link">Каталог<i class="fa fa-chevron-down"></i></div>
              <ul class="submenu">
                <li><a href="/otkos/calc">Откосы</a></li>
                <li><a href="/moskit/calc">Москитные сетки</a></li>
                <li><a href="#">Подоконники / Ремонтные накладки</a></li>
                <li><a href="#">Материалы для монтажа</a></li>
                <li><a href="#">Уплотнители</a></li>
                <li><a href="#">Фурнитура / Ручки / Накладки</a></li>
                <li><a href="#">Отливы / Козырьки</a></li>
                <li><a href="#">Панели ПВХ / Сайдинг / Ламинат</a></li>
                <li><a href="#">Пиломатериалы</a></li>
              </ul>
            </li>
            <li>      
              <div class="link"><a href="/delivery">Доставка</a></div>
            </li>
            <li>      
              <div class="link"><a href="/payment">Оплата</a></div>
            </li>
            <li style="margin-bottom: 20px;">      
              <div id="last-child-menu-mob" class="link"><a href="/contacts">Контакты</a></div>
            </li>
          </ul>
          <div class="registr-wrap" style="margin-bottom: -20px;">
            <div class="registr-content text-right">                
              <?php if ( (isset($resOfReg) && $resOfReg) || (User::isGuest() == false) ): ?>
                <?php require ROOT . '/views/layouts/acc_out-mob.php'; ?>
                <?php else: ?>
                  <?php require ROOT . '/views/layouts/ent_reg-mob.php'; ?>               
              <?php endif; ?>
            </div>    
          </div>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark no-gutters">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col d-flex align-items-center justify-content-end">     
            <span class="phone-digits">+7 (495) 999-18-14</span>
            <a class="icon-cart" href="/cart">
              <span id="quantity-goods-mob">
                <?php 
                  if (isset($_SESSION['cart']['quantity'])) {
                    echo $_SESSION['cart']['quantity'];
                  } else echo 0;
                ?>  
              </span>
              <img class="img-fluid" src="/template/imgs/connect/cart-white.svg" width="30" height="30" alt=""> 
            </a>
        </div>       
      </nav>
    </div>

