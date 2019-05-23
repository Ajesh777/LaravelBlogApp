<!-- 16.1: Extend layout-->
@extends('layout/app')
<!-- 16.2: Include the main section-->
@section('content')
    <h1><i class="fa fa-user-edit"></i> Create Post:</h1>
    <hr>
    <!-- 16.3: Form from Collective Package -->
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body:')}}
            <!-- 20: Add ckEditor -->
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body TextArea'])}}
        </div>
        <!-- 29.1: Form File Image Upload-->
        <div class="form-group custom-file">
            <hr>
            <p>Click "Choose file" below, To Add Cover Image:</p>
            {{Form::file('cover_image')}}
        </div>
        <hr>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection