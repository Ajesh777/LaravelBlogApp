<!-- 12.1: Extend layout-->
@extends('layouts/app')
<!-- 12.2: Include the main section-->
@section('content')
    <h1><i class="fa fa-layer-group"></i> Posts</h1>
    <!-- 14.1: Check if posts then For each posts - display-->
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3" style="max-width: 840px;">
                <div class="row no-gutters">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}" class="card-img-top" altsrc="/storage/cover_image/noimage.jpg">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="card-body">
                            <!-- 14.2: Create link with id for each posts @ extends 27-->
                            <h3><a href="{{ url('/posts/'.$post->id) }}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}}</small>
                            <P><small> by {{$post->user->name}}</small></P>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="badge badge-primary">Primary</a>
                            <a href="#" class="badge badge-secondary">Secondary</a>
                            <a href="#" class="badge badge-success">Like</a>
                            <a href="#" class="badge badge-danger">DisLike</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found Yet..</p>
    @endif
@endsection 