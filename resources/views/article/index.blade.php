@extends('layouts.master')
@section('content')
    <!--begin::Wrapper-->
    <div class="row">
        @if(collect($articlesOne,$articlesTwo,$articlesThree)->count() > 12)
            <div class="col-lg-4">
                @foreach($articlesOne as $article)
                    @include('article.article_card_main_view',$article)
                @endforeach
            </div>
            <div class="col-lg-4">
                @foreach($articlesTwo as $article)
                    @include('article.article_card_main_view',$article)
                @endforeach
            </div>
            <div class="col-lg-4">
                @foreach($articlesThree as $article)
                    @include('article.article_card_main_view',$article)
                @endforeach
            </div>
        @else
            @foreach(collect($articlesOne,$articlesTwo,$articlesThree) as $article)
                <div class="col-lg-4">
                    @include('article.article_card_main_view',$article)
                </div>
            @endforeach
        @endif
    </div>

@endsection
