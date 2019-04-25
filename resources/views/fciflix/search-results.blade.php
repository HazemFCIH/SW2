<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;

?>
@include('inc.header')
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
						<div class="row agile_featured_movies">
								<h1>Search Results</h1>
									<div class="col-md-8 container-fluid" style="float:left;"><hr>
									    	<div class="span12">
												    <table class="table table-bordered table-striped">
												        <thead>
													        <th width="20">
													        Movie name
													        </th>
													        <th width="%30">
													        Poster
													        </th>
													        <th width="%30">
													        Movie link
													        </th>
												        </thead>
												        <tbody>
												        	@foreach($movies as $movie)
												        		<tr>
															        <td>{{$movie->mov_name}}</td>

															        <td><img src="{{URL::to('/')}}/images/{{$movie->img_path}}" class="img-thumbnail" width="75"></td>

															        <td><a href="{{ route('Movie.viewMovie',$movie->id)}}">{{$movie->mov_name}}</a></td>

					       								 	</tr>
												        	@endforeach	
												        </tbody>										        
												    </table>    
										 	</div>
									</div>


								   <div class="col-md-4 latest-news-agile-right-content" style="float:right">
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
			
			<!--//content-inner-section-->


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