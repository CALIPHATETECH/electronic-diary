<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>E. Diary</title>
    
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

    
    <!-- Start Navigation -->
    <header class="nav-solid" id="home">

        <nav class="navbar navbar-fixed-top">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo -->
                            <div class="logo-container">
                                <div class="logo-wrap local-scroll">
                                  <a href="#home">
                                    <img class="logo" src="img/logo.png" alt="logo" data-rjs="2">
                                  </a>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a data-scroll href="{{route('welcome')}}">Home</a></li>
                                    @if (Route::has('login'))
                                        @auth
                                            <li><a data-scroll href="{{ url('/dashboard') }}">Dashboard</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}" >Log in</a></li>
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                        @endauth
                                    @endif
                                    
                                    <li><a data-scroll href="#contact">Contact</a></li>
                                </ul>

                            </div>
                        </div> <!-- /.col -->

                    </div> <!-- /.row -->
                </div> <!--/.container -->
            </div> <!-- /.navigation-overlay -->
        </nav> <!-- /.navbar -->

    </header>
    <!-- End Navigation -->

    
    <!-- Start Intro -->
    <section id="slider">
        <div class="rev_slider_wrapper fullscreen-container" data-alias="agency-website" id="rev_slider_280_1_wrapper" style="background-color:#fff;padding:0px;height:1080px;">
          <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
          <div class="rev_slider fullscreenbanner" id="rev_slider_nagency" style="display:none;">
              <ul style="display:none;">

                <!-- slider Item 1 -->
                <li data-index="rs-1" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off"  data-title="N.Agency" data-description="">
                  <img src="img/slider/s1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3" 
                    id="slide-1-layer-1" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-160','-170','-170','-120']" 
                    data-fontsize="['70','60','60','36']"
                    data-lineheight="['70','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"              
                    data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="chars" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-elementdelay="0.05"                    
                    style="z-index: 5; white-space: nowrap;">Welcome to E. Diary
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4" 
                    id="slide-1-layer-2" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-80','-90','-90','-60']"
                    data-fontsize="['28','24','24','20']"
                    data-lineheight="['28','24','36','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"               
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"                     
                    style="z-index: 6; white-space: nowrap;">create life memory here
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption rs-parallaxlevel-5" 
                    id="slide-1-layer-3" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['15','5','5','10']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                    data-responsive_offset="on" 
                    data-responsive="off"                   
                    style=""><a data-scroll href='{{route("register")}}' class='btn btn-main btn-white'>register now</a>
                  </div>           
                
                </li>

                <!-- slider Item 2 -->
                <li data-index="rs-3" data-transition="slideremoveright" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off">
                  <img src="img/slider/s3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption NotGeneric-Title tp-resizeme black-color rs-parallaxlevel-3" 
                    id="slide-2-layer-1" 
                    data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-85']" 
                    data-fontsize="['70','60','60','36']"
                    data-lineheight="['70','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"              
                    data-transform_in="y:[100%];z:0;rx:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="chars" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-elementdelay="0.05"                    
                    style="z-index: 5; white-space: nowrap;">a head of book
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme NotGeneric-Text black-color rs-parallaxlevel-4" 
                    id="slide-2-layer-2" 
                    data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','-10']"
                    data-fontsize="['18','18','20','14']"
                    data-lineheight="['28','28','32','24']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"               
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"                   
                    style="z-index: 6;">Create your Diary and Access it in the internet<br>update the history any time<br>
                    give access to others <br> create diary for your children and add relevant information for them to see when growth

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption rs-parallaxlevel-5" 
                    id="slide-2-layer-3" 
                    data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['105','105','115','85']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                    data-responsive_offset="on" 
                    data-responsive="off"                   
                    style=""><a data-scroll href='#portfolio' class='btn btn-main btn-black'>our Services</a>
                  </div>          
                
                </li>

                <!-- slider Item 3 -->
                <li data-index="rs-2" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off">
                  <img alt="" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="5000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="110" src="img/slider/s2.jpg">

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3" 
                    id="slide-3-layer-1" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-75','-70','-70','-45']" 
                    data-fontsize="['70','60','60','36']"
                    data-lineheight="['70','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"              
                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="chars" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-elementdelay="0.05"                    
                    style="z-index: 5; white-space: nowrap;">100% Secured.
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption NotGeneric-SubTitle white-color tp-resizeme rs-parallaxlevel-2" 
                    id="slide-3-layer-2" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                    data-fontsize="['28','24','24','20']"
                    data-lineheight="['28','24','36','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"                    
                    style="z-index: 6; white-space: nowrap;">Create Beautiful Diary Today
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption rs-parallaxlevel-5" 
                    id="slide-3-layer-3" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['90','90','100','75']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                    data-responsive_offset="on" 
                    data-responsive="off"                   
                    style=""><a href='#' class='btn btn-main btn-transparent-light'>FAQ</a>
                  </div>

                </li>

              </ul>
              <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
          </div>
      </div>
    </section>
    <!-- End Intro -->


    <!-- Start Service -->
    <section id="service" class="p-top-80 p-bottom-80">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Service</strong></h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em>Cordially convinced did incommode existence put out suffering certainly. Besides another and saw ferrars limited ten say unknown. So mainly it was not that difficult to understand.</em></p>
                    </div>
                </div> <!-- /.col -->
            </div>  <!-- /.row -->


            <div class="row">

                <!-- Service Item 1 -->                  
                <div class="col-md-3 col-sm-6 m-bottom-20">              
                    <div class="service wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">               
                        <div class="service-icon">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        <h4>SERVICES</h4>
                        <div class="service-text">
                            <p>On at tolerably depending do perceived. Luckily eat joy see own shyness minuter. So before remark at depart Did son unreserved.</p>
                        </div>
                    </div>                   
                </div> <!-- /.col -->

                <!-- Service Item 2 -->                  
                <div class="col-md-3 col-sm-6 m-bottom-20">              
                    <div class="service wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">               
                        <div class="service-icon">
                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                        </div>
                        <h4>SECURITY</h4>
                        <div class="service-text">
                            <p>Have spot part for his quit may. Enable it is square my an regard. Often merit stuff first oh up hills as his memorey got null in recording.</p>
                        </div>
                    </div>                   
                </div> <!-- /.col -->

                <!-- Service Item 3 -->                  
                <div class="col-md-3 col-sm-6 m-bottom-20">              
                    <div class="service wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">              
                        <div class="service-icon">
                            <i class="fa fa-modx" aria-hidden="true"></i>
                        </div>
                        <h4>ADVANTAGE</h4>
                        <div class="service-text">
                            <p>There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Luckily eat joy see own shyness minuter.</p>
                        </div>
                    </div>                   
                </div> <!-- /.col -->

                <!-- Service Item 4 -->                  
                <div class="col-md-3 col-sm-6">              
                    <div class="service wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">              
                        <div class="service-icon">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <h4>PRIVACY</h4>
                        <div class="service-text">
                            <p>So striking at of to welcomed resolved. Northward by described up household therefore attention. Excellence decisively nay man yet impress.</p>
                        </div>
                    </div>                   
                </div> <!-- /.col -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </section>
    <!-- End Service -->


    


   


    <!-- Start Video Section -->
    <section class="video-bg overlay-dark" style="background-image:url(img/video-bg.jpg)">
        <div class="js-height-full container">
            <!-- video setting -->
            <div class="video-player" data-property="{videoURL:'https://youtu.be/dwfjayxRvqw',containment:'.video-bg',autoPlay:true, mute:true, loop:true, showControls:false, startAt:0, opacity:1}"></div>

            <div class="vertical-section">
                <div class="vertical-content">
                    <div class="video-caption text-center white-color">
                        <h2 class="p-top-20">Watch Our Demo</h2>
                        <div class="divider-center-small divider-white"></div>
                        <h6 class="p-bottom-20">Youtube Video Background </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Section -->


    


    <!-- Start Skill/Why Choose Us -->
    <section class="light-bg p-top-80 p-bottom-40">
        <div class="container">
            <div class="row">

                <div class="col-md-6 p-bottom-40">
                    <!-- Section Title -->
                    <div class="m-bottom-30">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Our Skills</h2>
                        <div class="divider-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                    </div>

                    <!-- === Progress item 1 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">filing</h6>
                        <p class="pull-right">80%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress item 2 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">record management</h6>
                        <p class="pull-right">90%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress item 3 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">database</h6>
                        <p class="pull-right">60%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress item 4 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">security</h6>
                        <p class="pull-right">73%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress item 5 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">profiling</h6>
                        <p class="pull-right">75%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;" data-wow-delay="0.3s">
                        </div>
                    </div>

                </div> <!-- /.col -->

                <div class="col-md-6 p-bottom-40">

                    <!-- Section Title Right -->
                    <div class="m-bottom-30">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Why Choose Us</h2>
                        <div class="divider-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                    </div>

                    <!-- === Accordion === -->
                    <div id="accordion" class="panel-group wow fadeIn" data-wow-delay="0.6s">
                        
                        <!-- === Accordion item 1 === -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Necessary ye contented newspaper zealously</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Fat new smallness few supposing suspicion two. Course sir people worthy horses add entire suffer. How one dull get busy dare far. At principle perfectly by sweetness do.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- === Accordion item 2 === -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Add you viewing ten equally believe put</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Connection too unaffected expression led son possession. New smiling friends and her another. Leaf she does none love high yet. Snug love will up bore as be.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- === Accordion item 3 === -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Believing neglected so allowance</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Do am he horrible distance marriage so although. Afraid assure square so happen mr an before. His many same been well can high that. Forfeited did law eagerness allowance improving assurance bed.</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /.panel-group -->
                                      
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Skill/Why Choose Us -->


    


    



    <!-- Start client -->
    <section id="client" class="light-bg p-top-80 p-bottom-80">

        <!-- Section Title -->
        <div class="section-title text-center m-bottom-40">
            <h2>Our Clients</h2>
            <div class="divider-center-small"></div>
        </div>

        <!-- === Clients === -->
        <div class="container ">
            <div class="row">

                <div id="owl-clients" class="owl-carousel owl-theme client text-center">

                        <!-- === Client 1 === -->
                        <div class="client-item text-center">
                            <img class="img-responsive" src="img/client/1.png" alt="">
                        </div>

                        <!-- === Client 2 === -->
                        <div class="client-item text-center">
                            <img class="img-responsive" src="img/client/2.png" alt="">
                        </div>

                        <!-- === Client 3 === -->
                        <div class="client-item text-center">
                            <img class="img-responsive" src="img/client/3.png" alt="">
                        </div>

                        <!-- === Client 4 === -->
                        <div class="client-item text-center">
                            <img class="img-responsive" src="img/client/4.png" alt="">
                        </div>

                        <!-- === Client 5 === -->
                        <div class="client-item text-center">
                            <img class="img-responsive" src="img/client/5.png" alt="">
                        </div>

                        <!-- === Client 6 === -->
                        <div class="client-item text-center">
                            <img class="img-responsive" src="img/client/6.png" alt="">
                        </div>

                        <!-- === Client 7 === -->
                        <div class="client-item text-center">
                            <img class="img-responsive" src="img/client/7.png" alt="">
                        </div>

                </div><!-- /#owl-testimonials -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->

    </section>
    <!-- End client -->


    <!-- Start Contact -->
    <section id="contact" class="p-top-80 p-bottom-50">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Contact</h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em>Lose away off why half led have near bed. At engage simple father of period others except. My giving do summer time dance hero of though narrow marked at.</em></p>
                    </div>
                </div> <!-- /.col -->
            </div>  <!-- /.row -->

            <div class="row">

                <!-- === Contact Form === -->
                <div class="col-md-7 col-sm-7 p-bottom-30">
                    <div class="contact-form row">

                        <form name="ajax-form" id="ajax-form" action="contact.php" method="post">
                            <div class="col-sm-6 contact-form-item wow zoomIn">
                                <input name="name" id="name" type="text"   placeholder="Your Name: *"/>
                                <span class="error" id="err-name">please enter name</span>
                            </div>
                            <div class="col-sm-6 contact-form-item wow zoomIn">
                                <input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
                                <span class="error" id="err-email">please enter e-mail</span>
                                <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                            </div>
                            <div class="col-sm-12 contact-form-item wow zoomIn">
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-sm-12 contact-form-item">
                                <button class="send_message btn btn-main btn-theme wow fadeInUp" id="send" data-lang="en">submit</button>                
                            </div>
                            <div class="clear"></div>   
                            <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
                            <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
                            <div class="error" id="err-state"></div>
                        </form> 
                                    
                        <div class="clearfix"></div>
                        <div id="ajaxsuccess">Successfully sent!!</div>
                        <div class="clear"></div>

                    </div> <!-- /.contacts-form & inner row -->
                </div> <!-- /.col -->

                <!-- === Contact Information === -->
                <div class="col-md-5 col-sm-5 p-bottom-30">
                    <address class="contact-info">

                        <p class="m-bottom-30 wow slideInRight">Spring formal no county ye waited. My whether cheered at regular it of promise blushes perhaps.</p>

                        <!-- === Location === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            <div class="contact-info-title">
                                Address:
                            </div>
                            <div class="contact-info-text">
                                149 Null Street, New York, NY 098
                            </div>
                        </div>

                        <!-- === Phone === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-info-title">
                                Phone number:
                            </div>
                            <div class="contact-info-text">
                                +1-000-1111-3333
                            </div>
                        </div>

                        <!-- === Mail === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-info-title">
                                Email:
                            </div>
                            <div class="contact-info-text">
                                support@tabthemes.com
                            </div>
                        </div>

                    </address>
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Contact -->


    <!-- Start Footer -->
    <footer class="site-footer">
        <div class="container">
            <small class="copyright pull-left">Copyrights ?? Ediary {{date('Y')}} All Rights Reserved By <a href="#">08162463010</a>.</small>
            <div class="social-icon pull-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
                <a href="#"><i class="fa fa-globe"></i></a>
            </div>
            <!-- /social-icon -->
        </div>
        <!-- /container -->
    </footer>
    <!-- End Footer -->


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