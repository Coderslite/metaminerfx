<div class="footer">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-3 mb-3">
                    <img src="libs/img/logo.png" class="loggo" alt="">
                    <p class="pt-3 mb-2">
                        More than a trading platform. We are your trading partner.
                    </p>
                    <div class="">
                        Email: support@Metaminerfx.com
                        <p>24/7 customer support and live chat </p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="text-light">Quick links</h5>
                    <hr class="hrr">
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="risk.php">Risk disclosure</a></li>
                        <li><a href="information.php">Information Security</a></li>
                        <li><a href="conflict.php">Conflict of Interest</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="text-light">Useful links</h5>
                    <hr class="hrr">
                    <ul>
                        <li><a href="register.php">Real Account</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 md-3">
                    <h5 class="text-light">Social</h5>
                    <hr class="hrr">
                    <address>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </address>
                    <div class="mb-3">
                        <h5 class="text-light">Awards</h5>
                        <hr class="hrr">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="libs/img/most_trusted_1.png" class="img-fluid">
                                <img src="libs/img/most_trusted_2.png" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <img src="libs/img/most_trusted_3.png" class="img-fluid">
                                <img src="libs/img/most_trusted_4.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            &copy; copyright - Metaminerfx 2021
        </div>
    </div>
    <a href="xhtml/register.php">
        <div id="trydemo" class="trydemo-en">Open a live account </div>
    </a>
    <!-- <script src="libs/js/jquery.js"></script> -->
    <script src="libs/js/jquery-2.2.4.min.js"></script>
    <script src="libs/js/chnbg.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->
    <script>
        $(document).ready(function(){
            $('.menu-tog').click(function(){
                $('#nav-m').toggle('fast');
                $("i", this).toggleClass("fa-sliders-h fa-times");
            });
            $('.upc').click(function(){
                $('.upcoming-toggler').toggle('fast');
                $("i", this).toggleClass("fa-angle-down fa-angle-up");
            });
            if ($(window).width() < 960) {
                $("#nav-m").removeClass("justify-content-end");
                $(".drp").removeClass("dropdown-menu");
                $(".bannerr").removeClass("container");
                $(".klk").removeClass("float-end");
                $(".klk").addClass("float-start");
                $("#nav-m").addClass("flex-column");
                // $("#nav-m").addClass("hide-mob");
                $(document).on("click", ".mobile-toggle", function(event){
                    event.preventDefault();
                    $(this).closest('.mobile-toggle').next('.drp').toggle();
                }); 
            }
        });
    </script>
     <script src="libs/js/owl.carousel.min.js"></script>
    <script src="libs/js/wow.min.js"></script>
    <script>
        new WOW().init();
         $('.owl-carousel').owlCarousel({
            loop:true,
            margin:20,
            autoplay:true,
            // nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
        // $(".owl-carousel").owlCarousel();
        // $('.owl-carou').owlCarousel({
        //     loop:true,
        //     autoplay:true,
        //     margin:5,
        //     // nav:true,
        //     responsive:{
        //         0:{
        //             items:4
        //         },
        //         600:{
        //             items:4
        //         },
        //         1000:{
        //             items:6
        //         }
        //     }
        // })
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
    </script>
    <script type="text/javascript" src="libs/js/translate.js"></script>
    <script type="text/javascript">
    /* <![CDATA[ */
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
    /* ]]> */
    </script>
    
</body>


<!-- Mirrored from Metaminerfx.com/information-security?pgname=Information%20Security by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 15 Aug 2022 16:28:41 GMT -->
</html>