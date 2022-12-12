<?php include('./header.php'); ?>

<!-- Inner Banner Start -->   
<section class="inner-banner">
  <div class="container-fluid">    
    <div class="row">
    <div id="innerBannerCarousel" class="owl-carousel owl-theme innerBannerCarousel">
            <div class="item">
                <img src="./images/news-banner.jpg" alt="*">
            </div>
            <div class="item">
                <img src="./images/news-banner.jpg" alt="*">
            </div>
       </div>
    </div>
  </div>
</section>
<!-- Inner Banner End -->

<!-- contentArea Start -->   
<section class="contentArea border-curve">
    <div class="container">
      <div class="box">
        <h3><span class="hd-width90">Lucia's: An upscale italian affair in Down Town</span>
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
        </h3>
        <div class="time">
         <i class="far fa-clock"></i> open now
        </div>
        <div class="location-detail">
         <i class="far fa-map-marker-alt"></i><a href="javascript:void(0);">45 burj Khalifa street, dubai</a>
        </div>
        <h6>USPs</h6>
        <ul class="ups-list">
            <li><i class="far fa-check"></i> Licensed Bar</li>
            <li><i class="far fa-check"></i> Special Ocassions</li>
            <li><i class="far fa-check"></i> Birthdays</li>
            <li><i class="far fa-check"></i> Feeling Fancy </li>
            <li><i class="far fa-check"></i> italian</li>
            <li><i class="far fa-check"></i> Views</li>
            <li><i class="far fa-check"></i> outside seating</li>
        </ul>
       <hr>
       <p><span class="largeLetter">D</span>ubai and the UAE is filled with wonerful places. We are not short of fantastic resturants, cafes and new gems
       are popping up, daily, But sometimes we visit a place and we leave, if we could create some guides as part of their wider Dubai Destinations Project for the Dubai Media Concil - which higlights various activities, locations and experiences in dubai Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nemo, non officia iste, reiciendis minima vero aliquam architecto dolorum nulla necessitatibus et cumque veniam sed? Iusto rerum vero pariatur minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis provident similique placeat. Maiores iure assumenda eligendi quasi, reiciendis in fugiat eos, consequatur asperiores voluptas veniam nam deserunt cumque at.</p>
       
       
        <!-- imagesCarousel start-->
        <section>
          <div id="detailImgCarousel" class="owl-carousel owl-theme">
              <div class="item">
              <img src="./images/place-detail-01.jpg" alt="*">
              </div>
              <div class="item">
              <img src="./images/place-detail-02.jpg" alt="*">
              </div>
              <div class="item">
              <img src="./images/place-detail-01.jpg" alt="*">
              </div>
              <div class="item">
              <img src="./images/place-detail-02.jpg" alt="*">
              </div>
          </div>
      </section>
      <!-- imagesCarousel end-->  

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore odit quis vel dolor similique nobis delectus, recusandae impedit, accusantium porro est eum eos modi quae? Est dolorum aspernatur repellendus maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nemo exercitationem velit, cupiditate voluptatum voluptates ab officia eum necessitatibus dolorum asperiores, fuga sed explicabo, maiores quos ipsum facilis aperiam vel!</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed aut recusandae vitae expedita aspernatur, dolor voluptate fugiat dignissimos inventore vel cumque, molestiae qui debitis repellendus reprehenderit ducimus! A, excepturi adipisci</p>
      <hr>
      <div class="website-link"><a href="#"><i class="fa fa-globe"></i>branddubai.com</a></div>
      <div class="author-link">By<a href="#"><img class="author-img" src="images/john.png" alt="*"> The HUNTR</a></div>

      </div>  
    </div>

</section>
<!-- contentArea End -->



<!-- discoverNewsSection News Start -->    
<section class="discoverNewsSection greyBg newsFeatureSlide">
    <div class="container">
        <h3>Discover More</h3>
        <?php include('./places-carousel.php');?>

    </div>
</section>
<!-- discoverNewsSection News End -->  



<?php include('./footer.php'); ?>

<script>
    $(document).ready(function() {  
        $(".content-hide").hide();
        $(".show_hide").on("click", function () {
            var txt = $(this).prev(".content-hide").is(':visible') ? 'Read More' : 'Read Less';
            var arrowClass = $(this).prev(".content-hide").is(':visible') ? '<i class="fa fa-angle-down"></i>' : '<i class="fa fa-angle-up"></i>';
            $(this).html(txt + arrowClass);
            $(this).prev('.content-hide').slideToggle(200);
        });
    });
 </script>