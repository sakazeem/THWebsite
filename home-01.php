<?php 
   include('./header.php'); 
   include('./homepage-banner.php'); 
  // include('./latest-news.php');
?>

    
<!-- tabs start-->
<section class="tabs-inline">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="chooseOption">
                    <a class="button" href="/news-and-features.php">News</a>
                    <a class="button" href="/guides.php">Guides</a>
                    <a class="button" href="/places.php">Places</a>
                    <button>Coffee</button>
                    <button>Perks</button>
                    <button>Membership</button>
                    <button>App</button>
                    <button>Perks</button>
                    <button>Membership</button>
                    <button>Coffee</button>
                    <button>Perks</button>
                    <button>Membership</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tabs end-->


<section class="guidesBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="upperCs hdBtn-aling">GUIDES <a href="/guides.php" class="viewMbtn">View More <i class="fal fa-long-arrow-right"></i></a></h2>
                </div>
            </div>
           <?php include('./guides-carousel.php');?>
        </div>
</section>



<section class="editorPick">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="upperCs">Huntr editor’s picks</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="editorCarousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="picksBg">
                                <figure class="col-4"><img src="./images/pickimg.png" alt=""></figure>
                                <div class="col-8"><h6>San Beach</h6>
                                <p>There are many variations of passages of Lorem Ipsum available</p>
                               </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picksBg">
                              <figure class="col-4"> <img src="./images/pickimg2.png" alt=""></figure>
                              <div class="col-8"> <h6>San Brew</h6>
                                <p>There are many variations of passages of Lorem Ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picksBg">
                            <figure class="col-4"><img src="./images/pickimg.png" alt=""></figure>
                            <div class="col-8">  <h6>San Beach</h6>
                                <p>There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picksBg">
                            <figure class="col-4"><img src="./images/pickimg2.png" alt=""></figure>
                            <div class="col-8">  <h6>San Brew</h6>
                                <p>There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="picksBg">
                            <figure class="col-4"><img src="./images/pickimg2.png" alt=""></figure>
                            <div class="col-8"> <h6>San Brew</h6>
                                <p>There are many variations of passages of Lorem Ipsum available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>

<section class="trendingPlaces">
    <div class="container">
        <div class="row newsFeatureSlide">
            <div class="col-md-12">
                <h2 class="upperCs hdBtn-aling">PLACES  <a href="" class="viewMbtn">View More <i class="fal fa-long-arrow-right"></i></a></h2>
                <?php include('./places-carousel.php');?>
            </div>
            
        </div>
    </div>
</section>


<!-- Trending News Start -->    
<section class="trendingNewsSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">NEWS &amp; FEATURES</h2>
            </div>
        </div>
        <?php include('./trending-news.php');?>

    </div>
</section>
<!-- Trending News End -->  

<!-- Latest news start-->
<section class="latestNewsSection">   
  <?php  include('./latest-news.php'); ?>
</section>  
<!-- Latest News End-->     

    <section class="advertBg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 advLft"><img src="./images/advert-01.png" alt="*" /></div>
                <div class="col-md-6">
                    <h2>The only guide you need.<br />
                        With a sprinkling of<br /> exclusive perks.
                    </h2>
                    <p>The best of Dubai &amp; the UAE in the palm of your hand. </p>
                    <div class="storebtn advBtn">
                        <a href="#"><img src="./images/footappstore.png" class="img-fluid" alt=""></a>
                        <a href="#"><img src="./images/footplaystore.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    




   







    <!-- Search-Modal -->
    <div class="modal fade searchModal" id="srchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                <div class="modal-body">
                    <form class="d-flex headSrch" id="hdSearch">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#srchModal"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php 
   include('./footer.php'); 
?>