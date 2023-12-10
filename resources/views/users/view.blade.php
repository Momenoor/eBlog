@extends('layouts.app')


@section('content')
<div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2" id="kt_toolbar">


    <!--begin::Page title-->
    <div class="d-flex flex-column align-items-start me-3 gap-1 gap-lg-2">
        <!--begin::Title-->
        <h1 class="d-flex text-gray-900 fw-bold m-0 fs-3">
            View User Details
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
                User Management </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">
                Users </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-500">
                View User </li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
    <!--begin::Actions-->


    <!--begin::Button-->

    <!--end::Actions-->
</div>

<div class="card-body">
    <!--begin::Summary-->


    <!--begin::User Info-->
    <div class="d-flex flex-center flex-column py-5">
        <!--begin::Avatar-->
        <div class="symbol symbol-100px symbol-circle mb-7">
            @if($user->profile_picture == null)
            <img src="{{asset('assets/media/avatars/blank.png')}}" alt="{{$user->name}}">
            @else
            <img src="{{asset($user->profile_picture)}}" alt="{{$user->name}}">
            @endif
        </div>
        <!--end::Avatar-->

        <!--begin::Name-->
        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">
            {{ $user->name }}
        </a>
        <!--end::Name-->

        <!--begin::Position-->
        <div class="mb-9">
            <!--begin::Badge-->
            <div class="badge badge-lg badge-light-primary d-inline">
                @if(!empty($user->getRoleNames()))

                @foreach($user->getRoleNames() as $v)

                <label class="badge badge-success">{{ $v }}</label>

                @endforeach

                @endif
            </div>
            <!--begin::Badge-->
        </div>
        <!--end::Position-->

        <!--begin::Info-->
        <!--begin::Info heading-->
        <div class="fw-bold mb-3">
            {{$user->email}}
            <span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true"
                data-bs-content="Number of support tickets assigned, closed and pending this week.">
                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span
                        class="path3"></span></i> </span>
        </div>
        <!--end::Info heading-->

        <div class="d-flex flex-wrap flex-center">
            <!--begin::Stats-->
            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                <div class="fs-4 fw-bold text-gray-700">
                    <span class="w-75px">243</span>
                    <i class="ki-duotone ki-arrow-up fs-3 text-success"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <div class="fw-semibold text-muted">Total</div>
            </div>
            <!--end::Stats-->

            <!--begin::Stats-->
            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                <div class="fs-4 fw-bold text-gray-700">
                    <span class="w-50px">5</span>
                    <i class="ki-duotone ki-arrow-down fs-3 text-danger"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <div class="fw-semibold text-muted">Article</div>
            </div>
            <!--end::Stats-->

            <!--begin::Stats-->
            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                <div class="fs-4 fw-bold text-gray-700">
                    <span class="w-50px">188</span>
                    <i class="ki-duotone ki-arrow-up fs-3 text-success"><span class="path1"></span><span
                            class="path2"></span></i>
                </div>
                <div class="fw-semibold text-muted">Open</div>
            </div>
            <!--end::Stats-->
        </div>
        <!--end::Info-->
    </div>
    <!--end::User Info-->
    <!--end::Summary-->

    <!--begin::Details toggle-->
    <div class="d-flex flex-stack fs-4 py-3">
        <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button"
            aria-expanded="false" aria-controls="kt_user_view_details">

        </div>

        <span data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Edit customer details"
            data-kt-initialized="1">
            <a href="{{route('users.index')}}" class="btn btn-sm btn-light-primary">
                Back
            </a>

        </span>



        <!--end::Button-->
    </div>
    <!--end::Details toggle-->


    <!--end::Details content-->
</div>



@endsection