      </div>

      <div class="footer-wrapper">
        <div class="row footer">
            <?php
              wp_nav_menu(array(
                  'container' => false,
                  'menu' => __( 'Drill Menu', 'textdomain' ),
                  'menu_class' => '',
                  'theme_location' => 'footer',
                  'items_wrap'      => '%3$s',
                  'fallback_cb' => false,
                  'walker' => new CCCOER_FOOTER_MENU_WALKER(),
              ));
            ?>

          <div class="small-12 medium-expand columns">
            <ul class="no-bullet">
              <li class="footer-header">Contact</li>
              <p class="footer-contact">
                For general questions & membership queries: 
                <br /><br />
                <a href="mailto:membership@cccoer.org">membership@cccoer.org</a>
              </p>
            </ul>
          </div>


          <div class="small-12 columns"></div>

          <div class="small-2 medium-1 columns footer-license">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cc-by.svg" class="footer-cc-by" alt="Creative Commons - BY license" /></a>
          </div>

          <div class="small-10 medium-6 columns footer-license">
            <p>Except where otherwise noted, content on www.cccoer.org is licensed under a
            Creative Commons Attribution 4.0 International License.</p>
          </div>
        </div>
      </div>

  <!-- close wrapper, no more content after this -->
  </div>
</div>

  <?php wp_footer(); ?>

  </body>
</html>
