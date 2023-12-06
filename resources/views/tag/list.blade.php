<div class="collapse show" id="commentsList">
    @foreach($tags as $tag)
    @include('tag.view', ['tags' => $tag])
    @endforeach
</div>