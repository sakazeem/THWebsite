<?php include('./header.php'); ?>

<!-- Inner Banner Start -->   
<section class="inner-banner">
  <div class="container-fluid">    
    <div class="row top-banner">
        <h3 class="inner-banner-text-detail">The Huntr collaborates with the government of dubai Media office to publish
            two special guides as part of brand dubai's new 'dubai destinations' project
        </h3>
        <img src="./images/news-banner.jpg" alt="*">
        <div class="placeBottom">
            <div><span class="date">20 December 2021</span><span class="category">News and Features</span></div>
            
            
                <div class="placeUsr">
                        <!-- <a href=""><i class="far fa-share-alt"></i></a>--> 
                        <div class="share-button sharer">
                            <button type="button" class="share-btn"><i class="fal fa-paper-plane"></i></button>
                            <div class="social top center networks-5 ">
                                <!-- Facebook Share Button -->
                                <a class="fbtn share facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                <!-- Google Plus Share Button -->
                                <a class="fbtn share gplus" href="#"><i class="fab fa-google-plus-g"></i></a>
                                <!-- Twitter Share Button -->
                                <a class="fbtn share twitter" href="#"><i class="fab fa-twitter"></i></a>

                                <!-- LinkedIn Share Button -->
                                <a class="fbtn share linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                </div>                            
        </div>
    </div>
  </div>
</section>
<!-- Inner Banner End -->

<!-- contentArea Start -->   
<section class="contentArea">
    <div class="container">
      <p><span class="largeLetter">A</span>t the begining of december, our friends at Brand Dubai got in touch with us and 
      asked us if we could create some guides as part of their wider Dubai Destinations Project for the Dubai Media Concil - which higlights various activities, locations and experiences in dubai...</p>
    <h5 class="clearfix">"After receiving the prestigious honour of being bestowed with the 10-Year Golden Visa by the Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam delectus unde repudiandae placeat dolorum cumque sed in quasi velit, assumenda corrupti exercitationem dolores rem necessitatibus, molestiae veritatis ducimus beatae magni..." - Holly Williams-lioyd, The Huntr Founder</h5>
    
      <!-- tabs start-->
      <section class="tabs-inline">
          <div id="detailImgCarousel" class="owl-carousel owl-theme">
              <div class="item">
              <img src="./images/detail-01.jpg" alt="*">
              </div>
              <div class="item">
              <img src="./images/detail-02.jpg" alt="*">
              </div>
              <div class="item">
              <img src="./images/detail-01.jpg" alt="*">
              </div>
              <div class="item">
              <img src="./images/detail-02.jpg" alt="*">
              </div>
          </div>
      </section>
      <!-- tabs end-->
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nemo, non officia iste, reiciendis minima vero aliquam architecto dolorum nulla necessitatibus et cumque veniam sed? Iusto rerum vero pariatur minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis provident similique placeat. Maiores iure assumenda eligendi quasi, reiciendis in fugiat eos, consequatur asperiores voluptas veniam nam deserunt cumque at. Deserunt?</p>
      <hr>
      <div class="website-link"><a href="#"><i class="fa fa-globe"></i>branddubai.com</a></div>
      <div class="author-link">By<a href="#"><img class="author-img" src="images/john.png" alt="*"> The HUNTR</a></div>


    </div>

</section>
<!-- contentArea End -->



<!-- discoverNewsSection News Start -->    
<section class="discoverNewsSection greyBg">
    <div class="container">
        <?php include('./trending-news.php');?>

    </div>
</section>
<!-- discoverNewsSection News End -->  



<?php include('./footer.php'); ?>

<script>
    $(document).ready(function() {
        $(".discoverNewsSection").find("h3").text("Discover More");
    });
 </script>