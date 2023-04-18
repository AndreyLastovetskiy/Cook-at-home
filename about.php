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

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">
          <div class="about-content">
            <p class="label-2 section-subtitle" id="about-label">Наша история</p>
            <h2 class="headline-1 section-title">Каждый вкус рассказывает историю</h2>
            <p class="section-text">
              Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the
              industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled
              it to make a type specimen book It has survived not only five centuries, but also the leap into.
            </p>
            <div class="contact-label">Забронировать по телефону</div>
            <a href="tel:+11234567890" class="body-1 contact-number hover-underline">+11 (234) 567 890</a>
            <a href="./about.php" class="btn btn-primary">
              <span class="text text-1">Читать далее</span>
              <span class="text text-2" aria-hidden="true">Читать далее</span>
            </a>
          </div>

          <figure class="about-banner">
            <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">
            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>
            <div class="abs-img abs-img-2 has-before">
              <img src="./assets/images/badge-2.png" width="133" height="134" loading="lazy" alt="">
            </div>
          </figure>
          <img src="./assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">
        </div>
      </section>

      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
        <div class="container">
          <div class="quote">”</div>
          <p class="headline-2 testi-text">
            Я хотел поблагодарить вас за то, что вы пригласили меня на тот удивительный ужин прошлой ночью. Еда была
            экстраординарный.
          </p>
          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>
          <div class="profile">
            <img src="./assets/images/testi-avatar.jpg" width="100" height="100" loading="lazy" alt="Sam Jhonson"
              class="img">
            <p class="label-2 profile-name">Сэм Джонсон</p>
          </div>
        </div>
      </section>

      <section class="reservation">
        <div class="container">
          <div class="form reservation-form bg-black-10">
            <form action="" class="form-left">
              <h2 class="headline-1 text-center">Онлайн заказ</h2>
              <p class="form-text text-center">
                Заказ по телефону <a href="tel:+1123456789" class="link">+11-234-56789</a>
                или заполните форму заказа
              </p>
              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Ваше Имя" autocomplete="off" class="input-field">
                <input type="tel" name="phone" placeholder="Номер Телефона" autocomplete="off" class="input-field">
              </div>
              <div class="input-wrapper">
                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                  <select name="person" class="input-field">
                    <option value="1-person">1 человек</option>
                    <option value="2-person">2 человека</option>
                    <option value="3-person">3 человека</option>
                    <option value="4-person">4 человека</option>
                    <option value="5-person">5 человек</option>
                    <option value="6-person">6 человек</option>
                    <option value="7-person">7 человек</option>
                  </select>
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>
                  <input type="date" name="reservation-date" class="input-field">
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                  <select name="person" class="input-field">
                    <option value="08:00">08 : 00</option>
                    <option value="09:00">09 : 00</option>
                    <option value="010:00">10 : 00</option>
                    <option value="011:00">11 : 00</option>
                    <option value="012:00">12 : 00</option>
                    <option value="01:00">13 : 00</option>
                    <option value="02:00">14 : 00</option>
                    <option value="03:00">15 : 00</option>
                    <option value="04:00">16 : 00</option>
                    <option value="05:00">17 : 00</option>
                    <option value="06:00">18 : 00</option>
                    <option value="07:00">19 : 00</option>
                    <option value="08:00">20 : 00</option>
                    <option value="09:00">21 : 00</option>
                    <option value="10:00">22 : 00</option>
                  </select>
                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>
              </div>
              <textarea name="message" placeholder="Сообщение" autocomplete="off" class="input-field"></textarea>
              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Заказать</span>
                <span class="text text-2" aria-hidden="true">Заказать</span>
              </button>
            </form>
            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">
              <h2 class="headline-1 text-center">Наши Контакты</h2>
              <p class="contact-label">Телефон для заказа</p>
              <a href="tel:+11223456789" class="body-1 contact-number hover-underline">+11-234-56789</a>
              <div class="separator"></div>
              <p class="contact-label">Место</p>
              <address class="body-4">
                Мечниковкский пер. 5, г. Тагарог,  <br>
                Ростовская обл.
              </address>
              <p class="contact-label">Время обеда</p>
              <p class="body-4">
                с Понедельника по Воскресенье <br>
                11.00 - 22.30
              </p>
              <p class="contact-label">Время ужина</p>
              <p class="body-4">
                с Понедельника по Воскресенье <br>
                17.00 - 22.00
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section features text-center" aria-label="features">
        <div class="container">
          <p class="section-subtitle label-2">Почему Выбрали Нас</p>
          <h2 class="headline-1 section-title">Наша Сила</h2>
          <ul class="grid-list">
            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img src="./assets/images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                </div>
                <h3 class="title-2 card-title">Здоровое Питание</h3>
                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img src="./assets/images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                </div>
                <h3 class="title-2 card-title">Свежая среда</h3>
                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img src="./assets/images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                </div>
                <h3 class="title-2 card-title">Опытные повара</h3>
                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>
              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">
                <div class="card-icon">
                  <img src="./assets/images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                </div>
                <h3 class="title-2 card-title">Мероприятия & Вечеринки</h3>
                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>
              </div>
            </li>
          </ul>

          <img src="./assets/images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">
          <img src="./assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">
        </div>
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