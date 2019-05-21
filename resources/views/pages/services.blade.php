<!-- 3.1: Copy all html content from welcome.blade.php & delete the body & style content
@ Override 5.1: Remove all content except 3.3 -->
<!-- 5.2: Extend layout from app.blade.php-->
@extends('layouts/app')
<!-- 5.3: Create content within the layout -->
@section('content')
    <!-- 3.3: Content Detail-->
    <h1>{{$title}}</h1> 
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection 