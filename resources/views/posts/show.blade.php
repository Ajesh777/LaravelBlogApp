<!-- 15.1: Extend layout-->
@extends('layouts/app')
<!-- 15.2: Include the main section-->
@section('content')
    <h1>{{$post->title}}</h1>
    <img style="width:10 0%" src="/storage/cover_image/{{$post->cover_image}}" class="card-img-top" alt="noimage_jpg">
    <div class="card mb3">
        <div class="card-body">
            <p>{!! $post->body !!}</p>
        </div>
    </div>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <p></p>
        <div class="container">
            <div class="row">
                <div class="col-auto mr-auto">
                    <a href="/posts" class="btn btn-outline-secondary"><i class="fa fa-arrow-alt-circle-left"></i> Go Back</a> 
                    <!-- 15.2: Button link for Editing the Post --> 
                    @if (!Auth::guest())
                        @if (Auth::user()->id == $post->user_id)
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-success"><i class="fa fa-user-edit"></i> Edit Post</a>
                    <p></p>
                </div>
                        <!-- 15.3: Create form & link button for deleting Post-->
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                        {!!Form::close()!!}
                    @endif
                @endif
            </div>
        </div>
    <hr>
    
@endsection 