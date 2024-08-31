<!--  footer -->
<footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="<?= get_template_directory_uri() ?>/images/pcbbd.png" width=100px alt="#"/>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                        <li>Having built up a very solid and stable reputation for our quality products and services over the last two decades, the Real Computer Shop is the perfect choice, as we offer unrivalled expertise for all your IT Solutions and we are proud to have assisted thousands of customers since opening our first store back in January 2001.

In 2003 we formed a dedicated business team delivering bespoke solutions across Derbyshire and the greater Yorkshire region.</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="ftco-footer-widget mb-5">
                <?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) : ?>
                  <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
                <?php endif; ?>
            </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> C R O W N</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?= get_template_directory_uri() ?>/js/jquery.min.js"></script>
      <script src="<?= get_template_directory_uri() ?>/js/popper.min.js"></script>
      <script src="<?= get_template_directory_uri() ?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?= get_template_directory_uri() ?>/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="<?= get_template_directory_uri() ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?= get_template_directory_uri() ?>/js/custom.js"></script>
   </body>
</html>