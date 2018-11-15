@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="jumbotron">
        <h1>Trashed Blogs</h1>
    </div>
    <div class="col-md-12">
        @foreach($trashedBlogs as $blog)
            <h2>{{ $blog->title}}</h2>
            <p>{{ $blog ->body}}</p>

        {{-- restore --}}
        <form method='get' action="{{route('blogs.restore',$blog->id)}}">
            <button type="submit" class="btn btn-success btn-xs float-left btn-margin-right">
                Restore
            </button>
            {{csrf_field()}}
        </form>
        {{-- permanent delete --}}
        <form method='post' action="{{route('blogs.permanent-delete',$blog->id)}}">
            {{method_field('delete')}}
            <button type="submit" class="btn btn-danger btn-xs float-left btn-margin-right">
               Permanent Delete
            </button>
            {{csrf_field()}}
        </form>
        @endforeach
    </div>
</div>

@endsection
