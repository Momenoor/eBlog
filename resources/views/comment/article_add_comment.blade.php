<form action="{{route('article.create.comment',$article)}}" method="post" data-turbo="true">
    @csrf
    <div class="add-comment">
        {{old('body')}}
    </div>
    <input type="hidden" name="body" id="commentBody" value="{{old('body')}}">
    <div class="card-body text-end border-top">
        <button type="submit" class="btn btn-primary">
            Submit
            <i class="ph-paper-plane-tilt ms-2"></i>
        </button>
    </div>
</form>


