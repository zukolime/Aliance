
<section class="cta">
      <div class="bg-grey section-cta <?= $cta_style;?>">
        <picture class="cta-image" >
          <source type="image/webp" srcset="./img/cta.webp" class="cta-image">
          <source type="image/jpeg" srcset="./img/cta.jpg" class="cta-image" >
          <img src="./img/cta.jpg" alt="cta" class="cta-image"/>
        </picture>
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="user-name"
                  type="text"
                  name="user_name"
                  class="input"
                  placeholder=" "
                />
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input
                  id="user-phone"
                  type="tel"
                  name="user_phone"
                  class="input phone-mask"
                  placeholder=" "
                />
                <label class="input-group-label" for="user-phone"
                  >Номер телефона</label
                >
              </div>
            </div>
            <!-- /.input-group-wrapper -->
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="./img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
            <!-- /.cta-form-footer -->
          </form>
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
    </section>
  <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <a href="./" class="">
            <svg class="logo-svg footer-logo">
            <use href="./img/sprite.svg#logo"></use>
          </svg>
          </a>
          <a href="tel:79996861014" class="footer-phone">+7 (499) 686-10-14</a>
          <div class="footer-info">
            <svg class="address-icon" width="24" height="24">
              <use href="./img/sprite.svg#address"></use>
            </svg>
            <address class="footer-info-address">
              г. Москва, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="footer-info mail-footer-info">
            <svg class="mail-icon" width="24" height="24">
              <use href="./img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
              a.dragunov@tdaliance.ru
            </a>
          </div>
          <div class="footer-social">
            <a href="#" class="footer-social-link" aria-label="Ссылка на FaceBook"
              ><svg class="footer-social-icon" width="24" height="24">
                <use href="./img/sprite.svg#vk"></use></svg
            ></a>
            <a href="#" class="footer-social-link" aria-label="Ссылка на Instagram"
              ><svg class="footer-social-icon" width="24" height="24">
                <use href="./img/sprite.svg#inst"></use></svg
            ></a>
          </div>
        </div>
      </div>
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <a href="./contracts.php" class="footer-menu-title">Контрактное производство</a>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="./car-chem.php" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu-wrapper">
            <a href="./trademarks.php" class="footer-menu-title">Собственные марки</a>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="./ag-tech.php" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>

          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="./about.php" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./blog.php" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="./contacts.php" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class="footer-seporator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="./politics.php" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <span class="made-in mobile-made-in">Дизайн и разработка:</span>
            <svg class="logo-ruso">
              <use href="./img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
      </div>
    </footer>    
        <div class="modal" id="feedback-modal">
          <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
              <svg class="close-icon" width="24" height="24">
                <use href="./img/sprite.svg#close"></use>
              </svg>
            </a>
            <p class="modal-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <form action="handler.php" method="POST" class="modal-form">
              <div class="input-group-wrapper input-group-vertical">
                <div class="input-group modal-input-group">
                  <input
                    id="modal-user-name"
                    type="text"
                    class="input modal-input"
                    name="user_name"
                    placeholder=" "
                  />
                  <label
                    class="input-group-label modal-input-label"
                    for="modal-user-name"
                    >Имя</label
                  >
                </div>
                <div class="input-group modal-input-group">
                  <input
                    id="modal-user-phone"
                    type="tel"
                    name="user_phone"
                    class="input modal-input phone-mask"
                    placeholder=" "
                  />
                  <label
                    class="input-group-label modal-input-label"
                    for="modal-user-phone"
                    >Номер телефона</label
                  >
                </div>
              </div>
              <!-- /.input-group-wrapper -->
              <div class="modal-form-footer">
                <button type="submit" class="button modal-form-button">
                  Отправить заявку
                </button>
                <div class="notify modal-notify">
                  <svg
                    class="notify-icon modal-notify-icon"
                    width="14"
                    height="14"
                  >
                    <use href="./img/sprite.svg#shield"></use>
                  </svg>
                  <p class="notify-text">
                    Обращаясь к нам вы получаете не только профессиональную
                    работу, но и абсолютную конфиденциальность информации!
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="modal" id="alert-modal">
          <div class="modal-dialog">
            <picture>
              <source type="image/webp" srcset="./img/success.webp"  class="image-success">
              <source type="image/jpeg" srcset="./img/success.jpg" class="image-success">
              <img src="./img/success.jpg" alt="success" class="image-success">
            </picture>
            <h2 class="modal-title modal-title-success">Спасибо за заявку!</h2>
            <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
              <svg class="close-icon" width="24" height="24">
                <use href="./img/sprite.svg#close"></use>
              </svg>
            </a>
            <p class="modal-text">
              Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
            </p>
            <a href="./index.php" class="button modal-success-button">
                  Вернуться на главную
            </a>
          </div>
        </div>

        <script src="./js/swiper-bundle.min.js"></script>        
        <script src="./js/just-validate.production.min.js"></script>
        <script src="./js/read-more.min.js"></script>
        <script src="./js/main.js"></script>
        
   </body>
</html>