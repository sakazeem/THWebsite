<?php include('./header.php'); ?>

<!-- Inner Banner Start -->   
<section class="inner-banner">
  <div class="container-fluid">    
    <div class="row top-banner">
        <h2 class="inner-banner-text">Guides</h2>
        <img src="./images/news-banner.jpg" alt="*">
    </div>
  </div>
</section>
<!-- Inner Banner End -->

<!-- Guides Start -->   
<section class="guidesBg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="upperCs hdBtn-aling">Trending</h2>
            </div>
        </div>
        <?php include('./guides-carousel.php');?>
    </div>
</section>
<!-- Guides End --> 

<!-- Latest news start-->
<section class="latestNewsSection">
  <div class="container">
    <div id="contentScroll" class="row">
        <div class="col-md-12">
            <h3>Latest Guide</h3>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="latestBlock">
                <figure class="col"><img src="images/guide-img01.jpg" alt="*" /></figure>
                <div class="col">
                    <h6>Outdoor Activities <span class="dot">26 places</span></h6>
                    <h5>Its the last week to visit the Versaille exhibition at the Louvre</h5>
                    <p>immerse yourself in 17th-18th century Versailles</p>
                    <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="latestBlock">
               <figure class="col"><img src="images/guide-img02.jpg" alt="*" /></figure>
                <div class="col">
                    <h6>Restuarants <span class="dot">26 places</span></h6>
                    <h5>Comming Soon: A unique wellness Sanctuary, concious eatery...</h5>
                    <p>immerse yourself in 17th-18th century Versailles</p>
                    <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="latestBlock">
               <figure class="col"><img src="images/guide-img04.jpg" alt="*" /></figure>
                <div class="col">
                    <h6>Outdoor Activities <span class="dot">26 places</span></h6>
                    <h5>Its the last week to visit the Versaille exhibition at the Louvre</h5>
                    <p>immerse yourself in 17th-18th century Versailles</p>
                    <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="latestBlock">
               <figure class="col"><img src="images/guide-img03.jpg" alt="*" /></figure>
                <div class="col">
                    <h6>Restuarants <span class="dot">26 places</span></h6>
                    <h5>Comming Soon: A unique wellness Sanctuary, concious eatery...</h5>
                    <p>immerse yourself in 17th-18th century Versailles</p>
                    <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div>
                </div>
            </div>
        </div>
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
    var count=0;
    $(document).ready(function(){
        $(window).scroll(function(){
            //Will check if the user has reached bottom of a PAGE
            //Check for user has reached bottom of Page
            if($(window).scrollTop()==($(document).height()-window.innerHeight)){
                $('#loading').fadeIn();
                setTimeout("appendContent()", 1000);
            }
        });
    });
    var appendContent=function(){
        count++;
        for(var i=0;i<2;i++){
            $('#contentScroll').append('<div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col"><img src="images/guide-img01.jpg" alt="*" /></figure> <div class="col"> <h6>Outdoor Activities <span class="dot">26 places</span></h6> <h5>Its the last week to visit the Versaille exhibition at the Louvre</h5> <p>immerse yourself in 17th-18th century Versailles</p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div> <div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col"><img src="images/guide-img02.jpg" alt="*" /></figure> <div class="col"> <h6>Restuarants <span class="dot">26 places</span></h6> <h5>Comming Soon: A unique wellness Sanctuary, concious eatery...</h5> <p>immerse yourself in 17th-18th century Versailles</p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div>');	
        }
        $('#loading').fadeOut();
    };

    $("#loading-Btn").click(function(){
        count++;
        for(var i=0;i<2;i++){
            $('#contentScroll').append('<div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col"><img src="images/guide-img01.jpg" alt="*" /></figure> <div class="col"> <h6>Outdoor Activities <span class="dot">26 places</span></h6> <h5>Its the last week to visit the Versaille exhibition at the Louvre</h5> <p>immerse yourself in 17th-18th century Versailles</p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div> <div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col"><img src="images/guide-img02.jpg" alt="*" /></figure> <div class="col"> <h6>Restuarants <span class="dot">26 places</span></h6> <h5>Comming Soon: A unique wellness Sanctuary, concious eatery...</h5> <p>immerse yourself in 17th-18th century Versailles</p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div>');	
        }
    })

</script>