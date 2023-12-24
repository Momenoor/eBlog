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
@push('scripts')
    <script src="{{asset('assets/js/vendor/editors/quill/quill.min.js')}}"></script>
    <script>
        let quillBasic = null;
        $(document).ready(function () {
            quillBasic = new Quill('.add-comment', {
                bounds: '.content-inner',
                placeholder: 'Please add your text here...',
                theme: 'snow'
            });
            quillBasic.on('text-change', function () {
                let html = quillBasic.root.innerHTML;
                $('#commentBody').val(html);
            });
        });
        document.addEventListener('turbo:submit-end', function () {
            quillBasic.root.innerHTML = '';
            $('#commentBody').val('');
        });

    </script>
@endpush

