@extends ('layout.master')



@section('title')
Shohag's Blog
@endsection


@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('css/footer-distributed.css')}}">
@endsection



@section('content')


 	 
 		@if(count($errors)>0)
 		    <div class="container">
 		 		<div class="alert alert-danger" role="alert">

 		 			@foreach($errors->all() as $error)
 		 				<ul>
 		 				    <li>
 		 				   		{{ $error }}
 		 				   	</li>												
 		 				</ul>
 		 			@endforeach

 		 		</div>
 		 	</div>
 		@endif

 		@if(Session::has('success'))
 		   <div class="container">
 				<div class="alert alert-success" role="alert">	   		   		 		 
 		            {{ Session::get('success') }}
 		 				   		   		 			 
 		 	    </div>
 		    </div>
 		@endif
 		    


  <div class="container">
	   <div class="row">
	   		<div class="col-md-8" >
	   			
	   			
	   				<div class="jumbotron">


	   					<h3 class="latest_blog_label bg-success"> Latest Blog</h3>

	   					  
	   					  @foreach($quotes as $quote)

	   					     <div class="panel panel-default">
	   					         <div class="panel-heading">
	   					             <a href="#" class="MakaleYazariAdi">{{ $quote->author->name }}</a>
	   					             <span>at {{$quote->created_at}}</span>
	   					             <div class="btn-group" style="float:right;">
	   					             	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	   					             		<span class="glyphicon glyphicon-cog"></span>
	   					             		<span class="sr-only">Toggle Dropdown</span>
	   					             	</button>
	   					             	<ul class="dropdown-menu">
	   					             		<li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></li>
	   					             		<li role="separator" class="divider"></li>
	   					             		<li><a href="{{route('delete', ['quote_id'=>$quote->id] ) }}"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></li>
	   					             	</ul>
	   					             </div>
	   					             <div class="clearfix"></div>
	   					         </div>
	   					         <div class="panel-body">
	   					             <div class="media">
	   					                 
	   					                 <div class="media-body">
	   					                 <h4 class="media-heading">{{$quote->title}}</h4>
	   					                  
	   					                 <div class="clearfix">{{$quote->quote}}</div>
                                          

	   					                 <div class="btn-group" role="group" id="BegeniButonlari">
	   					                     <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span></button>
	   					                     <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-thumbs-down"></span></button>
	   					                 </div>                 
	   					                </div>
	   					             </div>
	   					         </div>
	   					     </div>
	   					 @endforeach

	   				</div>
	   			 

	   		</div>

	   		<div class="col-md-4">

	   		    
		   		   	<div class="jumbotron">
	

		   		   		<section class="add_blog">
		   		   		  
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