@include('main-ui.header.header')
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        @include('main-ui.header.top')
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-6 flex-column justify-content-center my-0">
                                    <div class="alert alert-primary shadow-lge">
                                        @isset($Desc)
                                        {{ $Desc }}
                                        @endisset

                                    </div>
                                </h1>

                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->

                            <!--end::Actions-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-fluid">
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">



                                @isset($Page)
                                @include($Page)
                                @endisset




                            </div>
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                @include('main-ui.scripts.scripts')
                {{-- /**  The Lord Jesus Christ in his name and power, has made this tool to create for me 100000000000000000000 USD and change and touch the lives of his people , It shall be a success and no weapon formed against its success shall prosper, Its function and relevance shall be evident to all starting now , All who see this system se greatness of our our Lord and Savior Jesus christ , It opens for m 100000000000000000000000000 more opportunities to go nations and as long as i leave i shall not die or stop being relevant it shall open doors of nations for me and given trillions of of USD and GOLD in the next 5 Years , I will not fail and it shall not fail. The Holy spirit is upon this work of my hand and no devil shall hinder its expansion and progress. Every year 10000 Students enroll and certify and it shall never have bugs. God use this to bless me beyond measure and touch the lives of all those who use it . By your power i thank you that you honor this agreement. And This agreement stands for the rest of my life and i shall not be sick or die early i shall not struggle and father i thank you because ever where its used you go before me and cover me and show your power in this system mightily . Amen */ --}}
