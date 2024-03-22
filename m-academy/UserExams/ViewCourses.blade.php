<div class="col-xxl-6">
    <!--begin::Card widget 18-->
    <div class="card card-flush h-md-100">
        <!--begin::Body-->
        <div class="card-body py-9">
            <!--begin::Row-->
            <div class="row gx-9 h-100">
                <!--begin::Col-->
                @foreach($DatabaseData as $data)
                <div class="col-sm-6 mb-10 mb-sm-0">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100%; background-image: url('{{ asset($data->ThumbNail) }}')">
                    </div>

                    <!--end::Image-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column h-100">
                        <!--begin::Header-->
                        <div class="mb-7">
                            <!--begin::Headin-->
                            <div class="d-flex flex-stack mb-6">
                                <!--begin::Title-->
                                <div class="flex-shrink-0 me-5">
                                    <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                    <span class="text-gray-800 fs-7 fw-bold">{{ $data->CourseName }}</span>
                                </div>
                                <!--end::Title-->
                                <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">Activelly Supported</span>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Items-->
                            <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center me-5 me-xl-13">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                        <img src="https://ecsahc.org/wp-content/uploads/2021/10/ecsalogo.png" class="" alt="">
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <span class="fw-semibold text-gray-500 d-block fs-8">Instructor</span>
                                        <a href="https://ecsahc.org/" class="fw-bold text-gray-800 text-hover-primary fs-7">East, Central and Southern Africa Health Community (ECSA-HC)</a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                        <span class="symbol-label bg-success">
                                            <i class="ki-outline ki-abstract-41 fs-5 text-white"></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <span class="fw-semibold text-gray-500 d-block fs-8">Audience</span>
                                        <span class="fw-bold text-gray-800 fs-7"> Health Professionals</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="mb-6">
                            <!--begin::Text-->
                            <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">

                                <?php $truncatedCourseDetails = strlen($data->CourseDetails) > 100 ? substr($data->CourseDetails, 0, 100) . "..." : $data->CourseDetails;
                                ?>
                                {{ $truncatedCourseDetails }}
                            </span>
                            <!-- Button trigger modal -->
                            <div class="row mb-4 mt-5">
                                <a href="#Viewer{{ $data->id }}" class="btn btn-light-primary float-end" data-bs-toggle="modal">
                                    Read More
                                </a>
                            </div>
                            <!--end::Text-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                    <!--begin::Date-->
                                    <span class="fs-6 text-gray-700 fw-bold">3</span>
                                    <!--end::Date-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-500">Course Tests</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                    <!--begin::Number-->
                                    <span class="fs-6 text-gray-700 fw-bold">85%</span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-500">Certfication Score</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                        </div>

                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="d-flex flex-stack mt-auto bd-highlight">
                            <div class="d-flex align-items-center flex-wrap d-grid gap-2">

                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                        <div class="symbol-group symbol-hover flex-nowrap">
                                            <!--begin::ECSA-HC Logo-->
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="ECSA-HC" data-bs-original-title="ECSA-HC">
                                                <img alt="ECSA-HC" src="https://ecsahc.org/wp-content/uploads/2021/10/ecsalogo.png">
                                            </div>
                                            <!--end::ECSA-HC Logo-->
                                            <!--begin::World Bank Logo-->
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="World Bank" data-bs-original-title="World Bank">
                                                <img alt="World Bank" src="https://banner2.cleanpng.com/20180715/yvk/kisspng-world-bank-finance-financial-services-internationa-cognitive-5b4acb5c97be73.5011221415316283806216.jpg">
                                            </div>
                                            <!--end::World Bank Logo-->
                                            <!--begin::Republic of Malawi Logo-->
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Republic of Malawi" data-bs-original-title="Republic of Malawi">
                                                <img alt="Republic of Malawi" src="https://www.countryflags.com/wp-content/uploads/malawi-flag-png-large.png">
                                            </div>
                                            <!--end::Republic of Malawi Logo-->
                                            <!--begin::Republic of Rwanda Logo-->
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Republic of Rwanda" data-bs-original-title="Republic of Rwanda">
                                                <img alt="Republic of Rwanda" src="https://www.countryflags.com/wp-content/uploads/rwanda-flag-png-large.png">
                                            </div>
                                            <!--end::Republic of Rwanda Logo-->
                                            <!--begin::United Republic of Tanzania Logo-->
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="United Republic of Tanzania" data-bs-original-title="United Republic of Tanzania">
                                                <img alt="United Republic of Tanzania" src="https://www.countryflags.com/wp-content/uploads/tanzania-flag-png-large.png">
                                            </div>
                                            <!--end::United Republic of Tanzania Logo-->
                                        </div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <span class="fw-semibold text-gray-500 d-block fs-8">Partnership</span>
                                        <span class="fw-bold text-gray-800 fs-7"> Supporting Partners</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--begin::Partners-->

                            <!--end::Partners-->
                            <!--begin::Actions-->
                            <a href="apps/courses/course.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View
                                Course
                                <i class="ki-outline ki-exit-right-corner fs-4 ms-1"></i></a>
                            <!--end::Actions-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Col-->
                @endforeach
            </div>
            <!--end::Row-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card widget 18-->
</div>


@include('UserExams.ViewCoursePartners')
@include('main-ui.DescViewer', ['DisplayData' => $DatabaseData, 'DescColumn' => 'CourseDetails'])
