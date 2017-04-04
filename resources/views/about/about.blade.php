@extends ('layout.master')

@section('title')
About Me
@endsection


@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/about/main.css') }}">
@endsection

@section('script')
<script type="text/javascript" src=" {{ URL::to('js/turn.js') }} "></script>
 
@endsection

@section('content')

<div class="container">
        
        <div class="one">
	        <div class="inner">
				<img src="{{ URL::to('images/profile.png') }}" align="middle" class="image animated bounceInDown">
				<div class="details">
				     <br><br>
					 <div class="name animated bounceInUp"> Md. Shohag Mia</div><br>
					  
					 	<div class="prog animated bounceInLeft">Programmer</div>
					 	<div class="dot1 animated bounceInRight">.</div>
					 	<div class="eng animated bounceInLeft">Software Engineer</div>
					 	<div class="dot2 animated bounceInRight">.</div>
					 	<div class="dev animated bounceInLeft">Developer</div>
					  
				</div>
	    	</div>
    	</div>
    	 
     
    <section class="two border-radius shadow" id="folding">
	     
		        <div class="inner" >

			    	 <section class="hi">
			    	 	<div> <h2>Hi</h2></div>
                        <p>I'm a software engineer and developer. Love to develop cool things for web, 
                        mobile and desktop . </p>
			    	 </section>

            		    <div class="what">
		                     <div> <h2>What I can do.</h2></div>

					    	 <section>
					    	 	 <h3>Design what you want.</h3> 
		                        <p>I like to keep it simple. My goals are to focus on typography, content and conveying the message that you want to send.</p>
					    	 </section>

					    	 <section>
					    	 	 <h3>Develop what you need.</h3> 
		                        <p>I'm a software developer, so I know how to create software to run across devices using the latest technologies available.</p>
					    	 </section>

			    	    </div>
                    
			    	 
		    	</div>

		    	 
         
    </section>  

 

    
</div>
	

@endsection


 