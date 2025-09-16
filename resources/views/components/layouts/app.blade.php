<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SSK Green</title> 

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/fav-icon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/fav-icon/favicon-16x16.png" sizes="16x16">
    

</head>
<body>

<div class="boxed_wrapper">

<div class="top-bar">
    <div class="container">
        <div class="clearfix">
            <ul class="float_left top-bar-info">
                <li><i class="icon-phone-call"></i>Phone: (+91) 99939 72000</li>
                <li><i class="icon-e-mail-envelope"></i>hotelkanchantilak@gmail.com</li>
            </ul>
            <div class="right-column float_right">
                <ul class="social list_inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="{{ route('home')  }}"><img height="40" src="images/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-9 menu-column">
                <nav class="menuzord" id="main_menu">
                   <ul class="menuzord-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{route('whyUs')}}">Why us</a> </li>
                        <li><a href="{{route('about')}}">About us</a> </li>
                        <li><a href="#">Our services</a>
                            {{-- <ul class="dropdown" style="left: 0px; display: none;"> --}}
                                <section class="dropdown p-5 text-2xl font-bold" style="left: -1pxx; background-color:white;  position: absolute; z-index:3;">
                                    <div class="container-fluid">
                                    <div class="row " >
                                    <!-- Column 1 -->
                                    <div class="col-md-3 ">
                                        <h6 class="font-bold text-dark text-2xl">
                                            <a href="https://enkingint.org/sustainability-net-zero-services/" >SUSTAINABILITY & NET ZERO SERVICES </a>
                                        </h6>
                                        <ul class="list-unstyled">
                                        <li><a href="https://enkingint.org/sustainability-net-zero-services/#aa1000" class="dropdown-item text-success p-3">AA1000 AS assurance providers by Accountability</a></li>
                                        <li><a href="https://enkingint.org/sustainability-net-zero-services/#climate_change" class="dropdown-item text-success p-3">Climate Change Services</a></li>
                                        <li><a href="https://enkingint.org/sustainability-net-zero-services/#esg_services" class="dropdown-item text-success p-3">Sustainability and ESG services</a></li>
                                        <li><a href="https://enkingint.org/sustainability-net-zero-services/#supply_chain" class="dropdown-item text-success p-3">Sustainable supply chain services</a></li>
                                        <li><a href="https://enkingint.org/sustainability-net-zero-services/#green_certification" class="dropdown-item text-success p-3">Green certification & resource efficiency services</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 2 -->
                                    <div class="col-md-3">
                                        <h6 class="font-bold text-dark text-2xl">
                                            <a href="https://enkingint.org/climate-investments/" >CLIMATE INVESTMENTS</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                        <li><a href="https://enkingint.org/climate-investments/#Community-Based-Projects" class="dropdown-item text-success p-3">Community Based Projects</a></li>
                                        <li><a href="https://enkingint.org/climate-investments/#Nature-Based-Solutions" class="dropdown-item text-success p-3">Nature-Based Solutions (NBS)</a></li>
                                        <li><a href="https://enkingint.org/climate-investments/#ESCO-Energy-Efficiency-Projects" class="dropdown-item text-success p-3">ESCO Energy Efficiency Projects</a></li>
                                        </ul>
                                        <h6 class="font-bold text-dark mt-3 text-2xl">
                                            <a href="https://enkingint.org/carbon-plastic-offsets-portfolio-management-services/"> OFFSETS PORTFOLIO MANAGEMENT SERVICES</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                        <li><a href="https://enkingint.org/offsets-portfolio-management-services/#Carbon-Offset" class="dropdown-item text-success p-2">Carbon Offset</a></li>
                                        <li><a href="https://enkingint.org/offsets-portfolio-management-services/#Renewable-Energy" class="dropdown-item text-success p-2">Renewable Energy Attribute Certificates (EACs)</a></li>
                                        <li><a href="https://enkingint.org/offsets-portfolio-management-services/#Plastic-Credits" class="dropdown-item text-success p-2" >EPR & Plastic Credits Projects</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 3 -->
                                    <div class="col-md-3">
                                        <h6 class="font-bold text-dark text-2xl">
                                            <a href="https://enkingint.org/offsetting-to-achieve-carbon-neutrality/" >OFFSETTING TO ACHIEVE CARBON NEUTRALITY / NET ZERO EMISSIONS / PLASTIC NEUTRALITY</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                        <li><a href="https://enkingint.org/offsetting-to-achieve-carbon-neutrality/#Carbon-Avoidance-Projects" class="dropdown-item text-success p-3">Carbon Avoidance Projects</a></li>
                                        <li><a href="https://enkingint.org/offsetting-to-achieve-carbon-neutrality/#Carbon-Removal-Projects" class="dropdown-item text-success p-3">Carbon Removal Projects</a></li>
                                        <li><a href="https://enkingint.org/offsetting-to-achieve-carbon-neutrality/#Plastic-Credits-Projects" class="dropdown-item text-success p-3">Extended Producer Responsibilities (EPR) & Plastic Credits Projects</a></li>
                                        <li><a href="https://enkingint.org/offsetting-to-achieve-carbon-neutrality/#Energy-Attribute-Certificates-Projects" class="dropdown-item text-success p-3">Green Power / Renewable Energy Attribute Certificates Projects</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 4 -->
                                    <div class="col-md-3">
                                        <h6 class="font-bold text-dark text-2xl">
                                            <a href="https://enkingint.org/emission-compliance-carbon-markets-capacity-building-advisory/" >CARBON MARKETS CAPACITY BUILDING ADVISORY</a>
                                        </h6>
                                        <ul class="list-unstyled">
                                        <li><a href="https://enkingint.org/carbon-markets-capacity-building-advisory/" class="dropdown-item text-success p-3">Operationalization of Article 6 of Paris Agreement</a></li>
                                        <li><a href="https://enkingint.org/carbon-markets-capacity-building-advisory/" class="dropdown-item text-success p-3">Carbon Budgets & Stock-take</a></li>
                                        <li><a href="https://enkingint.org/carbon-markets-capacity-building-advisory/" class="dropdown-item text-success p-3">Internationally Transferred Mitigation Outcomes (ITMO)</a></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                </section>
                             {{-- </ul> --}}
                        </li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </nav> 
            </div>
        </div>
   </div>
</section>

{{ $slot }}


<footer class="main-footer">
    
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-md-12 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget about-column">
                                <figure class="footer-logo"><a href="index.html"><img src="images/logo/logo.png" alt=""></a></figure>
                                
                                <ul class="contact-info">
                                    <li><span class="icon-location"></span>585/2 M.G. Road, Near Tilak Square, Palasia, Indore-452001, Madhya Pradesh, India</li>
                                    <li><span class="icon-phone-call"></span> Phone: +91-9993972000</li>
                                    <li><span class="icon-note"></span>hotelkanchantilak@gmail.com</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4  col-sm-6 col-xs-12" style="padding-left: 8rem;">
                            <div class="footer-widget link-column">
                                <div class="section-title">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ route('whyUs') }}">Why us</a></li>
                                        <li><a href="{{ route('about') }}">About us</a></li>
                                        <li><a href="{{ route('services') }}">Our Services</a></li>
                                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-column">
                                <div class="section-title">
                                    <h4>Subscribe Us</h4>
                                </div>
                                <h5>Subscribe to our newsletter!</h5>
                                <form action="#">
                                    <input type="email" placeholder="Email address....">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                                <p>We don’t do mail to spam & your mail <br>id is confidential.</p>
      
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
     
 
     
</footer>

<!--Footer Bottom-->
 <section class="footer-bottom">
    <div class="container">
        <div class="pull-left copy-text">
            <p><a href="#">Copyrights © 2025</a> All Rights Reserved. Powered by <a href="#">SSK green.</a></p>
        </div>
    </div>
</section>

    <!-- Scroll Top  -->
    <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
    <!-- preloader  -->
    <div class="preloader"></div>
    <div id="donate-popup" class="donate-popup">
        <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/imagezoom.js"></script> 
    <script src="js/jquery.magnific-popup.min.js"></script> 
    <script src="js/jquery.polyglot.language.switcher.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/validation.js"></script> 
    <script src="js/wow.js"></script> 
    <script src="js/jquery.fitvids.js"></script> 
    <script src="js/nouislider.js"></script> 
    <script src="js/isotope.js"></script> 
    <script src="js/pie-chart.js"></script>


    <!-- revolution slider js -->
    <script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/rev-slider/revolution.extension.video.min.js"></script>


    <script src="js/custom.js"></script>

</div>
    
</body>
</html>