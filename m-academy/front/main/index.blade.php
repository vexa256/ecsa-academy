@include('front.main.header.header')

<body class="body-home-one">
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('front.nav.nav')
        <!-- /Header -->


        @include('front.main.header.banner')


        @include('front.main.popular.popular')

        @include('front.main.trending.trending')

        @include('front.main.partners.partners')






        <section class="join-mentor">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  d-flex align-items-end">
                        <div class="join-mentor-img aos" data-aos="fade-up">
                            <img src="{{ asset('front-ui/assets/img/join.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="head-join-us aos" data-aos="fade-up">
                            <div class="join-mentor-detail">
                                <h2>Unlock Your Potential</h2>
                                <p class="join-sub-text">Experience a revolution in healthcare education. ECSA-HC offers
                                    cutting-edge courses designed to empower you with the knowledge and skills needed to
                                    excel in the dynamic healthcare industry.</p>
                                <div class="find-more">
                                    <a href="{{ route('OurCourseCatalogue') }}" class="btn bg-find">Start Learning
                                        Now</a>
                                </div>
                            </div>
                            <div class="best-course-detail">
                                <h2>Discover Your Path to Success</h2>
                                <p class="join-sub-text">From foundational principles to specialized techniques, our
                                    comprehensive courses cover every aspect of healthcare. Join ECSA-HC today and
                                    embark on a journey towards a rewarding and fulfilling career.</p>
                                <div class="find-more">
                                    <a href="{{ route('OurCourseCatalogue') }}" class="btn bg-find">Explore Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <!-- Student say about -->
        <section class="student-say-about testimonial-section">
            <div class="container">
                <div class="section-header section-head-one text-center about-space aos " data-aos="fade-up">
                    <h2>What our happy Students say about us</h2>
                    <p class="sub-title">They are highly qualified and trained in their areas</p>
                </div>
                <div class="col-lg-12 col-md-12 text-center d-flex justify-content-center">
                    <div id="myCarousel" class="carousel slide student-slide-testimoni aos " data-aos="fade-up"
                        data-bs-interval="5000" data-bs-ride="carousel">
                        <div class="student-bg-fix">
                            <img src="front-ui/assets/img/testi-bg-3.png" alt="">
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item testi-item say-us active" data-color="#fb9c9a"
                                data-img="img/testimonial/1.png">
                                <div class="student-group">
                                    <div class="student-about-img">
                                        <img src="front-ui/assets/img/user/user20.png" alt="">
                                    </div>
                                    <h3>Hannah Schmitt</h3>
                                    <span>Lead designer</span>
                                    <p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus
                                        nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in
                                        turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit
                                        cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna
                                        eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id
                                        augue sit cursus pellentesque enim </p>
                                    <div class="rating">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item testi-item say-us" data-color="#fbd39a"
                                data-img="img/testimonial/2.png">
                                <div class="student-group">
                                    <div class="student-about-img">
                                        <img src="front-ui/assets/img/user/user21.png" alt="">
                                    </div>
                                    <h3>John Doe</h3>
                                    <span>Web Developer</span>
                                    <p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus
                                        nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in
                                        turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit
                                        cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna
                                        eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id
                                        augue sit cursus pellentesque enim </p>
                                    <div class="rating">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item testi-item say-us" data-color="#9ab0fb"
                                data-img="img/testimonial/3.png">
                                <div class="student-group">
                                    <div class="student-about-img">
                                        <img src="front-ui/assets/img/user/user20.png" alt="">
                                    </div>
                                    <h3>Mark Huff</h3>
                                    <span>UI designer</span>
                                    <p class="say-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus
                                        nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in
                                        turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit
                                        cursus pellentesque enim Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna
                                        eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id
                                        augue sit cursus pellentesque enim </p>
                                    <div class="rating">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev student-testimonial-prev" type="button"
                            data-bs-target="#myCarousel" data-bs-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next student-testimonial-next" type="button"
                            data-bs-target="#myCarousel" data-bs-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Student say about --> --}}

        <!-- New Course subscribe -->
        <section class="new-course">
            <div class="container">
                <div class="new-course-background">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="new-course-img aos " data-aos="fade-up">
                                <img src="{{ asset('front-ui/assets/img/course.png') }}" alt="new course">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 d-flex align-items-center">
                            <div class="every-new-course aos " data-aos="fade-up">
                                <div class="new-course-text">
                                    <h1>For Get Update <br>Every New Courses</h1>
                                    <p class="page-sub-text ">Do not miss out!! , Get a monthly newsletter</p>
                                </div>
                                <div class="course-mail">
                                    <form action="#">
                                        <div class="input-group mb-3 subscribe-form">
                                            <input type="text" class="form-control course-text-bg"
                                                placeholder="Enter your mail">
                                            <a href="{{ route('OurCourseCatalogue') }}" class="btn bg-course-subscribe">
                                                Subscribe
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Course -->

        @include('front.footer.footer')
