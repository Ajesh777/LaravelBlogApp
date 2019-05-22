<!-- 3.1: Copy all html content from welcome.blade.php & delete the body & style content
@ Override 5.1: Remove all content except 3.3 -->
<!-- 5.2: Extend layout from app.blade.php-->
@extends('layouts/app')
<!-- 5.3: Create content within the layout -->
@section('content')
    <!-- 3.3: Content Detail-->
    <h1><i class="fa fa-address-card"></i> {{$title}}</h1> 
    <!--<p>This the About Page.</p>-->
    <!-- Sub Header -->
    <hr>
    <section id="sheader">
      <div class="container">
        <div class="row">
          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
            <!--<h1>About Us</h1>-->
          </div>
        </div>
      </div>
    </section>
    <!-- Main Page -->
    <section id="mpage" class="about">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
            <h2><span class="primary-text"><i class="fa fa-info-circle"></i> Who</span> we are ?</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <hr>
              <h2><span class="primary-text"><i class="fa fa-clock"></i> What</span> we do ?</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>
@endsection 