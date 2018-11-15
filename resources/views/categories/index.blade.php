@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($categories as $category)
        <h2><a href="{{route('categories.show',$category->slug)}}">{{ $category->name}}</a></h2>


        @endforeach
        <a href="{{route('categories.create')}}" class="btn btn-success btn-sm btn-margin-right">Create Category</a>
    </div>

@endsection
