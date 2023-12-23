<div class="card">
    <div class="card-body">
        <div class="card-img-actions mb-3">
            @if($article->heroImage)
                <img class="card-img img-fluid" src="{{$article->heroImage->path}}"
                     alt="{{$article->title}}">
            @endif
            <div class="card-img-actions-overlay card-img">
                <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                    <i class="ph-link"></i>
                </a>
            </div>
        </div>

        <h5 class="card-title pt-1 mb-1">
            <a href="{{route('article.show',$article)}}" class="text-body">{{$article->title}}</a>
        </h5>

        <ul class="list-inline list-inline-bullet text-muted mb-3">
            <li class="list-inline-item">By <a href="#">{{$article->author->name}}</a></li>
            <li class="list-inline-item">{{$article->created_at->format('F jS, Y')}}</li>
        </ul>

        {!! $article->excerpt() !!}
    </div>

    <div class="card-footer d-flex">
        <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i>{{$article->comments_count}}</a>
        <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i
                class="ph-arrow-circle-right ms-2"></i></a>
    </div>
</div>
