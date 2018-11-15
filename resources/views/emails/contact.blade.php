@extends('layouts.app')
@section('content')
    <div class="container-fluid">
       <div class="jumbotron">
           <h1>Contact Page</h1>
       </div>
       <div class="col-sm-8 offset-md-2">
            <form action="{{ route('mail.send')}}" method="post">
                @include('partials.error-message')
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email')}}">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control" value="{{ old('subject')}}">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="mail_message" class="form-control my-editor">{{ old('mail_message') }}</textarea>
                </div>
                <div>
                    <button class="btn btn-primary">Say Hi</button>
                </div>
                {{csrf_field()}}
            </form>
       </div>
    </div>

@endsection
