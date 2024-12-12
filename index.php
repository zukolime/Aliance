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
    <title>Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
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
          <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
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
          <a href="./blog.php" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contacts.php" class="mobile-menu-link">Контакты</a>
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
    <nav class="navbar">
      <!-- /.mobile-menu-toggle -->
      <a href="#" class="mobile-menu-toggle" aria-label="Меню">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <!-- /.mobile-menu-toggle -->
      <a href="./" class="header-logo" aria-label="Логотип. Переход на главную страницу">
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
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="./blog.php" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="./contacts.php" class="header-nav-link">Контакты</a>
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
      <button class="navbar-button button" aria-label="Name" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами и расходными материалами бизнеса
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <div class="button header-button" data-toggle="modal" data-target="#feedback-modal">
            Подробнее о компании
          </div>
        </div>
        <!-- /.header-content -->

        <!-- основной блок слайдера -->
        <?php $block_title = "контрактное производство"; include_once('./template-parts/features.php')?>
      </div>
      <!-- /.container -->
    </header>
    <?php include_once('./template-parts/steps-block.php')?>
    <?php include_once('./template-parts/contracts-block.php')?>
    <!-- /.section-production -->
    <?php $block_title = "собственные торговые марки"; include_once('./template-parts/trademarks-block.php')?>
    <?php $link_title = '<a href="./about.php" class="button-link founder-link">Подробнее о компании</a>'; 
    include_once('./template-parts/founder-block.php')?>
    <!-- /.section founder -->
    <?php include_once('./template-parts/clients-block.php')?>
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>

        <!-- блок слайдера для Блога -->
        <div class="swiper blog-slider">
          <!-- обертка слайдера для Блога -->
          <div class="swiper-wrapper">
            <!-- Слайды Блога -->
            <a href="./blog-more.php" class="swiper-slide blog-card">
              <picture class="blog-card-image">
                <source type="image/webp" srcset="./img/blog-photo-1.webp" class="blog-card-image">
                <source type="image/jpeg" srcset="./img/blog-photo-1.jpg" class="blog-card-image">
                <img src="./img/blog-photo-1.jpg" alt="blog-photo-1" class="blog-card-image" />
              </picture>
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
            <a href="./blog-more.php" class="swiper-slide blog-card">
              <picture class="blog-card-image">
                <source type="image/webp" srcset="./img/blog-photo-2.webp" class="blog-card-image">
                <source type="image/jpeg" srcset="./img/blog-photo-2.jpg" class="blog-card-image">
                <img src="./img/blog-photo-2.jpg" alt="blog-photo-2" class="blog-card-image" />
              </picture>
              <h3 class="blog-card-title">
                Сложно сказать, почему жизнь прекрасна
              </h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса
                функционально разнесены на независимые элементы. Безусловно,
                высокотехнологичная...
              </p>
            </a>
            <a href="./blog-more.php" class="swiper-slide blog-card">
              <picture class="blog-card-image">
                <source type="image/webp" srcset="./img/blog-photo-1.webp" class="blog-card-image">
                <source type="image/jpeg" srcset="./img/blog-photo-1.jpg" class="blog-card-image">
                <img src="./img/blog-photo-1.jpg" alt="blog-photo-1" class="blog-card-image" />
              </picture>
              <h3 class="blog-card-title">
                Современная методология разработки одухотворила всех причастных
              </h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся
                непростую экономическую ситуацию, в равной степени
                предоставлены...
              </p>
            </a>
          </div>
          <!-- кнопки слайдера для Блога -->
          <div class="blog-slider-footer">
            <a href="./blog.php" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="36" height="24">
                  <use href="./img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="36" height="24">
                  <use href="./img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- /.blog-buttons -->
          </div>
          <!-- /.blog-slider-footer -->
        </div>
      </div>
      <!-- /.container blog-->
    </section>    
   
    <?php include_once('footer.php')?>


