<div class="collapse show" id="commentsList">
    @foreach($categories as $category)
    @include('category.view', ['categories' => $category])
    @endforeach
</div>