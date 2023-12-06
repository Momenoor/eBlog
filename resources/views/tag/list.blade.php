@foreach($tags as $tag)
@include('tag.view', ['tags' => $tag])
@endforeach