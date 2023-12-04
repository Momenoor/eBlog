@extends('layouts.app')
@section('content')
<!--begin::Wrapper-->
<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">




    <!--begin::Wrapper container-->
    <div class="app-container  container-xxl d-flex flex-row flex-column-fluid ">



        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar  align-items-center justify-content-between py-4 py-lg-6 ">


                    <!--begin::Toolbar wrapper-->
                    <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2" id="kt_toolbar">


                        <!--begin::Page title-->
                        <div class="d-flex flex-column align-items-start me-3 gap-1 gap-lg-2">
                            <!--begin::Title-->
                            <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">
                                Article {{$article->title}}
                            </h1>
                            <!--end::Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    <a href="{{route('home')}}" class="text-gray-600 text-hover-primary">
                                        Home </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600">
                                    Article </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-500">
                                    Article {{$article->title}} </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2">

                            <!--begin::Button-
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                                Create </a>
                            -end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  flex-column-fluid ">

                    <!--begin::Post card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-20 pb-lg-0">
                            <!--begin::Layout-->
                            <div class="d-flex flex-column flex-xl-row">
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid me-xl-15">
                                    <!--begin::Post content-->
                                    <div class="mb-17">
                                        <!--begin::Wrapper-->
                                        <div class="mb-8">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap mb-6">
                                                <!--begin::Item-->
                                                <div class="me-9 my-1">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-element-11 text-primary fs-2 me-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                    <!--end::Icon-->

                                                    <!--begin::Label-->
                                                    <span
                                                        class="fw-bold text-gray-500">{{$article->submitted_at}}</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="my-1">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-message-text-2 text-primary fs-2 me-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                    <!--end::Icon-->

                                                    <!--begin::Label-->
                                                    <span class="fw-bold text-gray-500">24 Comments</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold">
                                                {{$article->title}}

                                                <span class="fw-bold text-muted fs-5 ps-1">5 mins read</span>
                                            </a>
                                            <!--end::Title-->

                                            <!--begin::Container-->
                                            <div class="overlay mt-8">
                                                <!--begin::Image-->
                                                <div
                                                    class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px">
                                                    @if($article->heroImage)
                                                    <img class="w-400px h-400px"
                                                        src="{{asset($article->heroImage->path)}}"
                                                        alt="{{$article->slug}}" />
                                                    @endif </a>
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Links-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <a href="/metronic8/demo28/../demo28/pages/about.html"
                                                        class="btn btn-primary">About Us</a>
                                                    <a href="/metronic8/demo28/../demo28/pages/careers/apply.html"
                                                        class="btn btn-light-primary ms-3">Join Us</a>
                                                </div>
                                                <!--end::Links-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Description-->
                                        <div class="fs-5 fw-semibold text-gray-600">
                                            <!--begin::Text-->
                                            <p class="mb-8">{!!$article->body!!}
                                                <a href="/metronic8/demo28/../demo28/pages/blog/post.html"
                                                    class="link-primary pe-1">Your Post</a>
                                            </p>
                                            <!--end::Text-->
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Block-->
                                        <div
                                            class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                                            <!--begin::Section-->
                                            <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-70px symbol-circle mb-2">
                                                    <img src="{{asset('assets/media/avatars/300-2.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Info-->
                                                <div class="mb-0">
                                                    <a href="#" class="text-gray-700 fw-bold text-hover-primary">
                                                        {{$article->author->name}}</a>

                                                    <span
                                                        class="text-gray-500 fs-7 fw-semibold d-block mt-1">Co-founder</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Text-->
                                            <div class="mb-0 fs-6">
                                                <div class="text-muted fw-semibold lh-lg mb-2">
                                                    First, a disclaimer – the entire process of writing a blog post
                                                    often takes more than a couple of hours, even if you can type
                                                    eighty words per minute and your writing skills are sharp writing a
                                                    blog post often takes more than a couple.
                                                </div>

                                                <a href="#" class="fw-semibold link-primary">Author’s Profile</a>
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Block-->

                                        <!--begin::Icons-->
                                        <div class="d-flex flex-center">
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="{{asset('assets/media/svg/brand-logos/facebook-4.svg')}}"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->

                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="{{asset('assets/media/svg/brand-logos/instagram-2-1.svg')}}"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->

                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="{{asset('assets/media/svg/brand-logos/github.svg')}}"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->

                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="{{asset('assets/media/svg/brand-logos/behance.svg')}}"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->

                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="{{asset('assets/media/svg/brand-logos/pinterest-p.svg')}}"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->

                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="{{asset('assets/media/svg/brand-logos/twitter.svg')}}"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->

                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img src="{{asset('assets/media/svg/brand-logos/dribbble-icon-1.svg')}}"
                                                    class="h-20px my-2" alt="" />
                                            </a>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Icons-->
                                    </div>
                                    <!--end::Post content-->

                                </div>
                                <!--end::Content-->

                                <!--begin::Sidebar-->
                                <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                                    <!--begin::Search blog-->
                                    <div class="mb-16">
                                        <h4 class="text-gray-900 mb-7">Search Article</h4>

                                        <!--begin::Input group-->
                                        <div class="position-relative">
                                            <i
                                                class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <input type="text" class="form-control form-control-solid ps-10"
                                                name="search" value="" placeholder="Search" />
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Search blog-->


                                    <!--begin::Catigories-->
                                    <div class="mb-16">
                                        <h4 class="text-gray-900 mb-7">Categories</h4>

                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                            <!--begin::Text-->
                                            <a href="#" class="text-muted text-hover-primary pe-2">
                                                {{$article->category->name}}</a>
                                            <!--end::Text-->

                                            <!--begin::Number-->
                                            <div class="m-0">
                                            </div>
                                            <!--end::Number-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->



                                    </div>
                                    <!--end::Catigories-->


                                    <!--begin::Recent posts-->
                                    <div class="m-0">
                                        <h4 class="text-gray-900 mb-7">Recent Article</h4>

                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack mb-7">
                                            <!--begin::Symbol-->

                                            <div class="symbol symbol-60px symbol-2by3 me-4">
                                                <div class="symbol-label">
                                                    @if($article->heroImage)
                                                    <img class="w-50px h-50px"
                                                        src="{{asset($article->heroImage->path)}}"
                                                        alt="{{$article->slug}}" />
                                                    @endif </a>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="m-0">
                                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">
                                                    {{$article->title}} </a>

                                                <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">
                                                    {!!$article->body!!} </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->

                                        <!--end::Item-->
                                        <!--begin::Item-->

                                    </div>
                                    <!--end::Recent posts-->
                                </div>
                                <!--end::Sidebar-->
                            </div>


                            @endsection