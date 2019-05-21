<!-- 3.1: Copy all html content from welcome.blade.php & delete the body & style content
@ Override 5.1: Remove all content except 3.3 -->
<!-- 5.2: Extend layout from app.blade.php-->
@extends('layouts/app')
<!-- 5.3: Create content within the layout -->
@section('content')
    <!-- 3.3: Content Detail-->
    <div class="jumbotron text-center">
        <h1>Blog App</h1> 
        <p>Welecome, This the Laravel Blog app</p>
        @guest
            <p><a href="/login" role="button" class="btn btn-primary btn-lg">Login</a> <a href="/register" role="button" class="btn btn-success btn-lg">Register</a></p>
        @endguest
    </div>
@endsection 