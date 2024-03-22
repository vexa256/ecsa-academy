 <!-- Home Banner -->
 <section class="home-slide d-flex align-items-center">
     <div class="container">
         <div class="row ">
             <div class="col-md-6 d-flex align-items-center">
                 <div class="home-slide-face aos" data-aos="fade-up">
                     <div class="home-slide-text ">
                         <a href="{{ route('OurCourseCatalogue') }}" class="btn bg-stop-learn">Empower Yourself</a>
                         <h1>Unlock Your Potential <br>with <span>Online Learning</span></h1>
                         <p>Shape your future by acquiring new skills and knowledge online.</p>
                     </div>
                     <!-- Search -->
                     <div class="search-box">
                         <form action="{{ route('OurCourseCatalogue') }}">
                             <div class="form-group search-info location-search">
                                 <input type="text" class="form-control text-truncate"
                                     placeholder="Search Courses | Explore Topics, Certifications, etc">
                                 <a href="{{ route('OurCourseCatalogue') }}"
                                     class="btn bg-search search-btn align-items-center d-flex justify-content-center">Search
                                     now</a>
                             </div>
                         </form>
                     </div>
                     <!-- /Search -->
                 </div>
             </div>
             <div class="col-md-6 d-flex align-items-end">
                 <div class="girl-slide-img aos" data-aos="fade-up">
                     <img style="height:50% !important" src="{{ asset('front-ui/assets/img/GIRL.png') }}"
                         alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- /Home Banner -->
