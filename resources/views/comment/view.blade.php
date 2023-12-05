<div class="d-flex pt-6">
    <!--begin::Avatar-->
    <div class="symbol symbol-45px me-5">
        <img src="{{asset($comment->author->profile_picture)}}" alt="{{$comment->author->name}}">
    </div>
    <!--end::Avatar-->
    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mb-0">
            <!--begin::Name-->
            <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">{{$comment->author->name}}</a>
            <!--end::Name-->
            <!--begin::Date-->
            <span class="text-gray-500 fw-semibold fs-7 me-5">{{$comment->created_at->diffForHumans()}}</span>
            <!--end::Date-->
            <!--begin::Reply-->
            {{--<a href="#" class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>--}}
            <!--end::Reply-->
        </div>
        <!--end::Info-->
        <!--begin::Text-->
        <span class="text-gray-800 fs-7 fw-normal pt-1">{!!$comment->body!!}</span>
        <!--end::Text-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Comment-->