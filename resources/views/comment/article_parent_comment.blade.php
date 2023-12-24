<div class="d-flex flex-column flex-lg-row mb-3">
    <div class="me-lg-3 mb-2 mb-lg-0">
        <a href="#"><img src="{{$comment->author->profile_photo_path}}"
                         class="rounded-circle" width="40" height="40" alt=""></a>
    </div>
    <div class="flex-fill">
        <a href="#" class="fw-semibold">{{$comment->author->name}}</a>
        <span class="fs-sm text-muted ms-3">{{$comment->created_at->diffForHumans()}}</span>

        <p>{!! $comment->body !!}</p>

        <ul class="list-inline mb-0">
            {{--            <li class="list-inline-item d-inline-flex align-items-center">--}}
            {{--                <a href="#" class="lh-1 me-2"><i class="ph-thumbs-up text-success"></i></a>--}}
            {{--                70--}}
            {{--            </li>--}}
            <li class="list-inline-item ms-2">
                <a href="#">Reply</a>
            </li>
            @if($comment->isAuthorized())
                <li class="list-inline-item">
                    <a href="#">Edit</a>
                </li>
            @endif
        </ul>
        @if($comment->replies->count() > 0)
            @foreach($comment->replies as $reply)
                @include('comment.article_child_comment',$reply)
            @endforeach
        @endif
    </div>
</div>
