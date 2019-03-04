@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card card-default">
        <div class="card-header">
            Update tag {{$tag->name}}
        </div>
        <div class="card-body">
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name='name' value="{{$tag->name}}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success btn-block" type='submit'>
                            Update tag
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
