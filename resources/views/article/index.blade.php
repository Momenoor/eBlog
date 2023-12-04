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
                                Article Home
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
                                    Article Home </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-2">
                            <!--begin::Button-->
                            <a href="{{route('article.create')}}" class="btn btn-sm btn-primary">
                                Add Article
                            </a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar wrapper-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  flex-column-fluid ">

                    <!--begin::Home card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-20">
                            <!--begin::Section-->
                            <div class="mb-17">
                                <!--begin::Title-->
                                <h3 class="text-gray-900 mb-7">Latest Articles, News & Updates</h3>
                                <!--end::Title-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9"></div>
                                <!--end::Separator-->
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Feature post-->
                                        <div
                                            class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
                                            <!--begin::Video-->
                                            <div class="mb-3">
                                                <iframe class="embed-responsive-item card-rounded h-275px w-100"
                                                    src="https://www.youtube.com/embed/TWdDZYNqlg4"
                                                    allowfullscreen=""></iframe>
                                            </div>
                                            <!--end::Video-->
                                            <!--begin::Body-->
                                            <div class="mb-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-2 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    <br />
                                                </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-4">
                                                    We’ve been focused on making the from v4 to v5 but we have
                                                    also not been afraid to step away been focused on from v4 to
                                                    v5 speaker approachable making focused a but from a step away afraid
                                                    to step
                                                    away been focused
                                                    Writing a blog post is a little like driving; you can study the
                                                    highway code (or read articles telling you how to write a blog
                                                    post) for months, but nothing can prepare you for the real
                                                    thing like getting behind the wheel
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3">
                                                        <img alt=""
                                                            src="/metronic8/demo28/assets/media/avatars/300-9.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold">
                                                        <a href="/metronic8/demo28/../demo28/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">David Morgan</a>

                                                        <span class="text-muted">on Apr 27 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Feature post-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 justify-content-between d-flex flex-column">
                                        <!--begin::Post-->
                                        <div class="ps-lg-6 mb-16 mt-md-0 mt-17">
                                            <!--begin::Body-->
                                            <div class="mb-6">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                    Bootstrap Admin Theme - How To Get Started Tutorial. Create
                                                    customizable applications </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">
                                                    We’ve been focused on making the from v4 to v5 a
                                                    but we’ve also not been afraid to step away been
                                                    focused on from v4 to v5 speaker approachable
                                                    making focused
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3">
                                                        <img src="/metronic8/demo28/assets/media/avatars/300-20.jpg"
                                                            class="" alt="" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold">
                                                        <a href="/metronic8/demo28/../demo28/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">Jane Miller</a>

                                                        <span class="text-muted">on Apr 27 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-info fw-bold my-2">BLOG</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Post-->


                                        <!--begin::Post-->
                                        <div class="ps-lg-6 mb-16">
                                            <!--begin::Body-->
                                            <div class="mb-6">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                    Angular Admin Theme - How To Get Started Tutorial. </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">

                                                    We’ve been focused on making the from v4 to v5 a
                                                    but we’ve also not been afraid to step away
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3">
                                                        <img src="/metronic8/demo28/assets/media/avatars/300-9.jpg"
                                                            class="" alt="" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold">
                                                        <a href="/metronic8/demo28/../demo28/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">Cris Morgan</a>

                                                        <span class="text-muted">on Mar 14 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-primary fw-bold my-2">TUTORIALS</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Post-->


                                        <!--begin::Post-->
                                        <div class="ps-lg-6 ">
                                            <!--begin::Body-->
                                            <div class="mb-6">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">
                                                    React Admin Theme - How To Get Started Tutorial. Create best
                                                    applications </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">

                                                    We’ve been focused on making the from v4 to v5
                                                    but we’ve also not been afraid to step away been focused
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-stack flex-wrap">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center pe-2">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-3">
                                                        <img src="/metronic8/demo28/assets/media/avatars/300-19.jpg"
                                                            class="" alt="" />
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Text-->
                                                    <div class="fs-5 fw-bold">
                                                        <a href="/metronic8/demo28/../demo28/pages/user-profile/overview.html"
                                                            class="text-gray-700 text-hover-primary">Cris Morgan</a>

                                                        <span class="text-muted">on Mar 14 2021</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Label-->
                                                <span class="badge badge-light-warning fw-bold my-2">NEWS</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Post-->


                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--begin::Row-->
                            </div>
                            <!--end::Section-->


                            <!--begin::Section-->
                            <div class="mb-17">
                                <!--begin::Content-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900">Liat Article</h3>
                                    <!--end::Title-->

                                    <!--begin::Link-->
                                    <a href="#" class="fs-6 fw-semibold link-primary">
                                        View All Article
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9"></div>
                                <!--end::Separator-->

                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    @foreach($articles as $article)

                                    <div class="col-md-4">

                                        <!--begin::Feature post-->
                                        <div class="card-xl-stretch me-md-6">
                                            <!--begin::Image-->
                                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                                                data-fslightbox="lightbox-video-tutorials"
                                                href="https://www.youtube.com/embed/btornGtLwIo">
                                                @if($article->heroImage)
                                                <img class="w-250px h-250px" src="{{asset($article->heroImage->path)}}"
                                                    alt="{{$article->slug}}" />
                                                @endif
                                            </a>
                                            <!--end::Image-->

                                            <!--begin::Body-->
                                            <div class="m-0">
                                                <!--begin::Title-->
                                                <a href="{{route('article.show',$article)}}"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    {{$article->title}} </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">
                                                    {!!$article->body!!} </div>
                                                <!--end::Text-->

                                                <!--begin::Content-->
                                                <div class="fs-6 fw-bold">
                                                    <!--begin::Author-->
                                                    <a href="#"
                                                        class="text-gray-700 text-hover-primary">{{$article->author->name}}</a>
                                                    <!--end::Author-->

                                                    <!--begin::Date-->
                                                    <span class="text-muted">on {{$article->submitted_at}}</span>
                                                    <!--end::Date-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Feature post-->
                                    </div>
                                    @endforeach

                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Section-->
                            <div class="mb-17">
                                <!--begin::Content-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900">Hottest Bundles</h3>
                                    <!--end::Title-->

                                    <!--begin::Link-->
                                    <a href="#" class="fs-6 fw-semibold link-primary">
                                        View All Offers
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9"></div>
                                <!--end::Separator-->

                                <!--begin::Row-->
                                <div class="row g-10">
                                    <!--begin::Col-->
                                    <div class="col-md-4">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch me-md-6">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="{{asset('assets/media/stock/600x400/img-23.jpg')}}">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('{{asset('assets/media/stock/600x400/img-23.jpg')}}')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-2x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->

                                            <!--begin::Body-->
                                            <div class="mt-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    25 Products Mega Bundle with 50% off discount amazing </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">
                                                    We’ve been focused on making a the from also not been eye </div>
                                                <!--end::Text-->

                                                <!--begin::Text-->
                                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                                        <span class="fs-6 fw-semibold text-gray-500">$</span>

                                                        28 </span>
                                                    <!--end::Label-->

                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->



                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-4">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch mx-md-3">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="{{asset('assets/media/stock/600x600/img-14.jpg')}}">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('{{asset('assets/media/stock/600x600/img-14.jpg')}}')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-2x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->

                                            <!--begin::Body-->
                                            <div class="mt-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    25 Products Mega Bundle with 50% off discount amazing </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">
                                                    We’ve been focused on making a the from also not been eye </div>
                                                <!--end::Text-->

                                                <!--begin::Text-->
                                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                                        <span class="fs-6 fw-semibold text-gray-500">$</span>

                                                        27 </span>
                                                    <!--end::Label-->

                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-4">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch ms-md-6">
                                            <!--begin::Overlay-->
                                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                                href="{{asset('media/stock/600x400/img-71.jpg')}}">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                    style="background-image:url('{{asset('assets/media/stock/600x400/img-71.jpg')}}')">
                                                </div>
                                                <!--end::Image-->

                                                <!--begin::Action-->
                                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                    <i class="ki-duotone ki-eye fs-2x text-white"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </div>
                                                <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->

                                            <!--begin::Body-->
                                            <div class="mt-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">
                                                    25 Products Mega Bundle with 50% off discount amazing </a>
                                                <!--end::Title-->

                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">
                                                    We’ve been focused on making a the from also not been eye </div>
                                                <!--end::Text-->

                                                <!--begin::Text-->
                                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <span
                                                        class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                                        <span class="fs-6 fw-semibold text-gray-500">$</span>

                                                        25 </span>
                                                    <!--end::Label-->

                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->



                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->




                            <!--begin::latest instagram-->
                            <div class="">
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Content-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Title-->
                                        <h3 class="text-gray-900">Latest Instagram Posts</h3>
                                        <!--end::Title-->

                                        <!--begin::Link-->
                                        <a href="#" class="fs-6 fw-semibold link-primary">
                                            View Instagram
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Content-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Row-->
                                <div class="row g-10 row-cols-2 row-cols-lg-5">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{asset('assets/media/stock/900x600/16.jpg')}}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{asset('assets/media/stock/900x600/16.jpg')}}')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{asset('assets/media/stock/900x600/13.jpg')}}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{asset('assets/media/stock/900x600/13.jpg')}}')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{asset('assets/media/stock/900x600/19.jpg')}}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{asset('assets/media/stock/900x600/19.jpg')}}')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{asset('assets/media/stock/900x600/15.jpg')}}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{asset('assets/media/stock/900x600/15.jpg')}}')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                            href="{{asset('assets/media/stock/900x600/12.jpg')}}">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{asset('assets/media/stock/900x600/12.jpg')}}')">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="ki-duotone ki-eye fs-3x text-white"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--begin::Row-->
                            </div>
                            <!--end::latest instagram-->



                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Home card-->


                </div>
                <!--end::Content-->

            </div>







            @endsection