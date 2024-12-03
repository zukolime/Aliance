<!DOCTYPE html>
<html lang="ru">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
        />
        <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="./css/normalize.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>О компании — Aliance Production</title>
      </head>
      <body>
        <div class="mobile-menu">
          <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
              <a href="#" class="mobile-menu-link">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
              <a href="#" class="mobile-menu-link">Контрактное производство</a>
              <ul class="mobile-submenu">
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#"
                    >Автомобильная химия</a
                  >
                </li>
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#">Бытовая химия</a>
                </li>
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#"
                    >Дезинфицирующие средства</a
                  >
                </li>
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
                </li>
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#"
                    >Косметическая продукция</a
                  >
                </li>
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
                </li>
              </ul>
            </li>
            <li class="mobile-menu-nav-item">
              <a href="#" class="mobile-menu-link"
                >Собственные торговые марки</a
              >
              <ul class="mobile-submenu">
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
                </li>
                <li class="mobile-submenu-item">
                  <a class="mobile-submenu-link" href="#">Автохимия AP</a>
                </li>
              </ul>
            </li>
            <li class="mobile-menu-nav-item">
              <a href="#" class="mobile-menu-link">Новости</a>
            </li>
            <li class="mobile-menu-nav-item">
              <a href="#" class="mobile-menu-link">Контакты</a>
            </li>
          </ul>
          <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
          <div class="mobile-info">
            <svg class="address-icon" width="24" height="24">
              <use href="./img/sprite.svg#address"></use>
            </svg>
            <address class="mobile-info-address">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="mobile-info">
            <svg class="mail-icon" width="24" height="24">
              <use href="./img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="network-buttons">
            <a href="#"
              ><svg class="logo-vk" width="24" height="24">
                <use href="./img/sprite.svg#vk"></use></svg
            ></a>
            <a href="#"
              ><svg class="logo-inst" width="24" height="24">
                <use href="./img/sprite.svg#inst"></use></svg
            ></a>
          </div>
        </div>
        <!-- /.mobile-menu -->
        <nav class="navbar navbar-light">
          <!-- /.mobile-menu-toggle -->
          <a href="#" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
          </a>
          <!-- /.mobile-menu-toggle -->
          <a href="./" class="header-logo">
            <svg class="logo-svg logo-light">
              <use href="./img/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
              <use href="./img/sprite.svg#logo"></use>
            </svg>
          </a>
          <ul class="header-nav">
            <li class="header-nav-item">
              <a href="./about.php" class="header-nav-link">О компании</a>
            </li>
            <li class="header-nav-item">
              <a href="#" class="header-nav-link">Контрактное производство</a>
            </li>
            <li class="header-nav-item">
              <a href="#" class="header-nav-link">Собственные торговые марки</a>
            </li>
            <li class="header-nav-item">
              <a href="#" class="header-nav-link">Новости</a>
            </li>
            <li class="header-nav-item">
              <a href="#" class="header-nav-link">Контакты</a>
            </li>
          </ul>
          <div class="header-phone">
            <svg class="logo-phone" width="24" height="24">
              <use href="./img/sprite.svg#phone"></use>
            </svg>
            <a href="tel:+74996861014" class="header-phone-link">
              +7 (499) 686-10-14
            </a>
          </div>
          <!-- /.header-phone -->
          <button class="navbar-button button" data-toggle="modal">
            <svg class="button-icon" width="24" height="24">
              <use href="./img/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
          </button>
        </nav>
        <!-- /.navbar -->

        <section class="about">
          <div class="bg section-about">
            <div class="container">
              <div class="seporator"></div>
              <h2 class="section-title title-about">о компании</h2>
              <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li class="active">О компании</li>
              </ul>
            </div>
          </div>
        </section>

        <?php include_once('footer.php')?>

