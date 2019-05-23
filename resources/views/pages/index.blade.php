<!-- 3.1: Copy all html content from welcome.blade.php & delete the body & style content
@ Override 5.1: Remove all content except 3.3 -->
<!-- 5.2: Extend layout from app.blade.php-->
@extends('layouts/app')
<!-- 5.3: Create content within the layout -->
@section('content')
    <!-- 3.3: Content Detail-->
    <div class="jumbotron text-center">
        <h1><i class="fa fa-3x fa-feather-alt"></i>Ls Blog App</h1> 
        <p>Welecome, This the Laravel Blog app</p>
        @guest
            <p><a href="{{ route('login')}}" role="button" class="btn btn-primary btn-lg"><i class="fa fa-users"></i> Login</a> <a href="{{ route('register') }}" role="button" class="btn btn-success btn-lg"><i class="fa fa-user-plus"></i> Register</a></p>
        @endguest
    </div>
    <!-- Features-->
    <section id="features">
            <div class="container">
              <div class="row center-xs center-sm center-md center-lg">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h2>Core Features</h2>
                  <p>What's Included</p>
                  <!--IconRow1-->
                  <div class="row center-xs center-sm center-md center-lg">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <i class="fa fa-3x fa-tachometer-alt"></i><br>
                      <h4>Fully Optimized</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <i class="fa fa-3x fa-headset"></i><br>
                      <h4>Free support</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <i class="fa fa-3x fa-rocket"></i><br>
                      <h4>Free Upgrade</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                  </div>
                  <!--IconRow2-->
                  <div class="row center-xs center-sm center-md center-lg">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <i class="fa fa-3x fa-chart-line"></i><br>
                      <h4>Uptime Guarantee</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <i class="fa fa-3x fa-users"></i><br>
                      <h4>Multi User</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <i class="fa fa-3x fa-plug"></i><br>
                      <h4>Plug & Play</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection 