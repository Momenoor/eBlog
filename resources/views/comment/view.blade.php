<div class="card card-bordered w-100">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Wrapper-->
        <div class="w-100 d-flex flex-stack mb-8">
            <!--begin::Container-->
            <div class="d-flex align-items-center f">
                <!--begin::Author-->
                <div class="symbol symbol-50px me-5">
                    @if($comment->author->profile_picture == null)
                    <img src="{{asset('assets/media/avatars/blank.png')}}" alt="{{$comment->author->name}}">
                    @else
                    <img src="{{asset($comment->author->profile_picture)}}" alt="{{$comment->author->name}}">
                    @endif
                </div>
                <!--end::Author-->

                <!--begin::Info-->
                <div class="d-flex flex-column fw-semibold fs-5 text-gray-600 text-gray-900">
                    <!--begin::Text-->
                    <div class="d-flex align-items-center">
                        <!--begin::Username-->
                        <a href="/metronic8/demo28/../demo28/pages/user-profile/overview.html"
                            class="text-gray-800 fw-bold text-hover-primary fs-5 me-3">{{$comment->author->name}}</a>
                        <!--end::Username-->

                        <span class="m-0"></span>
                    </div>
                    <!--end::Text-->

                    <!--begin::Date-->
                    <span class="text-muted fw-semibold fs-6">{{$comment->created_at->diffForHumans()}}</span>
                    <!--end::Date-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Container-->

            <!--begin::Actions-->
            <div class="m-0">

                <button class="btn btn-color-gray-500 btn-active-color-primary p-0 fw-bold">Reply</button>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Desc-->
        <p class="text-gray-800 fs-7 fw-normal pt-1">
            {!!$comment->body!!}

        </p>
        <!--end::Desc-->
    </div>
    <!--end::Body-->
</div>