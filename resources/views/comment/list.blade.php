<div class="collapse show" id="commentsList">
    @foreach($article->comments as $comment)
        @include('comment.view', ['comment' => $comment])
    @endforeach
</div>
