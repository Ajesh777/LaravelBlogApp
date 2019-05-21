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

                    <p><small>{{auth()->user()->name}}, you are logged in!</small></p>
                    <a href="/posts/create" class="btn btn-primary">Create New Posts</a>
                    <p></p>
                    <h3>Your Blog Posts :</h3>
                    <!-- 27.1: Creating Table for User's Post's-->
                    @if (count($posts) > 0)
                        <div class="table-responsive-md">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title:</th>
                                        <th>Option 1:</th>
                                        <th>Option 2:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-success">Edit</a></td>
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
                        <p>Sorry, You have not Posted, any Post's Yet...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
