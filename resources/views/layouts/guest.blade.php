<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>E. Diary - login</title>
    
    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
    
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    
    <!-- CSS Files For Plugin -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('css/YTPlayer.css')}}" rel="stylesheet" />
    <link href="{{asset('inc/owlcarousel/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('inc/owlcarousel/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('inc/revolution/css/settings.css')}}" rel="stylesheet" />
    <link href="{{asset('inc/revolution/css/layers.css')}}" rel="stylesheet" />
    <link href="{{asset('inc/revolution/css/navigation.css')}}" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="homepage_slider" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
    
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->
  
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <br>
            <br>
            <br>
            <br>
            <br>
                <div class="card shadow">
                    <div class="card-body">{{ $slot }}</div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->

    
    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    
    <!-- Bootstrap -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- Components Plugin -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('js/retina.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('inc/owlcarousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Contact Form -->
    <script src="{{asset('js/contact.js')}}"></script>
    
    <!-- Custom Plugin -->
    <script src="{{asset('js/custom.js')}}"></script>

    <!-- RS Plugin Extensions -->
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('inc/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>


    <script>
      var tpj = jQuery;

      var revapi280;
      tpj(document).ready(function() {
          if (tpj("#rev_slider_nagency").revolution == undefined) {
              revslider_showDoubleJqueryError("#rev_slider_nagency");
          } else {
              revapi280 = tpj("#rev_slider_nagency").show().revolution({
                  sliderType: "standard",
                  sliderLayout: "fullscreen",
                  dottedOverlay: "none",
                  delay: 90000,
                  navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                      touchenabled:"on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                    }
                    ,
                    arrows: {
                          style: "uranus",
                          enable: true,
                          hide_onmobile: true,
                          hide_under: 496,
                          hide_onleave: true,
                          hide_delay: 200,
                          hide_delay_mobile: 1200,
                          tmp: '',
                          left: {
                              h_align: "left",
                              v_align: "center",
                              h_offset: 20,
                              v_offset: 0
                          },
                          right: {
                              h_align: "right",
                              v_align: "center",
                              h_offset: 20,
                              v_offset: 0
                          }
                      }
                  },
                  responsiveLevels: [1200, 991, 767, 480],
                  visibilityLevels: [1200, 991, 767, 480],
                  gridwidth: [1200, 991, 767, 480],
                  gridheight: [868, 768, 960, 720],
                  lazyType: "none",
                  parallax: {
                    type:"mouse+scroll",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                    disable_onmobile:"on"
                  },
                  shadow: 0,
                  spinner: "spinner2",
                  autoHeight: "off",
                  fullScreenAutoWidth: "off",
                  fullScreenAlignForce: "off",
                  fullScreenOffsetContainer: "",
                  fullScreenOffset: "0",
                  disableProgressBar: "on",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                      simplifyAll: "off",
                      disableFocusListener: false,
                  }
              });
          }
      }); /*ready*/
  </script>
    
  </body>
</html>