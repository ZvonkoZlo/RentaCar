<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Korisnici</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
	
	body, html {
	  height: 100%;
	  line-height: 1.8;
	}
	
	/* Full height image header */
	.bgimg-1 {
	  background-position: center;
	  background-size: cover;
	  background-image: url("https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg");
	  min-height: 100%;
	}
	
	.w3-bar .w3-button {
	  padding: 16px;
	  position: center;
	}
	
	.w3-container{
	  margin-left: auto;
	  margin-right: auto;
	
	}
	
	
		
	
	body {
		color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	
	.table-responsive {
		margin: 30px 0;
	}
	.table-wrapper {
		background: #fff;
		padding: 20px 25px;
		border-radius: 3px;
		min-width: 1000px;
		box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
	.table-title {        
		padding-bottom: 15px;
		background: #000000;
		color: #fff;
		padding: 16px 30px;
		min-width: 100%;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
	}
	.table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
	table.table tr th, table.table tr td {
		border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
	}
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
	table.table-striped tbody tr:nth-of-type(odd) {
		background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
	table.table th i {
		font-size: 13px;
		margin: 0 5px;
		cursor: pointer;
	}	
	table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
		margin: 0 5px;
	}
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
		color: #FFC107;
	}
	table.table td a.delete {
		color: #F44336;
	}
	table.table td i {
		font-size: 19px;
	}
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.pagination {
		float: right;
		margin: 0 0 5px;
	}
	.pagination li a {
		border: none;
		font-size: 13px;
		min-width: 30px;
		min-height: 30px;
		color: #999;
		margin: 0 2px;
		line-height: 30px;
		border-radius: 2px !important;
		text-align: center;
		padding: 0 6px;
	}
	.pagination li a:hover {
		color: #666;
	}	
	.pagination li.active a, .pagination li.active a.page-link {
		background: #03A9F4;
	}
	.pagination li.active a:hover {        
		background: #0397d6;
	}
	.pagination li.disabled i {
		color: #ccc;
	}
	.pagination li i {
		font-size: 16px;
		padding-top: 6px
	}
	.hint-text {
		float: left;
		margin-top: 10px;
		font-size: 13px;
	}    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
		font-size: 14px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
	.modal .modal-title {
		display: inline-block;
	}
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
	body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
	
	body, html {
	  height: 100%;
	  line-height: 1.8;
	}
	
	/* Full height image header */
	.bgimg-1 {
	  background-position: center;
	  background-size: cover;
	  background-image: url("https://img-ik.cars.co.za/news-site-za/images/2022/06/a45-dyn.jpg");
	  min-height: 100%;
	}
	
	.w3-bar .w3-button {
	  padding: 14px;
	  position: center;
	}
	</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
	<div class="w3-top">
		<div class="w3-bar w3-black w3-card" id="myNavbar">
		  <a href="{{ route('after') }}" class="w3-bar-item w3-button w3-wide">Car Rental services</a>
		  <!-- Right-sided navbar links -->
		  <div class="w3-right w3-hide-small">
		  <a href="{{ route('after') }}" class="w3-bar-item w3-button">HOME</a>
			<a href="{{  route('products.index')  }}" class="w3-bar-item w3-button">Ponuda Vozila</a>
			<a class="w3-bar-item w3-button" href="{{ route('reservation') }}">Rezervacije</a>
			
	  
			@if (Route::has('login'))
					
					@if (Auth::user()->isSuperAdmin())
						
						<a class="w3-bar-item w3-button" href="{{ route('korisnici') }}">Korisnici</a>
					   
					@endif
					@endif
	  
					<a href="{{ route('logoutt') }}"
							  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
							  class="w3-bar-item w3-button">
							  Logout
						  </a>
						  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							  @csrf
						  </form>
	  
						  @if (Route::has('login'))
					  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
						  @auth
							  <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
						  @else
							  
								  <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>
						 
	  
	  
							  @if (Route::has('register'))
								 
									  <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
								  
							  @endif
	  
						  @endauth
						  @endif
					  </div>
				  
								  
							  
							  
		  </div>
		  <!-- Hide right-floated links on small screens and replace them with a menu icon -->
	  
		  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
			<i class="fa fa-bars"></i>
		  </a>
		</div>
	  </div>

	  
	  <!-- Navbar (sit on top) -->
	  <div class="w3-top">
		<div class="w3-bar w3-black w3-card" id="myNavbar">
		  <a href="{{ route('after') }}" class="w3-bar-item w3-button w3-wide">Car Rental services</a>
		  <!-- Right-sided navbar links -->
		  <div class="w3-right w3-hide-small">
		  <a href="{{ route('after') }}" class="w3-bar-item w3-button">HOME</a>
			<a href="{{  route('products.index')  }}" class="w3-bar-item w3-button">Ponuda Vozila</a>
			
			<a class="w3-bar-item w3-button" href="{{ route('reservation') }}">Rezervacije</a>
			
	  
			@if (Route::has('login'))
					
					@if (Auth::user()->isSuperAdmin())
						
						<a class="w3-bar-item w3-button" href="{{ route('korisnici') }}">Korisnici</a>
					   
					@endif
					@endif
	  
					<a href="{{ route('logoutt') }}"
							  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
							  class="w3-bar-item w3-button">
							  Logout
						  </a>
						  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							  @csrf
						  </form>
	  
						  @if (Route::has('login'))
					  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
						  @auth
							  <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
						  @else
							  
								  <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>
						 
	  
	  
							  @if (Route::has('register'))
								 
									  <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
								  
							  @endif
	  
						  @endauth
						  @endif
					  </div>
				  
								  
							  
							  
		  </div>
		  <!-- Hide right-floated links on small screens and replace them with a menu icon -->
	  
		  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
			<i class="fa fa-bars"></i>
		  </a>
		</div>
	  </div>
	  
	  <!-- Sidebar on small screens when clicking the menu icon -->
	  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
		  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
		  <a href="{{ route('after') }}" class="w3-bar-item w3-button">HOME</a>
		  <a href="{{  route('products.index')  }}" class="w3-bar-item w3-button">Ponuda Vozila</a>
	  
		  <a class="w3-bar-item w3-button" href="{{ route('reservation') }}">Rezervacije</a>
		  
	  
		  @if (Route::has('login'))
				  
				  @if (Auth::user()->isSuperAdmin())
					  
					  <a class="w3-bar-item w3-button" href="{{ route('korisnici') }}">Korisnici</a>
					 
				  @endif
				  @endif
	  
				  <a href="{{ route('logoutt') }}"
							onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
							class="w3-bar-item w3-button">
							Logout
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
	  
						@if (Route::has('login'))
					<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
						@auth
							<!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> -->
						@else
							
								<a href="{{ route('login') }}" class="w3-bar-item w3-button">Log in</a>
					   
	  
	  
							@if (Route::has('register'))
							   
									<a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
								
							@endif
	  
						@endauth
						@endif
					</div>
				
								
							
							
		</div>
	  
	  </nav>
	  
	   
	  
	  <br>
 

<div class="container-xl">
	<div class="table-responsive vertical-center">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Upravljaj <b>Korisnicima</b></h2>
					</div>
					<div class="col-sm-6">
						
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Izbriši</span></a>						
					</div>
				</div>
			</div>
			@if(Auth::user()->isSuperAdmin())
		
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Ime</th>
						<th>E-mail</th>
						<th>Uloga</th>
						
					</tr>
					
				<tbody>
					
				</thead>
				@foreach ($korisnik as $korisnik)
					<tr>
						
						<td>
							
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						
						<td>{{$korisnik->name}}</td>
						<td>{{$korisnik->email}}</td>
						<td> @if($korisnik->is_admin==2) Superadmin
							@elseif($korisnik->is_admin==1)Admin
							@else (korisnik->is_admin==0) Korisnik
								@endif</td>
					
						<td>
							<a href="{{ route('users.edit', $korisnik->id) }}" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		
                                @else nedam uci
                            @endif
						
	</div>        
</div>
</div>


{{-- <!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ route('korisnik.update', $korisnik->id) }}" method="post" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="id" value="{{ $korisnik->id }}">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Ime</label>
						<input type="text" class="form-control" required value="{{$korisnik->name}}" name = 'name'>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required value="{{$korisnik->email}}" name = 'email'>
					</div>
					<div class="form-group">
						<label>Uloga</label>
						<input type = 'number' class="form-control" required  value="{{$korisnik->is_admin}}"  name = 'role'/>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<a href="update/{{ $korisnik->id }}"><input type="submit" class="btn btn-info" value="Save"></a>
				</div>
			</form>
		</div>
	</div>
</div> --}}

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			
				<div class="modal-header">						
					<h4 class="modal-title">Izbriši korisnika</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Jeste li sigurni da želite izbrisati podatke?</p>
					<p class="text-warning"><small>Ova akcija se ne može opozvati</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Odustani">
					<a href="delete/{{ $korisnik->id }}"><button class="btn btn-primary"><input type="submit" class="btn btn-danger" value="Izbriši"></a>
				</div>
			
		</div>
	</div>
</div>

<script>
	// Modal Image Gallery
	function onClick(element) {
	  document.getElementById("img01").src = element.src;
	  document.getElementById("modal01").style.display = "block";
	  var captionText = document.getElementById("caption");
	  captionText.innerHTML = element.alt;
	}
	
	
	// Toggle between showing and hiding the sidebar when clicking the menu icon
	var mySidebar = document.getElementById("mySidebar");
	
	function w3_open() {
	  if (mySidebar.style.display === 'block') {
		mySidebar.style.display = 'none';
	  } else {
		mySidebar.style.display = 'block';
	  }
	}
	
	// Close the sidebar with the close button
	function w3_close() {
		mySidebar.style.display = "none";
	}
	</script>
</body>
</html>