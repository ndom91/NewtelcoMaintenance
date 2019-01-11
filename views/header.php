<header class="mdl-layout__header mdl-color--light-green-nt">
  <div class="mdl-layout__header-row">
    <a href="index.php"><img style="margin-right: 10px" src="dist/images/nt_square32_2_light2.png"/></a>
    <span class="mdl-layout-title">Maintenance</span>
    <div class="mdl-layout-spacer"></div>
    <div class="menu_userdetails">
      <button id="user-profile-menu" class="mdl-button mdl-js-button mdl-userprofile-button">
        <img class="menu_userphoto" src="<?php echo $token_data['picture'] ?>"/>
        <span class="mdl-layout-subtitle menumail"> <?php echo $token_data['email'] ?></span>
        <i class="fas fa-angle-down menuangle"></i>
      </button>
        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
            for="user-profile-menu">
          <a class="usermenuhref" href="calendar">
            <li class="mdl-menu__item">
              Calendar
              <span class="mdi mdi-24px mdi-calendar-text mdi-dark mdi-inactive"></span>
            </li>
          </a>
          <a class="usermenuhref" href="settings">
            <li class="mdl-menu__item">
              Settings
              <span class="mdi mdi-24px mdi-settings-outline mdi-dark mdi-inactive"></span>
            </li>
          </a>
          <li>
            <div class="mailcHR3"></div>
          </li>
          <a class="usermenuhref" href="?logout">
            <li class="mdl-menu__item">
              Logout
              <span class="mdi mdi-24px mdi-logout mdi-dark mdi-inactive"></span>
            </li>
          </a>
        </ul>
    </div>
  </div>
</header>