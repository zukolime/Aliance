<section class="trademark-section">
      <div class="container">
        <?php 
        if (!empty($block_title)) {
          echo '<div class="seporator"></div>';
          echo '<h2 class="section-title trademark-section-title">'
          . $block_title .
        '</h2>';
        }
        ?>
        <h2 class="section-title-mobile">собственные марки</h2>
        <div class="trademark-cards">
          <a href="./ag-tech.php" class="trademark-card">
            <svg class="trademark-logo">
              <use href="./img/sprite.svg#AGTECH"></use>
            </svg>
            <h3 class="trademark-title">Автохимия AG-Tech</h3>
            <p class="trademark-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </a>
          <a href="#" class="trademark-card">
            <svg class="trademark-logo">
              <use href="./img/sprite.svg#AP"></use>
            </svg>
            <h3 class="trademark-title">Автохимия AP</h3>
            <p class="trademark-text">
              Для современного мира разбавленное изрядной долей эмпатии,
              рациональное мышление создаёт предпосылки для поставленных
              обществом задач.
            </p>
          </a>
        </div>
      </div>
      <!-- /.cards-trademark -->
    </section>