@extends('layouts.master')
@section('content')


<!-- Content area -->
<div class="content ">
    <!-- Media library -->
    <div class="card ">
        <div class="card">
            <h4 class="mb-0 ">List Comments </h4>
        </div>

        <table class="table media-library ">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Article</th>
                    <th>Body</th>
                    <th>Date</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}} </td>
                    <td>{{$comment->article->title}} </td>
                    <td>{{$comment->body}} </td>

                    <td>{{$comment->created_at->format('F jS, Y')}}</td>

                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{route('comment.edit',$comment)}}" class="dropdown-item">
                                        <i class="ph-pencil me-2"></i>
                                        Edit file
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('comment.destroy',$comment)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item">
                                            <i class="ph-trash me-2"></i>
                                            Move to trash
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <!-- /media library -->

</div>
<!-- /content area -->

@endsection