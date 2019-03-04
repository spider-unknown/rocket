@extends('layouts.app')

@section('content')

    <div class="card card-default">
        <div class="card-header">
            Posts
            <a href="{{ route('post.create') }}" class="btn btn-xs btn-success" style="float:right">
                <span class="fa fa-plus"></span>
            </a>
        </div>
        <div class="card-body">
            <table class=" table table-hover">
                <thead>
                <th>Content</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if($posts->count()>0)
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                {{$post->content}}
                            </td>
                            <td>
                                <img class="img-fluid" src="{{ $post->featured }}" alt="{{$post->content}}" width="50px" height="50px">
                            </td>
                            <td>
                                {{--<a href="{{route('category.edit' , ['id' => $category->id]) }}" class="btn btn-xs btn-info">--}}
                                    {{--<span class="fa fa-pencil"></span>--}}
                                </a>
                            </td>
                            <td>
                                {{--<a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-xs btn-danger">--}}
                                    {{--<span class="fa fa-trash"></span>--}}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="3">No posts yet!</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
