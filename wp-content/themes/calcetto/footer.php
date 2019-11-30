 <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- footer area start -->
    <footer class="black-bg">
        <div class="footer-middle-area">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-lg-6 col-sm-12">
                        <div class="address-block mt-30">
                            <div class="footer-logo">
                                <a href="index.html">
                                  <img src="<?php echo get_theme_file_uri('img/logo1.png')?>" alt="Calcetto"/>
                                </a>
                            </div>
                            <address class="address-info d-flex align-items-center">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    <span>Address : </span>503-504, NDM-1, Netaji Subhash Palace Pitampura.
                              New Delhi-110034, India.
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <address class="address-info email mt-30">
                            <i class="fa fa-envelope"></i>
                            <p><span>E-Mail : </span><a href="mailto:sales@calcetto.in">sales@calcetto.in</a></p>
                        </address>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <address class="address-info email mt-30">
                            <i class="fa fa-phone"></i>
                            <p><span>Phone : </span><a href="tel:+9873439378">+91 9873439378</a></p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- <div class="payment-method-list">
                            <img src="assets/img/payment-2.png" alt="payment method">
                        </div>-->
                        <div class="payment-method-list">
                            <a href="#" style="padding: 0 15px; color: #ffffff;"><i class="fa fa-facebook fa-2x"></i></a>
                            <a href="#" style="padding: 0 15px; color: #ffffff;"><i class="fa fa-twitter fa-2x"></i></a>
                            <a href="#" style="padding: 0 15px; color: #ffffff;"><i class="fa fa-linkedin fa-2x"></i></a>
                            <a href="#" style="padding: 0 15px; color: #ffffff;"><i class="fa fa-instagram fa-2x"></i></a>
                        </div>
                        <div class="footer-link">
                            <a href="#">TERMS & CONDITIONS</a>
                            <a href="#">PRIVACY POLICY</a>
                            <a href="#">CAREER</a>
                            <a href="#">SITEMAP</a>
                            <a href="#">CONTACT US</a>
                        </div>
                        <p class="copyright">
                            Copyright 2019 <a href="#">Calcetto</a>. All Rights Reserved | Designed by <a href="http://aiplbrandbuzz.com/" target="_blank">AiplBrandbuzz</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
<script id="rendered-js">
  (function ($) {
  $.fn.countTo = function (options) {
  options = options || {};

  return $(this).each(function () {
  // set options for current element
  var settings = $.extend({}, $.fn.countTo.defaults, {
  from: $(this).data('from'),
  to: $(this).data('to'),
  speed: $(this).data('speed'),
  refreshInterval: $(this).data('refresh-interval'),
  decimals: $(this).data('decimals')
  },
  options);

  // how many times to update the value, and how much to increment the value on each update
  var loops = Math.ceil(settings.speed / settings.refreshInterval),
  increment = (settings.to - settings.from) / loops;

  // references & variables that will change with each update
  var self = this,
  $self = $(this),
  loopCount = 0,
  value = settings.from,
  data = $self.data('countTo') || {};

  $self.data('countTo', data);

  // if an existing interval can be found, clear it first
  if (data.interval) {
  clearInterval(data.interval);
  }
  data.interval = setInterval(updateTimer, settings.refreshInterval);

  // initialize the element with the starting value
  render(value);

  function updateTimer() {
  value += increment;
  loopCount++;

  render(value);

  if (typeof settings.onUpdate == 'function') {
  settings.onUpdate.call(self, value);
  }

  if (loopCount >= loops) {
  // remove the interval
  $self.removeData('countTo');
  clearInterval(data.interval);
  value = settings.to;

  if (typeof settings.onComplete == 'function') {
  settings.onComplete.call(self, value);
  }
  }
  }

  function render(value) {
  var formattedValue = settings.formatter.call(self, value, settings);
  $self.html(formattedValue);
  }
  });
  };

  $.fn.countTo.defaults = {
  from: 0, // the number the element should start at
  to: 0, // the number the element should end at
  speed: 10, // how long it should take to count between the target numbers
  refreshInterval: 100, // how often the element should be updated
  decimals: 0, // the number of decimal places to show
  formatter: formatter, // handler for formatting the value before rendering
  onUpdate: 0, // callback method for every time the element is updated
  onComplete: 0
  // callback method for when the element finishes updating
  };

  function formatter(value, settings) {
  return value.toFixed(settings.decimals);
  }
  })(jQuery);

  jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });


  // start all the timers
  $('.timer').each(count);

  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
  });
  //# sourceURL=pen.js
  var a = 0;
  $(window).scroll(function () {

  var oTop = $('#conter-scroll').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
  $('.timer').each(function () {
  var $this = $(this),
  countTo = $this.attr('data-to');
  $({
  countNum: $this.text()
  }).animate({
  countNum: countTo
  },

  {

  duration: 5000,
  easing: 'swing',
  step: function () {
  $this.text(Math.floor(this.countNum));
  },
  complete: function () {
  $this.text(this.countNum);
  //alert('finished');
  }

  });
  });
  a = 1;
  }

  });
</script>
</body>
</html>