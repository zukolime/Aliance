  <!-- блок слайдера -->
  <div class="swiper picture-slider">
    <!-- обертка слайдера-->
    <div class="swiper-wrapper">
      <!-- Слайды -->
       <picture class="swiper-slide picture-slider--img">
          <source type="image/webp" srcset="./img/blog-photo-1.webp" class="picture-slider--img" loading="lazy">
          <source type="image/jpeg" srcset="./img/blog-photo-1.jpg" class="picture-slider--img" loading="lazy">
          <img src="./img/blog-photo-1.jpg" alt="blog-photo-1" class="picture-slider--img" loading="lazy" />
        </picture>
        <picture class=" swiper-slide picture-slider--img">
          <source type="image/webp" srcset="./img/blog-photo-2.webp" class="picture-slider--img" loading="lazy">
          <source type="image/jpeg" srcset="./img/blog-photo-2.jpg" class="picture-slider--img" loading="lazy">
          <img src="./img/blog-photo-1.jpg" alt="blog-photo-2" class="picture-slider--img" loading="lazy" />
        </picture>
        <picture class="swiper-slide picture-slider--img">
          <source type="image/webp" srcset="./img/blog-photo-1.webp" class="picture-slider--img" loading="lazy">
          <source type="image/jpeg" srcset="./img/blog-photo-1.jpg" class="picture-slider--img" loading="lazy">
          <img src="./img/blog-photo-1.jpg" alt="blog-photo-1" class="picture-slider--img" loading="lazy" />
        </picture>
        <picture class="swiper-slide picture-slider--img">
          <source type="image/webp" srcset="./img/blog-photo-2.webp" class="picture-slider--img" loading="lazy">
          <source type="image/jpeg" srcset="./img/blog-photo-2.jpg" class="picture-slider--img" loading="lazy">
          <img src="./img/blog-photo-1.jpg" alt="blog-photo-2" class="picture-slider--img" loading="lazy" />
        </picture>
    </div>
    <!-- кнопки слайдера -->
    <div class="container">
      <div class="slider-footer picture-slider--footer">
      <div class="picture-slider--buttons primary-buttons-wrapper">
        <div class="picture-slider--button-prev primary-button-prev">
          <svg width="36" height="24">
            <use href="./img/sprite.svg#arrow-prev"></use>
          </svg>
        </div>
        <div class="picture-slider--button-next primary-button-next">
          <svg width="36" height="24">
            <use href="./img/sprite.svg#arrow-next"></use>
          </svg>
        </div>
      </div>
    </div>
      <!-- /blog-buttons -->
    </div>
    <!-- /slider-footer -->
  </div>  