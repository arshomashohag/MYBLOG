@extends ('layout.master')



@section('title')
Shohag's Blog
@endsection


@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/footer-distributed.css')}}">
@endsection



@section('content')
  

  <div class="container">
	   <div class="row">
	   		<div class="col-md-8" >
	   			
	   			
	   				<div class="jumbotron">


	   					<h3 class="latest_blog_label bg-success"> Latest Blog</h3>

	   					  
	   					     <div class="panel panel-default">
	   					         <div class="panel-heading">
	   					             <a href="#" class="MakaleYazariAdi">John Doe</a>
	   					             <div class="btn-group" style="float:right;">
	   					             	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	   					             		<span class="glyphicon glyphicon-cog"></span>
	   					             		<span class="sr-only">Toggle Dropdown</span>
	   					             	</button>
	   					             	<ul class="dropdown-menu">
	   					             		<li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></li>
	   					             		<li role="separator" class="divider"></li>
	   					             		<li><a href="#"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></li>
	   					             	</ul>
	   					             </div>
	   					             <div class="clearfix"></div>
	   					         </div>
	   					         <div class="panel-body">
	   					             <div class="media">
	   					                 
	   					                 <div class="media-body">
	   					                 <h4 class="media-heading">Lorem ipsum</h4>
	   					                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nulla sapien, semper in sodales ac, rutrum at orci. Maecenas vulputate nec tellus sit amet porttitor. Suspendisse congue porta sagittis. Ut erat diam, consectetur sed tempus id, sodales nec felis. Donec sagittis nunc sapien, non consequat nunc ultrices non. Aliquam accumsan ligula ante, non commodo risus sodales a. Vestibulum facilisis, enim in porta fringilla, tortor sapien congue purus, porta consectetur sem turpis vitae mauris. Donec dapibus justo a elit semper, et scelerisque mauris ullamcorper. Maecenas blandit arcu nec euismod pellentesque. Fusce et imperdiet nisi, at suscipit sem. Aliquam pulvinar risus id cursus elementum. Nulla elementum placerat nibh, in dictum enim mollis non. Morbi vehicula eget est et tristique. Aenean condimentum augue id congue convallis. Phasellus congue non tellus nec pretium. Maecenas eu vulputate lacus, eget feugiat odio.
	   					                 <div class="clearfix"></div>
	   					                 <div class="btn-group" role="group" id="BegeniButonlari">
	   					                     <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span></button>
	   					                     <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-down"></span></button>
	   					                 </div>                 
	   					                </div>
	   					             </div>
	   					         </div>
	   					     </div>
	   					 
	   				</div>
	   			 

	   		</div>

	   		<div class="col-md-4">

	   		    
		   		   	<div class="jumbotron">
	

		   		   		<section class="add_blog">
		   		   		 	
		   		   		 		@if(count($errors)>0)
			   		   		 		<div class="alert alert-danger" role="alert">

			   		   		 			@foreach($errors->all() as $error)
				   		   		 			<ul>
				   		   		 				<li>
				   		   		 					{{ $error }}
				   		   		 				</li>												
											</ul>
			   		   		 			@endforeach

			   		   		 		</div>
		   		   		 		@endif

								@if(Session::has('success'))
			   		   		 		 
			   		   		 			 {{ Session::get('success') }}
				   		   		 			 
			   		   		 		</div>
		   		   		 		@endif

		   		   		 	
							<h3>Add Blog</h3>
							<form action="{{route('create')}}" method="post">
								<label for="name" class="label label-info">Your Name</label>
								<input type="text" name="author" class="form-control" id="name" placeholder="Name">
 								<label for="blog_title" class="label label-info">Title</label>
 								<input type="text" name="title" class="form-control" id="blog_title" placeholder="Title of the blog">

								<label for="blog" class="label label-info">Blog</label>
								<textarea name="blog" class="blog_text form-control" rows="5" placeholder="Quote" ></textarea>
								<button type="submit" class="btn btn-primary">Submit</button><br>  
								<input type="hidden" name="_token" value="{{ Session::token()}}"> 
							</form>
		   		   		</section>
		   		   	</div>
	   		    
	   			
	   		</div>

	   </div>
   </div>


@endsection