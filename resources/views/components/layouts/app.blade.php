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
    {{-- <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button> --}}
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
   
{{-- Whatsapp Chat Button --}}
<!-- WhatsApp floating button - put once in your layout (e.g., footer partial) -->
<a id="whatsappFloating" class="whatsapp-float" href="https://wa.me/PHONENUMBER?text=Hello" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <!-- Inline WhatsApp SVG (no external deps) -->
  <svg viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Whatsapp-color</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E"> <path d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z" id="Whatsapp"> </path> </g> </g> </g></svg>
</a>

<script>

    
(function(){
  const phone = "447708155119"; // replace
  const defaultMsg = encodeURIComponent("Hello"); // change default message
  const waEl = document.getElementById('whatsappFloating');
  if(!waEl) return;

  function isMobile() {
    return /Android|iPhone|iPad|iPod|Opera Mini|IEMobile|WPDesktop/i.test(navigator.userAgent);
  }

  // prefer whatsapp:// on mobile to open app directly
  const base = isMobile() ? `whatsapp://send?phone=${phone}&text=${defaultMsg}` : `https://wa.me/${phone}?text=${defaultMsg}`;
  waEl.href = base;

  // optional: open in new tab for desktop, same tab for mobile
  if (isMobile()) waEl.removeAttribute('target');
  else waEl.setAttribute('target','_blank');
})();
</script>

</body>
</html>