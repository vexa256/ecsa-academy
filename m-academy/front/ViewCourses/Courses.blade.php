<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">

        <div class="row align-items-center">
            <div class="col-md-8 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Course Catalog</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">ECSA-HC Elearning Academy
                    @isset($Filter)
                        | {{ $Filter }}
                    @endisset

                </h2>
            </div>
            <div class="col-md-4 col-12">
                <div class=" mt-4">
                    <nav>
                        {{ $DatabaseData->links('vendor.pagination.default') }} <!-- Use Bootstrap 4 pagination -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
{{-- <div class="content"> --}}
<div class="container-fluid">

    <div class="row">
        @include('front.ViewCourses.Sidebar')
        <div class="col-md-7 col-lg-8 col-xl-9">

            <div class="course-two-all aos aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    @isset($DatabaseData)
                        @foreach ($DatabaseData as $data)
                            <div class="col-lg-4 col-md-6">
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="search.html">
                                                <img class="img-fluid" alt="" style="height:30vh !important"
                                                    src="{{ asset($data->ThumbNail) }}">
                                            </a>
                                            <div class="course-info">
                                                <div class="rating rating-star">
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="d-inline-block average-rating rate-point">
                                                        Language : {{ $data->CourseLanguage }}
                                                        <span class="rate-star-point"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6 class="title"><a href="#">{{ $data->CourseName }}</a></h6>
                                            <div class="rating rating-star rating-two align-items-center">
                                                {{-- <div class="rating-img">
                                                        <img src="assets/img/user/user4.jpg" alt="">
                                                    </div> --}}
                                                <h5 style="font-size: 11px" class="text-danger">Category:
                                                    {{ ucwords(str_replace('-', ' ', $data->Category)) }}</h5>
                                                <div class="course-price mt-2">
                                                    <h6> Operator: {{ $data->CourseOperator }}</h6>
                                                </div>
                                            </div>
                                            <!-- Button added here -->
                                            <!-- About Course Button -->
                                            <a data-bs-toggle="modal" href="#Viewer{{ $data->id }}"
                                                style="text-decoration: none; pointer-events: auto; cursor: pointer;"
                                                class="float-left">
                                                <button type="button"
                                                    style="pointer-events: auto; cursor: pointer; opacity: 1; !important"
                                                    class="btn btn-rounded btn-primary">About Course</button>
                                            </a>

                                            <!-- Enroll Button -->
                                            <a data-url="{{ $data->CourseUrl }}" target="_blank"
                                                style="text-decoration: none; pointer-events: auto; cursor: pointer;"
                                                class="EmailSent float-left">
                                                <button type="button"
                                                    style="pointer-events: auto; cursor: pointer; opacity: 1; !important"
                                                    class="btn btn-rounded btn-primary">Enroll</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>

            </div>




        </div>
    </div>

</div>

{{-- </div> --}}
<!-- /Page Content -->
