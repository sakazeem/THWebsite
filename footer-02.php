<footer class="footer-wrapper">
    <div class="container-md">
        <div class="subscription">
            <div class="row mobileFlex">
                <div class="col-md-12 newsletter">
                    <p class="text-center">Get the best of your city straight to your inbox</p>
                    <form class="newsLetterForm">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Email Address"><button>Go</button>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mobileFlex">
                <hr style="margin:40px 0; border: 2px; color: black;" />
            </div>
            <div class="row mobileFlex">
                <div class="col-md-12 footLogobg">
                    <a href="#"><img src="./images/footerlogo.png" class="img-fluid" alt="" /></a>
                    <div class="storebtn">
                        <a href="#"><img src="./images/footappstore.png" class="img-fluid" alt="" /></a>
                        <a href="#"><img src="./images/footplaystore.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <div class="container">

        <div class="footer-inner">
            <div class="row mobileFlex">
                <div class="col-md-3 footLogobg">
                    <a href="#"><img src="./images/footerlogo.png" class="img-fluid" alt="" /></a>
                    <div class="storebtn">
                        <a href="#"><img src="./images/footappstore.png" class="img-fluid" alt="" /></a>
                        <a href="#"><img src="./images/footplaystore.png" class="img-fluid" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row accordion" id="accordionExample">

                        <div class="col-md-3">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <label class="link-head">Quick Links</label>
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav list-inline">
                                            <li class="nav-item list-inline-item">
                                                <a href="#" class="nav-link">Home</a>
                                            </li>
                                            <li class="nav-item list-inline-item">
                                                <a href="#" class="nav-link">About</a>
                                            </li>
                                            <li class="nav-item list-inline-item">
                                                <a href="#" class="nav-link">Contact</a>
                                            </li>
                                            <li class="nav-item list-inline-item">
                                                <a href="#" class="nav-link">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="accordion-item">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <label class="link-head">Legal</label>
                                </button>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Terms &amp; Conditions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!--                        <label class="link-head responsiveLinkHead">Follow Us On:</label>-->
                    <div class="headsocial footsocial">
                        <a href=""><img src="images/fb.png" alt="" /></a>
                        <a href=""><img src="images/insta.png" alt="" /></a>
                        <a href=""><img src="images/tiktok.png" alt="" /></a>
                    </div>

                    <!--                        <a href="" class="footerGetbtn"><img src="images/getBtn.png" alt="" /></a>-->
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="headsocial footsocial">
                <a href=""><img src="images/fb.png" alt="" /></a>
                <a href=""><img src="images/insta.png" alt="" /></a>
                <a href=""><img src="images/tiktok.png" alt="" /></a>
            </div>
            <p>&copy; The HUNTR 2022</p>
            <!--                <p>&copy; Copyright 2022. All Rights Reserved.</p>-->
            <!--
<div class="footersocial">

    dasfdsf
</div>
-->

        </div>
    </div>
</footer>
<a href="#" id="scroll" style="display: none;"><span></span></a>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});
</script>
<script>
var discover = $("#discoverslide");

discover.owlCarousel({
    loop: true,
    nav: false,
    center: true,
    items: 3,
    margin: 0,
    autoplay: false,
    dots: true,
    autoplayTimeout: 85000,
    smartSpeed: 450,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        1170: {
            items: 3
        }
    }
});

var editorcarosal = $("#editorCarousel");

editorcarosal.owlCarousel({
    loop: true,
    nav: true,
    //            center: true,
    items: 3,
    margin: 15,
    autoplay: false,
    dots: false,
    autoplayTimeout: 85000,
    smartSpeed: 450,
    responsive: {
        0: {
            items: 1.3,
            nav: false,
        },
        768: {
            items: 2.3
        },
        991: {
            items: 3.3
        },
        1024: {
            items: 3.3
        }
    }
});

var newsfeat = $("#newsfeatCarousal, #guideCarousal");

newsfeat.owlCarousel({
    loop: true,
    nav: true,
    //            center: true,
    items: 3,
    margin: 20,
    autoplay: false,
    dots: false,
    autoplayTimeout: 85000,
    smartSpeed: 450,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        768: {
            items: 3
        },
        1170: {
            items: 3
        }
    }
});


var detailImgCarousel = $("#detailImgCarousel");

detailImgCarousel.owlCarousel({
    loop: true,
    nav: false,
    //center: true,
    items: 3,
    margin: 20,
    autoplay: false,
    dots: false,
    autoplayTimeout: 85000,
    smartSpeed: 450,
    responsive: {
        0: {
            items: 1.3
        },
        767: {
            items: 1.3
        },
        991: {
            items: 2.3
        },
        1170: {
            items: 3.3
        }
    }
});
</script>
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.addBg').addClass('stickytop');
    } else {
        $('.addBg').removeClass('stickytop');
    }
});
</script>
<script>
$(document).ready(function() {
    //custom button for homepage
    $(".share-btn").click(function(e) {
        $('.networks-5').not($(this).find(".networks-5")).each(function() {
            $(this).removeClass("active");
        });

        $(this).find(".networks-5").toggleClass("active");
    });
});
</script>
<script>
$('.closeMenu').click(function() {
    $('.navbar-collapse').removeClass('show');
});
</script>
<!--
    <script>
        $(function() {
            $("body").click(function(e) {
                if (e.target.getAttribute("class") === "navbar-collapse" || $(e.target).parents(".navbar-collapse").length > 0) {} else {
                    if ($(".navbar-collapse").hasClass("show") == true) {
                        $(".navbar-toggle")[0].click();
                    }
                }
            });
        });

    </script>
-->

<!--
navbar-collapse

navbar-toggler
-->
<script>
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
</script>



</body>

</html>