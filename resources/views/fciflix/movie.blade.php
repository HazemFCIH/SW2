<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;

?>
@include('inc.header')
<link href="{{ asset('css/rate.css') }}" rel="stylesheet" type="text/css" media="all" />
<div class="container">
		@if(session()->has('success_message'))
			<div class="alert alert-success">
				{{session()->get('success_message')}}
			</div>
		@endif

		@if(count($errors) > 0 )
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif	
	</div>
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
						<div class="agile_featured_movies">
				            <div class="inner-agile-w3l-part-head">
                                @foreach($movies as $movie)
					            <h3 class="w3l-inner-h-title">{{$movie->mov_name}}</h3>
								<p class="w3ls_head_para">Add short Description</p>
							</div>
							   <div class="latest-news-agile-info">
								   <div class="col-md-8 latest-news-agile-left-content">
											<div class="single video_agile_player">
											  <div id="Container"
												 style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
												 <iframe id="ViostreamIframe" 
												  width="100%" height="100%" 
												  src="{{$movie->source_path}}"
												  frameborder="0" allowfullscreen=""
												  style="position:absolute; top:0; left: 0"></iframe>
                                                   @endforeach
												</div>
													 
										    </div>
											
										<div class="admin-text">
                                            <h5>Force 2 | Official Trailer | John Abraham, Sonakshi Sinha and Tahir Raj Bhasin</h5>
												<h5>WRITTEN BY ADMIN</h5>
												<div class="admin-text-left">
													<a href="#"><img src="images/admin.jpg" alt=""></a>
												</div>
												<div class="admin-text-right">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
													sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													<span>View all posts by :<a href="#"> Admin </a></span>
													
                                                <form action="{{url('addmovie/'.$movie->id)}}" method="post">
                                                	@csrf
													<button type="submit" class="btn btn-success">  <span class="glyphicon glyphicon-plus"></span> </button>
												</form>
                                                  

												</div>
				
												<div class="clearfix"> </div>
										</div>
											<form class="foodstars" action="{{url('rating/'.$movie->id)}}" id="addStar" method="POST">
											       {{ csrf_field() }}
											       	<fieldset class="rating">
											         <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
											         <label class="star star-5" for="star-5"></label>
											         <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
											         <label class="star star-4" for="star-4"></label>
											         <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
											         <label class="star star-3" for="star-3"></label>
											         <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
											         <label class="star star-2" for="star-2"></label>
											         <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
											         <label class="star star-1" for="star-1"></label>

											         </fieldset>
											         <input type="submit" class="btn btn-primary">
											   </form>
					
								   </div>
								   <div class="col-md-4 latest-news-agile-right-content">
								   <h4 class="side-t-w3l-agile">For Latest <span>Movies</span></h4>
										<div class="side-bar-form">
										 <form action="{{route('search')}}" method="GET">
											<input type="text" name="query" id="query" value="{{request()->input('query')}}" placeholder="Search here...." required="required">
											<input type="submit" value=" ">
										 </form>
									    </div>
								
											<div class="clearfix"> </div>
											
										
							       </div>
								   <div class="clearfix"></div>
							   </div>
					             
						</div>
				</div>
			<!--//content-inner-section-->
			  <!--/feedback-->
        <!--<h4>Feedbacks</h4>--> 
        
        <div class="panel panel-default">
        	<div class="panel-heading">Add Your Feedback</div>
        	<div class="panel-body">
        		<form action="{{url('movie/'.$movie->id)}}" method="post">

        			{{csrf_field()}}
        			    <div class="form-group">
        				<label for="Feedback">Feedback</label>
        				
        				<!-- <input type="text" name="name" class="form-control" placeholder="Enter your name...">
        				<br>
        				<input type="email" name="email" class="form-control" placeholder="Enter your email...">
                        <br> -->
        				<textarea name="comment" class="form-control" placeholder="Enter your comment..."></textarea>	
        			</div>
        			<div class="form-group text-right"></div>
        			   <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        			   <input type="submit" name="" class="btn btn-primary">
        		</form>
        	</div>
        </div>


	<!--/footer-bottom-->
		<div class="contact-w3ls" id="contact">
			<div class="footer-w3lagile-inner">
		
					<h3 class="text-center follow">Connect <span>Us</span></h3>
						<ul class="social-icons1 agileinfo">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>	
					
			 </div>
						
			</div>
			<div class="w3agile_footer_copy">
				    <p>© 2017 Movies Pro. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>




</body>
</html>