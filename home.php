<?php get_header();?>
  <main>
      <article>
        <!-- メインビジュアル -->
        <section id="main-visual">
          <div id="main-massage">
            <h1>VISIONARY COMPANY</h1>
            <p>未来を創造し、<br />価値ある商品を<br />お届けいたします。</p>

            <!-- <img
              class="main-photo-sweater"
              src="images/mainS.png"
              alt="ニット"
            /> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/mainS.png" class="main-photo-sweater" alt="ニット"/>
          </div>
          <div class="main-photo-knit">
            <!-- <img src="images/mainL.png" alt="ニット編み地" /> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/mainL.png" class="main-photo-knit" alt="ニット編み地"/>
          </div>
        </section>
        <!-- アバウトアス -->
        <section id="about-top">
          <h2 class="index-h2">ABOUT US</h2>
          <div id="about__inner--top">
            <div class="about-text">
              <h3>ベストワンを紡ぐ</h3>
              <p>
                私たちの仕事はお客様にベストを紡ぐことです。
                <br />企画、生産、販売、それぞれの役割は違えど、
                その想いは同じ。 <br />
                ひとつひとつのプロセスを丁寧に重ね、
                具現化した最高のデザインが、 お客様のベストワンとなる。
                そんなものづくりがANGEの名刺代わり。
                幾多の想いやデザインを私たちがベストに紡ぎます。
              </p>
              <!-- <img
                id="about-photo-seep"
                src="images/sheep.jpg"
                alt="ひつじ画像"
              /> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/sheep.jpg" id="about-photo-seep" alt="ひつじ画像"/>
            </div>
            <div class="about-photo">
              <!-- <img
                id="about-photo-knit"
                src="images/aboutknit.jpg"
                alt="編み物画像"
              /> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/aboutknit.jpg" id="about-photo-knit" alt="編み物画像"/>
            </div>
          </div>
        </section>
        <section id="about-end">
          <div id="about__inner--end">
            <div class="about__inner--end-box">
              <!-- <img
                id="about-photo-clothes"
                src="images/clothes.jpg"
                alt="洋服の画像"
              /> -->
              <img src="<?php echo get_template_directory_uri(); ?>images/clothes.jpg" id="about-photo-clothes" alt="洋服の画像"/>
            </div>
            <div class="about__inner--end-box">
              <h3>
                品質を支える <br />提案、聴く、応える、<br />
                三つの織り成す力
              </h3>
              <p>
                私たちが考えるものづくりは いち技術力だけを指しません。
                高い品質を提供するためには、 繊維のように複雑に織り込まれた
                ニュアンスを読み取る力が 必要です。だからこそ私たちは
                徹底して対話を重ねます。 織り成す対話、そして高い
                技術の両輪から生まれた デザインこそ、私たちが考える
                ものづくりです
              </p>
            </div>
            <div class="about__inner--end-box">
              <img
                id="about-photo-girl"
                src="<?php echo get_template_directory_uri(); ?>/images/girl.jpg"
                alt="女の子画像"
              />
              <img id="about-photo-pen" src="<?php echo get_template_directory_uri(); ?>/images/pen.jpg" alt="ワーク画像" />
            </div>
          </div>
        </section>

        <!-- プロダクション-->
        <div class="production">
          <h2 class="index-h2">PRODUCTION</h2>

          <section id="production-knit">
            <h3>ニット製品</h3>
            <p>
              ニット製品の企画から製造までを行います。
              <br />ニーズに合わせ、生産背景やコスト、
              <br />納期の交渉などを行い、高品質な製品を提供しています。
              <br />素材から提案する弊社商品のクオリティは展示会でもご覧いただけます。
            </p>

            <div class="production-img-wrapper">
              <!-- モーダル -->
              <button class="button js-modal-button">
                <img
                  class="production-photo"
                  src="<?php echo get_template_directory_uri(); ?>/images/item1.jpg"
                  alt="ニット"
                />
              </button>

              <div class="layer js-modal">
                <div class="modal">
                  <div class="modal__inner">
                    <!-- 閉じるボタン追記 -->
                    <div class="modal__button-wrap">
                      <button class="close-button js-close-button">
                        <span></span>
                        <span></span>
                      </button>
                    </div>

                    <div class="modal__contents">
                      <div class="modal__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/item1.jpg" />
                      </div>
                      <h3>刺繍ニット</h3>
                      <p>
                        袖に刺繍を施し、部分的にニットをくり抜きカットしています。
                        <br />
                        素材:VIS70%PBT30%
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- モーダル -->
              <button class="button js-modal-button">
                <img
                  class="production-photo"
                  src="<?php echo get_template_directory_uri(); ?>/images/item2.jpg"
                  alt="ニット"
                />
              </button>

              <div class="layer js-modal">
                <div class="modal">
                  <div class="modal__inner">
                    <!-- 閉じるボタン追記 -->
                    <div class="modal__button-wrap">
                      <button class="close-button js-close-button">
                        <span></span>
                        <span></span>
                      </button>
                    </div>

                    <div class="modal__contents">
                      <div class="modal__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/item2.jpg" />
                      </div>
                      <h3>ビーズ刺繍ニット</h3>
                      <p>
                        ビーズやラインストーンをふんだんに使用した刺繍ニットです。
                        <br />
                        素材:Wool5% Angola20% Nylon45% Rayon30%
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- モーダル -->
              <button class="button js-modal-button">
                <img
                  class="production-photo"
                  src="<?php echo get_template_directory_uri(); ?>/images/item3.jpg"
                  alt="ニット"
                />
              </button>

              <div class="layer js-modal">
                <div class="modal">
                  <div class="modal__inner">
                    <!-- 閉じるボタン追記 -->
                    <div class="modal__button-wrap">
                      <button class="close-button js-close-button">
                        <span></span>
                        <span></span>
                      </button>
                    </div>

                    <div class="modal__contents">
                      <div class="modal__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/item3.jpg" />
                      </div>
                      <h3>生地テープ刺繍ニット</h3>
                      <p>
                        やわらかい素材の生地をテープ状にし、光沢のあるフェザーの身頃に刺繍しています。
                        <br />
                        素材:Polyester100%
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="production-clothes">
            <h3>布帛製品カットソー製品</h3>
            <p>
              常に進化し多様化する素材・仕様デザインの情報をつかみながら、
              <br />経験豊富な企画・パタンナー・生産がチームとなり品質・コスト・スケジュールなどの要求にこたえていきます。
            </p>

            <div class="production-img-wrapper">
              <!-- モーダル -->
              <button class="button js-modal-button">
                <img
                  class="production-photo"
                  src="<?php echo get_template_directory_uri(); ?>/images/item1.jpg"
                  alt="ニット"
                />
              </button>

              <div class="layer js-modal">
                <div class="modal">
                  <div class="modal__inner">
                    <!-- 閉じるボタン追記 -->
                    <div class="modal__button-wrap">
                      <button class="close-button js-close-button">
                        <span></span>
                        <span></span>
                      </button>
                    </div>

                    <div class="modal__contents">
                      <div class="modal__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/item1.jpg" />
                      </div>
                      <h3>刺繍ニット</h3>
                      <p>
                        袖に刺繍を施し、部分的にニットをくり抜きカットしています。
                        <br />
                        素材:VIS70%PBT30%
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- モーダル -->
              <button class="button js-modal-button">
                <img
                  class="production-photo"
                  src="<?php echo get_template_directory_uri(); ?>/images/item2.jpg"
                  alt="ニット"
                />
              </button>

              <div class="layer js-modal">
                <div class="modal">
                  <div class="modal__inner">
                    <!-- 閉じるボタン追記 -->
                    <div class="modal__button-wrap">
                      <button class="close-button js-close-button">
                        <span></span>
                        <span></span>
                      </button>
                    </div>

                    <div class="modal__contents">
                      <div class="modal__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/item2.jpg" />
                      </div>
                      <h3>ビーズ刺繍ニット</h3>
                      <p>
                        ビーズやラインストーンをふんだんに使用した刺繍ニットです。
                        <br />
                        素材:Wool5% Angola20% Nylon45% Rayon30%
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- モーダル -->
              <button class="button js-modal-button">
                <img
                  class="production-photo"
                  src="<?php echo get_template_directory_uri(); ?>/images/item3.jpg"
                  alt="ニット"
                />
              </button>

              <div class="layer js-modal">
                <div class="modal">
                  <div class="modal__inner">
                    <!-- 閉じるボタン追記 -->
                    <div class="modal__button-wrap">
                      <button class="close-button js-close-button">
                        <span></span>
                        <span></span>
                      </button>
                    </div>

                    <div class="modal__contents">
                      <div class="modal__content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/item3.jpg" />
                      </div>
                      <h3>生地テープ刺繍ニット</h3>
                      <p>
                        やわらかい素材の生地をテープ状にし、光沢のあるフェザーの身頃に刺繍しています。
                        <br />
                        素材:Polyester100%
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- 展示会 -->
        <section id="exhibition">
          <h2 class="index-h2">EXHIBITION</h2>
          <div class="exhibition-photo-wrapper">
            <div class="ex-photo_home">
            <a href="<?php echo home_url(); ?>/2022-2">
                <img
                  class="exhibition-photo1"
                  src="<?php echo get_template_directory_uri(); ?>/images/ex1.png"
                  alt="2022年展示会"
                />
              </a>
            </div>

            <div class="ex-photo_home">
            <a href="<?php echo home_url(); ?>/2023-2">
                <img
                  class="exhibition-photo2"
                  src="<?php echo get_template_directory_uri(); ?>/images/ex2.png"
                  alt="2023年展示会"
                />
              </a>
            </div>

            <div class="ex-photo_home">
            <a href="<?php echo home_url(); ?>/2024-2">
                <img
                  class="exhibition-photo3"
                  src="<?php echo get_template_directory_uri(); ?>/images/ex3.png"
                  alt="2024年展示会"
                />
              </a>
            </div>
          </div>
        </section>

        <!-- COMPANY -->
        <section id="company">
          <h2 class="index-h2">COMPANY</h2>
          <div class="company-wrapper">
            <div class="company-texst">
              <h3>会社概要</h3>
              <table id="company-table">
                <tr>
                  <th class="tableheader-first">会社名</th>
                  <td class="cell-first">株式会社ANGE</td>
                </tr>
                <tr>
                  <th class="tableheader">所在地</th>
                  <td class="cell">
                    〒150-0036 東京都渋谷区南平台町1-9<br />
                    南平台宝来ビル2F<br /><br />各線「渋谷駅」より徒歩6分
                  </td>
                </tr>
                <tr>
                  <th class="tableheader">代表者</th>
                  <td class="cell">代表取締役 古川 浩</td>
                </tr>
                <tr>
                  <th class="tableheader">設立</th>
                  <td class="cell">2008年3月</td>
                </tr>
              </table>
            </div>
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6483.723001614631!2d139.6968493!3d35.6557838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b8cc3276561%3A0x588968888ed6093d!2z5qCq5byP5Lya56S-44Ki44Oz44K444Ol77yIQU5HRe-8iQ!5e0!3m2!1sja!2sjp!4v1722554806499!5m2!1sja!2sjp"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </section>
        <!-- お問い合わせ -->
        <section id="contact">
          <h2 class="index-h2-contact">CONTACT US</h2>
          <h3 class="index-h3-contact">
            はじめての方もお気軽にご相談ください。
          </h3>
          <a href="<?php echo get_template_directory_uri(); ?>/contactus.php" class="contact-btn"
            >メールでのお問い合わせはこちら</a
          >
        </section>
      </article>
    </main>
    <?php get_footer(); ?>