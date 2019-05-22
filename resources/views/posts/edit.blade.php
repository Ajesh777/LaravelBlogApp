<!-- 21.1: Extend layout-->
@extends('layout/app')
<!-- 21.2: Include the main section-->
@section('content')
    <h1><i class="fa fa-user-edit"></i> Edit Post:</h1>
    <!-- 21.3: Form from Collective Package -->
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            <!-- 21.4: Add ckEditor -->
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body TextArea'])}}
        </div>
        <!-- 29.1: Form File Image Upload-->
        <div class="form-group custom-file">
            {{Form::file('cover_image')}}
        </div>
        <!-- 22.5: Spoof the form to sent a Put request-->
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection