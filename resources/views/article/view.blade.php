@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <div class="content-inner">
            <!-- Content area -->
            <div class="content">

                <!-- Inner container -->
                <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

                    <!-- Left content -->
                    <div class="flex-1 order-2 order-lg-1">

                        <!-- Post -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="mb-3 text-center">
                                        <a href="#" class="d-inline-block">
                                            <img src="{{$article->heroImage->path}}" class="img-fluid rounded"
                                                 alt="{{$article->title}}">
                                        </a>
                                    </div>

                                    <h3 class="card-title pt-2 mb-1">
                                        <a href="#" class="text-body">{{$article->title}}</a>
                                    </h3>

                                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                                        <li class="list-inline-item">By <a href="#">{{$article->author->name}}</a></li>
                                        <li class="list-inline-item">{{$article->created_at->format('F j, Y')}}</li>
                                        <li class="list-inline-item"><a href="#">{{$article->all_comments_count}}
                                                comments</a></li>
                                        {{--                                        <li class="list-inline-item"><a href="#"><i class="ph-heart text-pink me-1"></i>--}}
                                        {{--                                                281</a></li>--}}
                                    </ul>
                                    <div class="mb-3">
                                        {!! $article->body !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /post -->


                        <!-- About author -->
                        <div class="card">
                            <div class="card-header d-sm-flex border-bottom-0 pb-0">
                                <h5 class="mb-0">About the author</h5>

                                <div class="d-inline-flex align-items-center ms-sm-auto">
                                    <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Google Drive"><i
                                            class="ph-google-logo"></i></a>
                                    <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Twitter"><i
                                            class="ph-twitter-logo"></i></a>
                                    <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Github"><i
                                            class="ph-github-logo"></i></a>
                                    <a href="#" class="text-body ms-2" data-bs-popup="tooltip" title="Linked In"><i
                                            class="ph-linkedin-logo"></i></a>
                                </div>
                            </div>

                            <div class="card-body d-flex flex-column flex-lg-row">
                                <div class="me-lg-3 mb-2 mb-lg-0">
                                    <a href="#">
                                        <img src="{{asset('/images/demo/users/face1.jpg')}}" class="rounded-circle"
                                             width="40" height="40" alt="">
                                    </a>
                                </div>

                                <div class="flex-fill">
                                    <h6 class="mb-1">{{$article->author->name}}r</h6>
                                    <p>{{$article->author->bio}}</p>

                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="{{route('user.show',$article->author)}}">Author
                                                profile</a></li>
                                        <li class="list-inline-item"><a href="#">All posts
                                                by {{$article->author->name}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /about author -->


                        <!-- Comments -->
                        <div class="card">
                            <div class="card-header d-sm-flex">
                                <h6 class="mb-0">Discussion</h6>
                                <ul class="list-inline text-muted mb-0 ms-sm-auto">
                                    <li class="list-inline-item">{{$article->all_comments_count}} comments</li>
                                    {{--                                    <li class="list-inline-item">75 pending review</li>--}}
                                </ul>
                            </div>

                            <div class="card-body" id="commentsList">
                                @if($article->comments_count>0)
                                    @foreach($article->comments as $comment)
                                        @include('comment.article_comment',$comment)
                                    @endforeach
                                @endif
                            </div>

                            <div id="add-comment" class="border-top border-bottom">
                                @auth()
                                    @include('comment.article_add_comment')
                                @else
                                    <div class="alert alert-info m-4">
                                        <a href="{{route('login',['redirect'=>request()->url().'#add-comment'])}}">Login</a> to add comment
                                    </div>
                                @endauth
                            </div>
                        </div>
                        <!-- /comments -->

                    </div>
                    <!-- /left content -->


                    <!-- Right sidebar component -->
                    <div
                        class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">

                        <!-- Sidebar content -->
                        <div class="sidebar-content">

                            <!-- Search -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Search articles</span>
                                </div>

                                <div class="sidebar-section-body">
                                    <div class="form-control-feedback form-control-feedback-end">
                                        <input type="search" class="form-control" placeholder="Search...">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-magnifying-glass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /search -->


                            <!-- Categories -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Categories</span>
                                </div>

                                <div class="nav nav-sidebar">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-file-text me-2"></i>
                                            Posts
                                            <span class="text-muted fs-sm fw-normal ms-auto">12</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-file-video me-2"></i>
                                            Video
                                            <span class="text-muted fs-sm fw-normal ms-auto">26</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-file-image me-2"></i>
                                            Images
                                            <span class="text-muted fs-sm fw-normal ms-auto">83</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-files me-2"></i>
                                            Articles
                                            <span class="text-muted fs-sm fw-normal ms-auto">43</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-camera me-2"></i>
                                            Photography
                                            <span class="text-muted fs-sm fw-normal ms-auto">72</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-books me-2"></i>
                                            Books
                                            <span class="text-muted fs-sm fw-normal ms-auto">97</span>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <!-- /categories -->


                            <!-- Share -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Share</span>
                                </div>

                                <div class="sidebar-section-body pb-0">
                                    <ul class="list-inline text-center mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-primary btn-icon btn-lg rounded-pill mb-3">
                                                <i class="ph-facebook-logo"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-danger btn-icon btn-lg rounded-pill mb-3">
                                                <i class="ph-youtube-logo"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-info btn-icon btn-lg rounded-pill mb-3">
                                                <i class="ph-twitter-logo"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-warning btn-icon btn-lg rounded-pill mb-3">
                                                <i class="ph-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /share -->


                            <!-- Recent comments -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Recent comments</span>
                                </div>

                                <div class="sidebar-section-body">
                                    <li class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face10.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">James Alexander</a>
                                            <div class="text-muted">Who knows, maybe that...</div>
                                        </div>
                                    </li>

                                    <li class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face3.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Margo Baker</a>
                                            <div class="text-muted">That was something he...</div>
                                        </div>
                                    </li>

                                    <li class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face24.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                            <div class="text-muted">But that would be...</div>
                                        </div>
                                    </li>

                                    <li class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face4.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Beatrix Diaz</a>
                                            <div class="text-muted">What a strenuous career...</div>
                                        </div>
                                    </li>

                                    <li class="d-flex">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face25.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Richard Vango</a>
                                            <div class="text-muted">Other travelling salesmen...</div>
                                        </div>
                                    </li>
                                </div>
                            </div>
                            <!-- /recent comments -->


                            <!-- Photos from Flickr -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Photos from Flickr</span>
                                </div>

                                <div class="sidebar-section-body">
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="card-img-actions">
                                                <a href="../../../assets/images/demo/flat/8.png" class="text-white"
                                                   data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded-top-start"
                                                         src="../../../assets/images/demo/flat/8.png" alt="">
                                                    <span class="card-img-actions-overlay rounded-top-start">
															<i class="ph-plus"></i>
														</span>
                                                </a>
                                            </div>

                                            <div class="card-img-actions">
                                                <a href="../../../assets/images/demo/flat/4.png" class="text-white"
                                                   data-bs-popup="lightbox">
                                                    <img class="img-fluid" src="../../../assets/images/demo/flat/4.png"
                                                         alt="">
                                                    <span class="card-img-actions-overlay">
															<i class="ph-plus"></i>
														</span>
                                                </a>
                                            </div>

                                            <div class="card-img-actions">
                                                <a href="../../../assets/images/demo/flat/5.png" class="text-white"
                                                   data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded-bottom-start"
                                                         src="../../../assets/images/demo/flat/5.png" alt="">
                                                    <span class="card-img-actions-overlay rounded-bottom-start">
															<i class="ph-plus"></i>
														</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card-img-actions">
                                                <a href="../../../assets/images/demo/flat/6.png" class="text-white"
                                                   data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded-top-end"
                                                         src="../../../assets/images/demo/flat/6.png" alt="">
                                                    <span class="card-img-actions-overlay rounded-top-end">
															<i class="ph-plus"></i>
														</span>
                                                </a>
                                            </div>

                                            <div class="card-img-actions">
                                                <a href="../../../assets/images/demo/flat/7.png" class="text-white"
                                                   data-bs-popup="lightbox">
                                                    <img class="img-fluid" src="../../../assets/images/demo/flat/7.png"
                                                         alt="">
                                                    <span class="card-img-actions-overlay">
															<i class="ph-plus"></i>
														</span>
                                                </a>
                                            </div>

                                            <div class="card-img-actions">
                                                <a href="../../../assets/images/demo/flat/8.png" class="text-white"
                                                   data-bs-popup="lightbox">
                                                    <img class="img-fluid rounded-bottom-end"
                                                         src="../../../assets/images/demo/flat/8.png" alt="">
                                                    <span class="card-img-actions-overlay rounded-bottom-end">
															<i class="ph-plus"></i>
														</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /photos from Flickr -->


                            <!-- Online users -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Online users</span>
                                </div>

                                <div class="sidebar-section-body">
                                    <div class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face1.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">James Alexander</a>
                                            <div class="fs-sm text-muted">Santa Ana, CA.</div>
                                        </div>

                                        <div class="align-self-center">
                                            <div class="bg-success border-success rounded-pill p-1"></div>
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face2.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Jeremy Victorino</a>
                                            <div class="fs-sm text-muted">Dowagiac, MI.</div>
                                        </div>

                                        <div class="align-self-center">
                                            <div class="bg-danger border-danger rounded-pill p-1"></div>
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face3.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Margo Baker</a>
                                            <div class="fs-sm text-muted">Kasaan, AK.</div>
                                        </div>

                                        <div class="align-self-center">
                                            <div class="bg-success border-success rounded-pill p-1"></div>
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face4.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Beatrix Diaz</a>
                                            <div class="fs-sm text-muted">Neenah, WI.</div>
                                        </div>

                                        <div class="align-self-center">
                                            <div class="bg-warning border-warning rounded-pill p-1"></div>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="me-3">
                                            <img src="../../../assets/images/demo/users/face5.jpg"
                                                 class="rounded-circle" width="40" height="40" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <a href="#" class="fw-semibold">Richard Vango</a>
                                            <div class="fs-sm text-muted">Grapevine, TX.</div>
                                        </div>

                                        <div class="align-self-center">
                                            <div class="bg-secondary border-secondary rounded-pill p-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /online users -->


                            <!-- Tags -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Tags</span>
                                </div>

                                <div class="sidebar-section-body pb-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-primary rounded-start-0 mb-2">Audio</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-warning rounded-start-0 mb-2">Gallery</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-indigo rounded-start-0 mb-2">Image</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-teal rounded-start-0 mb-2">Music</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-pink rounded-start-0 mb-2">Blog</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-purple rounded-start-0 mb-2">Learn</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-primary rounded-start-0 mb-2">Youtube</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-secondary rounded-start-0 mb-2">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-warning rounded-start-0 mb-2">Eugene</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <span
                                                    class="badge bg-light border-start border-width-3 text-body border-indigo rounded-start-0 mb-2">Limitless</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /tags -->


                            <!-- Archive -->
                            <div class="card">
                                <div class="sidebar-section-header border-bottom">
                                    <span class="fw-semibold">Archive</span>
                                </div>

                                <div class="nav nav-sidebar">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">January 2018</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">December 2017</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">November 2017</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">October 2017</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">September 2017</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">August 2017</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">July 2017</a>
                                    </li>
                                </div>
                            </div>
                            <!-- /archive -->

                        </div>
                        <!-- /sidebar content -->

                    </div>
                    <!-- /right sidebar component -->

                </div>
                <!-- /inner container -->
            </div>
        </div>
    </div>
@endsection
