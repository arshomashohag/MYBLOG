@extends ('layout.master')

@section('title')
Message Me
@endsection


@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/contact/main.css') }}">
@endsection

@section('content')
<div class="container">
 	<div class="jumbotron">
		   <h1>Say Hello</h1>

			<form class="cf">
				  <div class="half left cf">
				    <input type="text" id="input-name" placeholder="Name">
				    <input type="email" id="input-email" placeholder="Email address">
				    <input type="text" id="input-subject" placeholder="Subject">
				  </div>
				  <div class="half right cf">
				    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
				  </div>  
				  <input type="submit" value="Submit" id="input-submit">
			</form>
	</div>

</div>



@endsection