<?php include('./header.php'); ?>

<!-- Inner Banner Start -->
<section class="inner-banner">
    <div class="container-fluid">
        <div class="row top-banner">
            <h2 class="inner-banner-text">Places</h2>
            <img src="./images/news-banner.jpg" alt="*">
        </div>
    </div>
</section>
<!-- Inner Banner End -->

<!-- Guides Start -->
<section class="newsFeatureSlide placesBg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="upperCs hdBtn-aling">Trending</h2>
            </div>
        </div>
        <?php include('./places-carousel.php');?>
    </div>
</section>
<!-- Guides End -->
<section class="tabs-inline">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="chooseOption">
                    <button>Explore & Search Page</button>
                    <button>Specialty Coffee </button>
                    <button>Restaurants</button>
                    <button>Bars & Nightlife </button>
                    <button>Art & Culture</button>
                    <button>Beauty & Spa </button>
                    <button>Health & Fitness </button>
                    <button>Hotels</button>
                    <button>Tourist Attractions </button>
                    <button>Outdoor Activities </button>
                    <button>Shops</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- filters end -->

<!-- Latest news start-->
<section class="latestNewsSection" style="display:none;">
    <div class="container">
        <div id="contentScroll" class="row">
            <div class="col-md-12">
                <h2 class="upperCs popinsFont5">New Additions</h2>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="placesList">
                    <figure><img src="images/place-img01.jpg" alt="*" /></figure>
                    <div class="text">
                        <a class="h5" href="">Buy 1 get 1 free day passes at caesars palace</a>
                        <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6>
                    </div>
                </div>
            </div><!-- .item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="placesList">
                    <figure><img src="images/place-img02.jpg" alt="*" /></figure>
                    <div class="text">
                        <a class="h5" href="">20% of at paus</a>
                        <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6>
                    </div>
                </div>
            </div><!-- .item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="placesList">
                    <figure><img src="images/place-img03.jpg" alt="*" /></figure>
                    <div class="text">
                        <a class="h5" href="">welcome cocktail/mocktail at mura</a>
                        <h6>speciality coffee in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6>
                    </div>
                </div>
            </div><!-- .item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="placesList">
                    <figure><img src="images/place-img02.jpg" alt="*" /></figure>
                    <div class="text">
                        <a class="h5" href="">20% of at Qahwaty</a>
                        <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6>
                    </div>
                </div>
            </div><!-- .item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="placesList">
                    <figure><img src="images/place-img03.jpg" alt="*" /></figure>
                    <div class="text">
                        <a class="h5" href="">Buy 1 get 1 free day passes at caesars palace</a>
                        <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6>
                    </div>
                </div>
            </div><!-- .item-->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="placesList">
                    <figure><img src="images/place-img01.jpg" alt="*" /></figure>
                    <div class="text">
                        <a class="h5" href="">Buy 1 get 1 free day passes at caesars palace</a>
                        <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6>
                    </div>
                </div>
            </div><!-- .item-->

        </div>
    </div>
</section>
<!-- Latest news end-->
<div id="loading">
    Loading Please Wait......
</div>

<div id="loading-Btn">
    Loading More...
</div>


<?php 
   include('./footer.php'); 
?>

<script>
//var count=0;
// $(document).ready(function(){
//$(window).scroll(function(){
//Will check if the user has reached bottom of a PAGE
//Check for user has reached bottom of Page
//  if($(window).scrollTop()==($(document).height()-window.innerHeight)){
//     $('#loading').fadeIn();
//     setTimeout("appendContent()", 1000);
// }
//});
//});
// var appendContent=function(){
//    count++;
//    for(var i=0;i<2;i++){
//       $('#contentScroll').append('<div class="col-md-4 col-sm-4 col-xs-12"> <div class="placesList"> <figure><img src="images/place-img02.jpg" alt="*" /></figure> <div class="text"> <a class="h5" href="">20% of at Qahwaty</a> <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6> </div> </div> </div><!-- .item--> <div class="col-md-4 col-sm-4 col-xs-12"> <div class="placesList"> <figure><img src="images/place-img03.jpg" alt="*" /></figure> <div class="text"> <a class="h5" href="">Buy 1 get 1 free day passes at caesars palace</a> <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6> </div> </div> </div><!-- .item--> <div class="col-md-4 col-sm-4 col-xs-12"> <div class="placesList"> <figure><img src="images/place-img01.jpg" alt="*" /></figure> <div class="text"> <a class="h5" href="">Buy 1 get 1 free day passes at caesars palace</a> <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6> </div> </div> </div><!-- .item-->');	
//    }
//   $('#loading').fadeOut();
// };

// $("#loading-Btn").click(function(){
//    count++;
//    for(var i=0;i<2;i++){
//        $('#contentScroll').append('<div class="col-md-4 col-sm-4 col-xs-12"> <div class="placesList"> <figure><img src="images/place-img02.jpg" alt="*" /></figure> <div class="text"> <a class="h5" href="">20% of at Qahwaty</a> <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6> </div> </div> </div><!-- .item--> <div class="col-md-4 col-sm-4 col-xs-12"> <div class="placesList"> <figure><img src="images/place-img03.jpg" alt="*" /></figure> <div class="text"> <a class="h5" href="">Buy 1 get 1 free day passes at caesars palace</a> <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6> </div> </div> </div><!-- .item--> <div class="col-md-4 col-sm-4 col-xs-12"> <div class="placesList"> <figure><img src="images/place-img01.jpg" alt="*" /></figure> <div class="text"> <a class="h5" href="">Buy 1 get 1 free day passes at caesars palace</a> <h6>cafe in dubai <span>0.4km <i class="far fa-map-marker-alt"></i></span></h6> </div> </div> </div><!-- .item-->');	
//    }
// })
</script>