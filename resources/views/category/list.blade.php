@foreach($categories as $category)
@include('category.view', ['categories' => $category])
@endforeach