@extends('layouts.master')
@section('content')
    <!--begin::Wrapper-->
    <div class="row">
        @foreach($articles as $i => $article)
            @if($i % 4 == 0)
                @if ($i != 0)
    </div>
    @endif

    <div class="col-lg-4">
        @endif
        @include('article.article_card_main_view',$article)

        @endforeach
        @if($i % 4 != 0)
    </div>
    @endif
    </div>
@endsection
