<?php include('./header.php'); ?>

<!-- Inner Banner Start -->   
<section class="inner-banner">
  <div class="container-fluid">    
    <div class="row top-banner">
        <h2 class="inner-banner-text">NEWS &amp; FEATURES</h2>
        <img src="./images/news-banner.jpg" alt="*">
    </div>
  </div>
</section>
<!-- Inner Banner End -->

<!-- Trending News Start -->   
<section class="trendingNewsSection">
  <div class="container">
   <?php include('./trending-news.php');?>
  </div> 
</section>
<!-- Trending News End --> 

<section class="tabs-inline">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="chooseOption">
                      <button>Latest News</button>
                     <button>Trending</button>
                    <button>Food & Drink</button>
                    <button>Style & Beauty</button>
                    <button>Art & Culture</button>
                    <button>Travel</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Latest news start-->
<section class="latestNewsSection">
  <div class="container">
    <div id="contentScroll" class="row">
        <div class="col-md-12">
            <h2 class="upperCs popinsFont5">Latest News</h2>
        </div>
        <?php 
   include('./latest-news.php'); 
?>
        
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
            $('#contentScroll').append('<div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col-4"><img src="images/feat5.jpg" alt="*" /></figure> <div class="col-8"> <h6>News &amp; Features</h6> <h5>Folly: A picturesque award-winning restaurant and rooftop bar</h5> <p>Only one day after the Taliban named an acting cabinet to lead Afghanistan, the dizzying challeng... </p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div> <div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col-4"><img src="images/feat6.jpg" alt="*" /></figure> <div class="col-8"> <h6>Food</h6> <h5>Gohan Dubai: A hidden Japanese restaurant and speakeasy bar</h5> <p>Only one day after the Taliban named an acting cabinet to lead Afghanistan, the dizzying challeng... </p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div>');	
        }
        $('#loading').fadeOut();
    };

    $("#loading-Btn").click(function(){
        count++;
        for(var i=0;i<2;i++){
            $('#contentScroll').append('<div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col-4"><img src="images/feat5.jpg" alt="*" /></figure> <div class="col-8"> <h6>News &amp; Features</h6> <h5>Folly: A picturesque award-winning restaurant and rooftop bar</h5> <p>Only one day after the Taliban named an acting cabinet to lead Afghanistan, the dizzying challeng... </p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div> <div class="col-md-6 col-sm-6 col-xs-6"> <div class="latestBlock"> <figure class="col-4"><img src="images/feat6.jpg" alt="*" /></figure> <div class="col-8"> <h6>Food</h6> <h5>Gohan Dubai: A hidden Japanese restaurant and speakeasy bar</h5> <p>Only one day after the Taliban named an acting cabinet to lead Afghanistan, the dizzying challeng... </p> <div class="nfshare textBtn-Btm"><a href="">View More <i class="fal fa-long-arrow-right"></i></a> <button type="button" class="share-btn"><i class="fas fa-paper-plane"></i></button></div> </div> </div> </div>');	
        }
    })

</script>