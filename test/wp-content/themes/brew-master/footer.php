    <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

          <div class="row">

              <div class="col-sm-4 link-icons">



                <a href="#" rel="nofollow" target="_blank" class=""><i class="fa fa-facebook"></i>Facebook</a>
                <a href="#" rel="nofollow" target="_blank" class=""><i class="fa fa-github"></i>Github</a>
                <a href="#" rel="nofollow" target="_blank" class=""><i class="fa fa-instagram"></i>Instagram</a>
                <a href="#" rel="nofollow" target="_blank" class=""><i class="fa fa-twitter"></i>Twitter</a>
                <a href="#" rel="nofollow" target="_blank" class=""><i class="fa fa-linkedin-square"></i>LinkedIn</a>



              </div>
              <div class="col-sm-8">
                  <?php echo do_shortcode('[contact-form-7 id="34" title="Contact form 1"]'); ?>
              </div>







          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-4 copyright">
              &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
            </div>
            <div class="col-md-4 col-md-offset-4 attribution">
              <a href="http://www.danvswild.com/brew" target="_blank">BREW</a> theme by <a target="_blank" href="http://www.danvswild.com">Dan vs Wild</a>
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer> <!-- end footer -->

  </div><!--end site-wrapper-->


    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>
    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->


    <script type="text/javascript">
    (function($) {
        var elem = $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
            {
            height: 600,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
            onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page

            }
        });

        $(window).resize(function() {
          if ($(window).width() <= 768) {
            elem.destroy();
          }
          else {
            elem.reinitialize();
          }
        });
    }(jQuery));
    </script>






  </body>

</html> <!-- end page. what a ride! -->
