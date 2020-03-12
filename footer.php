


<!--footer section-->
    <section class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <a style="font-size: 18px;color: #FF9933;"href="terms.php">Terms & Conditions</a>
                    </div>
                    <div class="col-md-2">
                        <a style="font-size: 18px;color: #FF9933;"href="refund.php">Refund policy</a>
                    </div>
                    <div class="col-md-2">
                        <a style="font-size: 18px;color: #FF9933;" href="privacy.php">Privacy policy</a>
                    </div>
                    <div class="col-md-5">
                    <div class="copyright">
                        <p style="font-size: 18px;color: #ffffff;">© Copyright 2019 <a style="font-size: 18px;color: #FF9933;"href="index.php">Easyway Online Services</a>
                        </p>
                    </div>
                </div>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>


    <!-- script start from here -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/isotope.js"></script>
    <script type="text/javascript" src="js/stellar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>
    

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Funfact START -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.start-count').each(function() {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).bind('scroll', function() {
                var speed = 3000;
                $('.start-count').each(function() {
                    var $this = $(this);
                    if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                        $this.data('counted', true);
                        $this.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function(now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                                if (0 < $this.parent('.value').length) {
                                    $this.parent('.value').css('width', val + '%');
                                }
                            }
                        });
                    }
                });
            }).triggerHandler('scroll');
        });
        var stickyOffset = $('.sticky').offset().top;
        $(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
    </script>

</body>
</html>
