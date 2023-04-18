<?php
require_once("./db/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Grilli - Удивительная & вкусная еда</title>
  <meta name="title" content="Grilli - Удивительная & вкусная еда">

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <?php
  require_once("./models/preload.php");
  require_once("./models/topbar.php");
  require_once("./models/header.php");
  ?>

  <main>
    <article>
      <section class="hero text-center" aria-label="home" id="home">
        <ul class="hero-slider" data-hero-slider>
          <li class="slider-item active" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">Традиционная & Полезная</p>
            <h1 class="display-1 hero-title slider-reveal">
              Из любви к <br>
              вкусной еде
            </h1>
            <p class="body-2 hero-text slider-reveal">
              Приходите всей семьей и почувствуйте радость от аппетитной еды
            </p>
            <a href="./menu.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Посмотреть наше меню</span>
              <span class="text text-2" aria-hidden="true">Посмотреть наше меню</span>
            </a>
          </li>
          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">огромный опыт</p>
            <h1 class="display-1 hero-title slider-reveal">
              Ароматы, вдохновленные <br>
              Сезонами
            </h1>
            <p class="body-2 hero-text slider-reveal">
              Приходите всей семьей и почувствуйте радость от аппетитной еды
            </p>
            <a href="./menu.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Посмотреть наше меню</span>
              <span class="text text-2" aria-hidden="true">Посмотреть наше меню</span>
            </a>
          </li>

          <li class="slider-item" data-hero-slider-item>
            <div class="slider-bg">
              <img src="./assets/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">удивительно & вкусно</p>
            <h1 class="display-1 hero-title slider-reveal">
              Где каждый вкус <br>
              рассказывает историю
            </h1>
            <p class="body-2 hero-text slider-reveal">
              Приходите всей семьей и почувствуйте радость от аппетитной еды
            </p>
            <a href="./menu.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Посмотреть наше меню</span>
              <span class="text text-2" aria-hidden="true">Посмотреть наше меню</span>
            </a>
          </li>
        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

      </section>

    </article>
  </main>

  <?php
  require_once("./models/footer.php");
  ?>

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <script src="./assets/js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>