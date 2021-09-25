<?php

/**
 * @var $p         string
 * @var $firstName string
 * @var $lastName  string
 * @var $age       int
 * @var $city      string
 * @var $a         string
 * @var $b         int
 * @var $c         string
 * @var $d         string
 * @var $num       int
 */

?>
<div id="content">
  <div class="container">
    <h1><?= $p ?></h1>
    <div class="wrapper">
      <div class="image">
          <?php
          echo '<img src="/img/img.jpg" alt="Image">';
          ?>
      </div>
      <div class="about">
        <p class="name">
            <?= sprintf('%s %s', $firstName, $lastName) ?>
        </p>
        <p class="city">
            <?php
            echo 'город', ' ', $city;
            ?>
        </p>
        <p class="age">
          мне <?= $age ?> лет
        </p>
        <p>
            <?= 'учимся'.' '.'объединять строки' ?><br>
          и работать с переменными
        </p>
        <div class="knowledge">
          <h2>Knowledge</h2>
            <?php
            include 'knowledge.php'; ?>
          <ul>
            <li>
                <?= $a.' '.$b.' '.$c ?> знаний
            </li>
            <li>
              Проверяем число <?= $num ?><br>
                <?= $d ?>
            </li>
            <li>
              <p>
                  <?php
                  $a = rand(20, 100);
                  $b = rand(30, 50);
                  $c = $a + $b;
                  echo $c;
                  ?>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="article">
      <p>
        В первую очередь необходимо руководствоваться официальной документацией по PHP, которая состоит из справочника
        функций, справочника языка и многих других дополнительных сведений. И крайне осторожно относиться к другим
        ресурсам в сети интернет, поскольку часто встречается устаревшая, недостоверная и непрофессиональная информация.
        В крайнем случае, если требуется какой-либо пример, то лучше опираться на солидные источники информации, со
        свежими данными и соотносить с официальной документацией по PHP.
      </p>
    </div>
  </div>
</div>
