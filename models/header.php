<header class="header" data-header>
    <div class="container">
      <a href="./" class="logo">
        <img src="./assets/images/logo.svg" width="160" height="50" alt="Grilli - Home">
      </a>
      <nav class="navbar" data-navbar>
        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>
        <a href="./" class="logo">
          <img src="./assets/images/logo.svg" width="160" height="50" alt="Grilli - Home">
        </a>
        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="./" class="navbar-link hover-underline active">
              <div class="separator"></div>
              <span class="span">Главная</span>
            </a>
          </li>
          <li class="navbar-item">
            <a href="./menu.php" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Меню</span>
            </a>
          </li>
          <li class="navbar-item">
            <a href="./about.php" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">О Нас</span>
            </a>
          </li>
          <li class="navbar-item">
            <a href="./contact.php" class="navbar-link hover-underline">
              <div class="separator"></div>
              <span class="span">Контакты</span>
            </a>
          </li>
          <?php 
          if(!isset($_COOKIE["id"])) { ?>
            <li class="navbar-item">
              <a href="./login.php" class="navbar-link hover-underline">
                <div class="separator"></div>
                <span class="span">Авторизация</span>
              </a>
            </li>
            <li class="navbar-item">
              <a href="./registration.php" class="navbar-link hover-underline">
                <div class="separator"></div>
                <span class="span">Регестрация</span>
              </a>
            </li>
          <?php } ?>
        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Посетите Нас</p>
          <address class="body-4">
            Мечниковкский пер. 5, г. Тагарог, <br>
            Ростовская обл.
          </address>
          <p class="body-4 navbar-text">Ежедневно: 8.00 - 22.00</p>
          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">booking@grilli.com</a>
          <div class="separator"></div>
          <p class="contact-label">Забронировать</p>
          <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
            +88-123-123456
          </a>
        </div>
      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
</header>