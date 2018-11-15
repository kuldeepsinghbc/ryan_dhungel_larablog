@extends('layouts.app')

@section('content')
    <div class="container-fluid">
       <div class="jumbotron"><h1>Create a Category</h1></div>
    </div>
    <div class="col-md-12">
        <form action="{{route ('categories.store')}}" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <button class="btn btn-primary" type='submit'>Create a New Caetgory</button>
            {{csrf_field()}}
        </form>
    </div>
@endsection
