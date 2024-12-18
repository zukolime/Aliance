<?php 
$page_title = 'О компании'; 
$header_style = 'bg';
$header_features_style = 'header-features-gray';
$header_features_item = 'header-features-item-gray';
include_once('header-page.php')?>

<section class="section section-experts">
  <div class="container">
    <div class="wrapper__experts">
      <picture class="wrapper__experts--img">
          <source type="image/webp" srcset="./img/logo-about.webp">
          <source type="image/jpeg" srcset="./img/logo-about.jpg">
          <img src="./img/logo-about.png" alt="logo-about">
      </picture>

      <div class="wrapper__experts--content">
        <div class="seporator"></div>
        <h2 class="section-title wrapper__experts--title">
          мы - эксперты в области производства химии
        </h2>
        <p class="wrapper__experts--description">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
      </div>
    </div>
    <?php include_once('./template-parts/features.php')?>
  </div>
</section>

<section class="section section__our-production">
  <div class="container">
    <div class="wrapper__our-production">  
      <div class="wrapper__our-production--content">
        <div class="seporator"></div>
        <h2 class="section-title">
          Наше производство
        </h2>
        <p class="wrapper__our-production--description">
          Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.</p>
        <p class="wrapper__our-production--description">
          Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>

        <ul class="wrapper__our-production--list">
          <li class="wrapper__our-production--item">
            <svg class="wrapper__our-production--icon" width="30" height="30">
              <use href="./img/sprite.svg#car"></use>
            </svg>
          Автомобильная химия
          </li>
          <li class="wrapper__our-production--item">
            <svg class="wrapper__our-production--icon" width="30" height="30">
              <use href="./img/sprite.svg#home"></use>
            </svg>
          Бытовая химия
          </li>
          <li class="wrapper__our-production--item">
            <svg class="wrapper__our-production--icon" width="30" height="30">
              <use href="./img/sprite.svg#disinfection"></use>
            </svg>
          Дезинфицирующие средства
          </li>
          <li class="wrapper__our-production--item">
            <svg class="wrapper__our-production--icon" width="30" height="30">
              <use href="./img/sprite.svg#aerozol"></use>
            </svg>
          Пищевые аэрозоли
          </li>
          <li class="wrapper__our-production--item">
            <svg class="wrapper__our-production--icon" width="30" height="30">
              <use href="./img/sprite.svg#cosmetic"></use>
            </svg>
          Косметическая продукция
          </li>
          <li class="wrapper__our-production--item">
            <svg class="wrapper__our-production--icon" width="30" height="30">
              <use href="./img/sprite.svg#brush"></use>
            </svg>
          Краски аэрозольные
          </li>      
        </ul>
      </div>

        <picture class="wrapper__personal-photo">
            <source type="image/webp" srcset="./img/personal.webp">
            <source type="image/jpeg" srcset="./img/personal.jpg">
            <img src="./img/personal.png" alt="logo-about">
        </picture>
    </div>
  </div>
</section> 

<?php include_once('./template-parts/founder-block.php')?>

<section class="section research-centre">
  <div class="container">
    <div class="seporator"></div>
    <h2 class="section-title research-centre__title">
      Исследовательский центр Aliance production
    </h2>
    <div class="research-centre__description">
      <p class="research-centre__text">
        Явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к ответу.
      </p>
      <p class="research-centre__text">
        С учётом сложившейся международной обстановки, синтетическое тестирование требует определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.
      </p>
    </div>    
  </div>
  
  
<?php include_once('./template-parts/pictures-slide-block.php')?>
</section>

<?php include_once('./template-parts/clients-block.php')?>
<?php include_once('footer.php')?>