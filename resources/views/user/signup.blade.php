@extends('layouts.master')

@section('content')

@include('partials.header')

@include('partials.navbar')

{{--  @include('partials.product')  --}}


<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Watches</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Fine Jewelry</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion Jewelry</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Engagement & Wedding</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Men's Jewelry</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Vintage & Antique</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Loose Diamonds </a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>Loose Beads</a></li>
		<li><a href="products.html"><span class="icon-chevron-right"></span>See All Jewelry & Watches</a></li>
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="cart.html"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Signup</li>
    </ul>
	<h3> Register</h3>	
	<hr class="soft"/>
		{{--  @include('partials.error')  --}}
		
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>
			Enter your e-mail address to create an account.<br/><br/><br/>
			<form  action="{{ route('register') }}" method="POST">
			    {{ csrf_field() }}
				@include('partials.error')
			  
            <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Full Name &#42;</label>

               <div class="col-md-6">
              <input id="fullname" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

              </div>
            </div>
              <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">E-Mail Address &#42;</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    
                       </div>
                </div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                	<label for="password" class="col-md-4 control-label">Password &#42;</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>

                  </div>
  							</div>

								<div class="control-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password &#42;</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
 

										<div class="controls">
										<button type="submit" class="shopBtn btn-large">Create Your Account</button>
										</div>
										
			  </form>
		</div>
		</div>
			
			
	</div>	

	
</div>
</div>

@include('partials.client')

@include('partials.footer')

@endsection