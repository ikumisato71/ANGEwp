<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />

    <title>
      ANGE（株式会社アンジュ） | 東京都渋谷区のアパレル製品の企画・生産・卸
    </title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/tlogo.png" />
    <meta
      name="description"
      content="東京都渋谷区のアパレル製品の企画・生産・卸"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="stylesheet" href="css/reset.css" /> -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <?php wp_head();?>
  </head>

  <body>
    <div class="loader">
      <div class="loading_logo">
        <!-- <img src="images/toplogo.gif" /> -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/toplogo.gif" />
      </div>
    </div>
    <header>
      <!--ロゴ -->
      <div id="logo">
        <!-- <a href="index.html"> -->
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
          <!-- <img src="images/logo.png" alt="トップページへ戻る" />
          <img src="images/toplogo-ic.gif" alt="トップページへ戻る" /> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="トップページへ戻る"  />
          <img src="<?php echo get_template_directory_uri(); ?>/images/toplogo-ic.gif" alt="トップページへ戻る"  />
        </a>
      </div>
      <!-- PC用ナビゲーション -->
      <div id="nav-pc">
        <nav>
          <!-- <a href="index.html">Home</a> -->
          <a href="<?php echo home_url(); ?>/home">Home</a>
          <!-- <a href="index.html#about-top">About us</a> -->
          <a href="<?php echo home_url(); ?>/about_us">About us</a>

          <a href="index.html#production-knit">Production</a>
          <div class="qa">
            <ul class="qa__block">
              <li class="qa__item js-ac">
                <!-- <a href="index.html#exhibition" class="qa__head">Exhibition</a> -->
                <a class="qa__head" href="<?php echo home_url(); ?>/exhibition">Exhibition</a>
                <div class="qa__body">
                  <ul>
                    <li class="qa__link">
                      <!-- <a href="exhibition2022.html">2022</a> -->
                      <a href="<?php echo home_url(); ?>/exhibition2022">2022</a>
                    </li>
                    <li class="qa__link">
                      <!-- <a href="exhibition2023.html">2023 </a> -->
                      <a href="<?php echo home_url(); ?>/exhibition2023">2023</a>

                    </li>
                    <li class="qa__link">
                      <!-- <a href="exhibition2024.html">2024 </a> -->
                      <a href="<?php echo home_url(); ?>/exhibition2024">2024</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <!-- <a href="index.html#company">Company</a> -->
          <a href="<?php echo home_url(); ?>/company">Company</a>
          <!-- <a href="index.html#contact">Contact us</a> -->
          <a href="<?php echo home_url(); ?>/contact_us">Contact us</a>
        </nav>
      </div>

      <!-- スマホ用メニューボタン -->
      <div class="header__inner">
        <button
          id="js-hamburger"
          type="button"
          class="hamburger"
          aria-controls="navigation"
          aria-expanded="false"
          aria-label="メニューを開く"
        >
          <span class="hamburger__line"></span>
          <span class="hamburger__text"></span>
        </button>
        <div class="header__nav-area js-nav-area" id="navigation">
          <nav id="js-global-navigation" class="global-navigation">
            <ul class="global-navigation__list">
              <li>
                <a href="index.html" class="global-navigation__link"> Home </a>
              </li>
              <li>
                <a href="index.html#about-top" class="global-navigation__link">
                  About us
                </a>
              </li>
              <li>
                <a
                  href="index.html#production-knit"
                  class="global-navigation__link"
                >
                  Production
                </a>
              </li>
              <li>
                <button
                  type="button"
                  class="global-navigation__link -accordion js-sp-accordion-trigger"
                  aria-expanded="false"
                  aria-controls="accordion1"
                >
                  <a
                    href="index.html#exhibition"
                    class="global-navigation__link"
                  >
                    Exhibition</a
                  >
                </button>
                <div id="accordion1" class="accordion js-accordion">
                  <ul class="accordion__list">
                    <li>
                      <a href="exhibition2022.html" class="accordion__link">
                        2022</a
                      >
                    </li>
                    <li>
                      <a href="exhibition2023.html" class="accordion__link">
                        2023</a
                      >
                    </li>
                    <li>
                      <a href="exhibition2024.html" class="accordion__link">
                        2024
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="index.html#company" class="global-navigation__link">
                  Company
                </a>
              </li>
              <li>
                <a href="index.html#contact" class="global-navigation__link">
                  Contact us
                </a>
              </li>
            </ul>
            <div id="js-focus-trap" tabindex="0"></div>
          </nav>
        </div>
      </div>
    </header>
