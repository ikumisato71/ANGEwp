    <!-- トップへ戻る -->
    <div class="page-top" id="js-page-top">
      <span class="material-icons-outlined arrow"></span>
    </div>

    <footer>
      <div id="footer-logo">
        <!-- <img src="images/logo.png" alt="ANGEロゴ" /> -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ANGEロゴ" />
        <div id="footer-link">
          <!-- <a href="index.html">Home</a> -->
          <a href="<?php echo home_url(); ?>/home">Home</a>
          <!-- <a href="index.html#about-top">About us</a> -->
          <a href="<?php echo home_url(); ?>/about_us">About us</a>
          <!-- <a href="index.html#production-knit">Production</a> -->
          <a href="<?php echo home_url(); ?>/production">Production</a>
          <!-- <a href="index.html#exhibition">Exhibition</a> -->
          <a href="<?php echo home_url(); ?>/exhibition">Exhibition</a>
          <!-- <a href="index.html#company">Company</a> -->
          <a href="<?php echo home_url(); ?>/company">Company</a>
          <!-- <a href="contactus.html">Contact us</a> -->
          <a href="<?php echo home_url(); ?>/Contact_us">Contact us</a>
        </div>

        <!-- <div id="sns-footer">
            <a href=""
              ><img src="images/button-facebook.png" alt="Facebookのリンク"
            /></a>
            <a href=""
              ><img src="images/button-twitter.png" alt="Twitterのリンク"
            /></a>
            <a href=""
              ><img src="images/button-youtube.png" alt="youtubeのリンク"
            /></a>
          </div>
-->
        <div id="copyright">
          <span> &copy;2018 - 2024 ANGE, Inc. All Rights Resarved.</span>
        </div>
      </div>
    </footer>

    <!-- <script src="js/move.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/move.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
