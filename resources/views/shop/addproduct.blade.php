@extends('layouts.master')

@section('content')

@include('partials.header')

@include('partials.navbar')

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
			

	</div>
    

<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Page Title</li>
    </ul>
<div class="well well-small">
	<hr class="soft"/>
	<h2>Add Product</h2>
    <br>
	


<hr class="soft"/>
		<br>
		<br>
		
        <div class="contanier">
                    <div class="col-md-6 well well">
                        <article>
                            <form id="upload" action="#" method="get">
                                <fieldset>
                                    <div>
                                        <label for="fileselect">Product to upload:</label>
                                        <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" /> </div>
                                    <div id="filedrop">or drop files here</div>
                                </fieldset>
                            </form>
                            <hr class="soft"/>
	<h2>Table</h2>
	<table class="table table-condensed">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>

                            
	<hr/>
	
</div>
</div>
</div>



@include('partials.client')

@include('partials.footer')

@endsection