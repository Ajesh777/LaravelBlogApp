<!-- 3.1: Copy all html content from welcome.blade.php & delete the body & style content
@ Override 5.1: Remove all content except 3.3 -->
<!-- 5.2: Extend layout from app.blade.php-->
@extends('layouts/app')
<!-- 5.3: Create content within the layout -->
@section('content')
    <!-- 3.3: Content Detail-->
    <h1><i class="fa fa-concierge-bell"></i> {{$title}}</h1> 
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">
                    <h4>{{$service}}:</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure velit laudantium ipsam reprehenderit nihil quos quis enim nesciunt tempore! Ea neque ad aliquid fugit aspernatur laborum. Aliquam soluta id quod.</p>
                    <small>Pricing: $20.00 - $40.00 per Hour.</small>
                </li>
            @endforeach
        </ul>
    @endif
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Pricing</h1>
            <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
          </div>
      
          <div class="container">
            <div class="card-deck mb-3 text-center">
              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
              </div>
              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
              </div>
              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
              </div>
            </div>
@endsection 