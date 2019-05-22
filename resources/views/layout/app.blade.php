<!-- 4.1: Copy all html content from index.blade.php & delete the body content-->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 4.2: Title from .env-->
        <title>{{config('app.name', 'LsApp')}}</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body> 
        <!-- 7.1: import the navbar-->
        @include('layout.nav')
        <!-- 4.3: Create a container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6">
                    <p></p>
                </div>
                <div class="col-lg-12 col-md-8 col-sm-6">
                    <!-- 4.5: Include Messages-->
                    @include('layout.messages')
                    <!-- 4.4: Content Detail-->
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- 19.1: Initiating the ckeditor script-->
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        @include('layout.footer')
    </body>
</html> 