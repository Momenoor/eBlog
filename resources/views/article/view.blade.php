@extends('layouts.app')
@section('content')
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
                                    <span class="fw-bold text-gray-500">{{$article->created_at->diffForHumans()}}</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="me-9 my-1">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-briefcase text-primary fs-2 me-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <span class="fw-bold text-gray-500">{{$article->category->name}}</span>
                                    <!--begin::Label-->
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
                                    <span class="fw-bold text-gray-500">{{$article->comments_count}} Comments</span>
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
                            @if ($article->heroImage()->exists())
                            <div class="mt-8">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                                    style="background-image:url('{{asset($article->heroImage->path)}}')">
                                </div>
                                <!--end::Image-->
                            </div>
                            @endif
                            <!--end::Container-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold text-gray-600">
                            <!--begin::Text-->
                            <p class="mb-8">
                                {!! $article->body !!}
                            </p>
                            <!--end::Text-->
                        </div>
                        <!--end::Description-->
                        @can(' article-edit')
                        <div class="d-flex justify-content-end">
                            @if ($isAuthor)
                            <a class="btn btn-sm btn-primary" href="{{ route('article.edit', $article->id) }}">Edit
                                Article</a>
                            @endif
                        </div>
                        @endcan
                        <!--begin::Block-->
                        <div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                            <!--begin::Section-->
                            <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-70px symbol-circle mb-2">
                                    @if($article->author->profile_photo_path == null)
                                    <img src="{{asset('assets/media/avatars/blank.png')}}"
                                        alt="{{$article->author->name}}">
                                    @else
                                    <img src="{{asset($article->author->profile_photo_path)}}"
                                        alt="{{$article->author->name}}">
                                    @endif
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Info-->
                                <div class="mb-0">
                                    <a href="{{route('user.show', $article->author)}}"
                                        class="text-gray-700 fw-bold text-hover-primary">{{$article->author->name}}</a>
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold d-block mt-1">{{optional($article->author->role)->name}}</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Text-->
                            <div class="mb-0 fs-6">
                                <div class="text-muted fw-semibold lh-lg mb-2">
                                    {{$article->author->bio}}
                                </div>

                                <a href="{{route('user.show', $article->author)}}"
                                    class="fw-semibold link-primary">Author’s Profile</a>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                        @foreach ($article->tags as $tag)
                        <a href="{{route('tag.show', $tag)}}"
                            class="badge badge-primary me-2 mb-2 fw-bold  px-4 py-3">{{$tag->name}}</a>
                        @endforeach
                        <!--begin::Icons-->
                        <div class="d-flex flex-center">
                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{asset('assets/media/svg/brand-logos/facebook-4.svg')}}" class="h-20px my-2"
                                    alt="" />
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
                                <img src="{{asset('assets/media/svg/brand-logos/github.svg')}}" class="h-20px my-2"
                                    alt="" />
                            </a>
                            <!--end::Icon-->

                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{asset('assets/media/svg/brand-logos/behance.svg')}}" class="h-20px my-2"
                                    alt="" />
                            </a>
                            <!--end::Icon-->

                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{asset('assets/media/svg/brand-logos/pinterest-p.svg')}}" class="h-20px my-2"
                                    alt="" />
                            </a>
                            <!--end::Icon-->

                            <!--begin::Icon-->
                            <a href="#" class="mx-4">
                                <img src="{{asset('assets/media/svg/brand-logos/twitter.svg')}}" class="h-20px my-2"
                                    alt="" />
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
                    <div class="separator separator-dashed my-10"></div>
                    <!--end::Post content-->
                    <h5>Comments</h5>
                    @include('comment.list')
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @endif
                    <div>
                        @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <form method="POST" class="mt-10 mb-5" action="{{route('article.create.comment',$article)}}">
                        @csrf
                        <!--begin::Editor-->
                        <div data-control="quill" class="min-h-200px mb-2 @error('body') is-invalid @enderror">
                            {!! old('body') !!}
                        </div>
                        <input id="body" type="hidden" class="" name="body" value="{!! old('body') !!}" />
                        <!--end::Editor-->
                        @error('body')
                        <span class="text-danger">{{$errors->first('body')}}</span>
                        @enderror
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary">
                                <span class="">Save Comment </span>
                            </button>
                        </div>

                    </form>
                    <!--begin::Post content-->
                    <!--end::Post content-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                    <!--begin::Search blog-->
                    <div class="mb-16">
                        <h4 class="text-gray-900 mb-7">Search Blog</h4>

                        <!--begin::Input group-->
                        <div class="position-relative">
                            <i
                                class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <input type="text" class="form-control form-control-solid ps-10" name="search" value=""
                                placeholder="Search" />
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Search blog-->


                    <!--begin::Catigories-->
                    <div class="mb-16">
                        <h4 class="text-gray-900 mb-7">Categories</h4>
                        @foreach($categories as $category)
                        <!--begin::Item-->
                        <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                            <!--begin::Text-->
                            <a href="{{route('category.show',$category)}}" class="text-muted text-hover-primary pe-2">
                                {{$category->name}} </a>
                            <!--end::Text-->

                            <!--begin::Number-->
                            <div class="m-0">
                                {{$category->articles_count}}
                            </div>
                            <!--end::Number-->
                        </div>
                        <!--end::Item-->
                        @endforeach
                    </div>
                    <!--end::Catigories-->


                    <!--begin::Recent posts-->
                    <div class="m-0">
                        <h4 class="text-gray-900 mb-7">Recent Posts</h4>
                        @foreach($recentArticles as $article)
                        <!--begin::Item-->
                        <div class="d-flex mb-7">
                            <!--begin::Symbol-->

                            <div class="symbol symbol-60px symbol-2by3 me-4">
                                <div class="symbol-label"
                                    style="background-image: url('{{asset($article->heroImage->path??null)}}')"></div>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="m-0">
                                <a href="{{route('article.show',$article)}}"
                                    class="text-gray-900 fw-bold text-hover-primary fs-6">{{$article->title}}</a>

                                <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">{!! $article->excerpt()
                                    !!}</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        @endforeach
                        <!--end::Item-->
                    </div>
                    <!--end::Recent posts-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
    </div>


    @endsection
    @push('scripts')
    <script>
        $(document).ready(function () {
                    // Date picker
                    //Text Editor
                    var quill = new Quill('[data-control="quill"]', {
                        modules: {
                            toolbar: [
                                [{
                                    header: [1, 2, 3, false]
                                }],
                                ['bold', 'italic', 'underline'],
                                [{'list': 'ordered'}, {'list': 'bullet'}],
                                [{'direction': 'rtl'}],
                                [{'color': []}, {'background': []}],          // dropdown with defau
                                [{'font': []}],
                                ['image', 'code-block'],
                            ]
                        },
                        placeholder: 'Type your text here...',
                        theme: 'snow' // or 'bubble'
                    });
                    quill.on('text-change', function (delta, oldDelta, source) {
                        $('#body').val(quill.root.innerHTML);
                    });
                    document.addEventListener('turbo:submit-end', function () {
                        quill.root.innerHTML = '';
                        $('#body').val('');
                    });
                });
    </script>
    @endpush