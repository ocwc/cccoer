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

          <?php /*
          <div class="small-12 medium-expand columns">
            <ul class="no-bullet">
              <li class="footer-header">For general information or feedback</li>
              <p class="footer-contact">
                    Email address: <a href="mailto:info@cccoer.org">info@cccoer.org</a>, <br />
                    Postal Address: <br /> Open Education Consortium, CCCOER Division<br />
                    60 Thoreau St, Suite 238<br />
                    Concord, MA 01742 USA
              </p>
            </ul>
          </div>
          */ ?>


          <div class="small-12 columns text-center footer-oec">
            <a href="http://www.oeconsortium.org"><img src="<?php echo get_template_directory_uri(); ?>/images/oec-logo.svg" alt="OEC Logo" /></a>
          </div>

          <div class="small-12 medium-6 medium-offset-3 small-centered footer-license text-center">
            <p>Except where otherwise noted, content on www.cccoer.org is licensed under a <br class="hide-for-small" />
            Creative Commons Attribution 4.0 International License.</p>
          </div>

          <div class="small-12 text-center">
            <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/cc-by.svg" class="footer-cc-by" alt="Creative Commons - BY license" /></a>
          </div>


        </div>
      </div>

  <!-- close wrapper, no more content after this -->
  </div>
</div>

  <?php wp_footer(); ?>

  </body>
</html>
