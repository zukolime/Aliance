<div class="swiper features-slider ">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features <?= $header_features_style;?>">
            <!-- слайды -->
            <li class="swiper-slide header-features-item <?= $header_features_item;?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_item;?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#certificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_item;?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_item;?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item <?= $header_features_item;?>">
              <svg class="logo-features">
                <use href="./img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- кнопки навигации вперед/назад -->
          <div class="slider-buttons">
            <div class="slider-button-prev <?= $features_prev_gray;?>">
              <svg width="36" height="24"  >
                <use class="arrow-prev <?= $features_arrowprev_gray;?>" href="./img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next <?= $features_next_gray;?>">
              <svg width="36" height="24">
                <use class="arrow-next <?= $features_arrownext_gray;?>" href="./img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>