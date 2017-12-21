@extends('layouts.master')

@section('title')
Shopping Cart
@endsection

@section('content')

@include('partials.header')

<!--
Navigation Bar Section 
-->

@include('partials.navbar')
<!-- 
Body Section 
-->
	@include('partials.content')
<!--
New Products
-->

		@include('Product.product')
<!-- 
Clients 
-->
@include('partials.client')
<!--
Footer
-->
@include('partials.footer')


@endsection