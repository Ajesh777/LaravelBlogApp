@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><small><i class="fa fa-user-circle"></i> {{auth()->user()->name}}, you are logged in!</small></p>
                    <a href="/posts/create" class="btn btn-primary"><i class="fa fa-user-edit"></i> Create New Posts</a>
                    <p></p>
                    <!-- 27.1: Creating Table for User's Post's-->
                    @if (($count=count($posts)) > ($i=0))
                        <h3>Congrats, you have posted {{$count}} blog post's :</h3>
                        <div class="table-responsive-md">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No:</th>
                                        <th>Title:</th>
                                        <th>Created At:</th>
                                        <th>Updated At:</th>
                                        <th>Action 1:</th>
                                        <th>Action 2:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->created_at}}</td>
                                            <td>{{$post->updated_at}}</td>
                                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-success"><i class="fa fa-pen"></i> Edit</a></td>
                                            <td>
                                                <!-- 15.3: Create form & link button for deleting Post-->
                                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else 
                        <h3>Your Blog Posts :</h3>
                        <p>Sorry, You have not Posted, any Post's Yet...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
