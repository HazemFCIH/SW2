<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingController;


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
@auth
				<div class="w3_content_agilleinfo_inner">
						<div class="agile_featured_movies">
				            <div class="inner-agile-w3l-part-head">
                                @foreach($movies as $movie)
                                <?php
                                $data=CommentController::listcomment($movie->id);

                                                $rate=RatingController::getrate($movie->id);

                                ?>
					            <h3 class="w3l-inner-h-title">{{$movie->mov_name}}</h3>

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
											

								   </div>

								   <div class="col-md-4 latest-news-agile-right-content">
								   <h4 class="side-t-w3l-agile">For Latest <span>Movies</span></h4>
										<div class="side-bar-form">
										 <form action="{{route('search')}}" method="GET">
											<input type="text" name="query" id="query" value="{{request()->input('query')}}" placeholder="Search here...." required="required">
											<input type="submit" value=" ">
										 </form>
                                            <h3>
                                               Movie Rate
                                                <?php

                                                echo $rate;
                                                ?>
                                                <span class="fa fa-star" style="color:#ffbf00;
                                                "></span></h3>
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
        	<br>
                                       <br>
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
                 <br>
                                       <br>
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
        				<textarea name="comment" class="form-control" placeholder="Enter your comment..."required></textarea>	
        			</div>
        			<div class="form-group text-right"></div>
        			   <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        			   <input type="submit" name="" class="btn btn-primary" >
        		</form>
        	</div>
        </div>

   <table class="table table-bordered table-striped">
        <thead>

        <th width="%100">
       comments
        </th>

        </thead>
        @foreach($data as $row)
    <tr>
        <td>{{$row->comment	}}</td>


        </tr>

        @endforeach
    </table>
	<!--/footer-bottom-->
		<div class="contact-w3ls" id="contact">
			<div class="footer-w3lagile-inner">
		
					<h3 class="text-center follow">Connect <span>Us</span></h3>
						<ul class="social-icons1 agileinfo">
							<li><a href="https://www.facebook.com/netflixmiddleeastnorthafrica/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/netflix?lang=ar"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/company/netflix"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.youtube.com/user/NewOnNetflix/videos?app=desktop"><i class="fa fa-youtube"></i></a></li>
						</ul>	
					
			 </div>
						
			</div>
			<div class="w3agile_footer_copy">
				    <p>© 2019  All rights reserved | Design by <a href="http://w3layouts.com/">SW2 TEAM</a></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>





@endauth

@guest
    	<div class="w3_content_agilleinfo_inner">
						<div class="agile_featured_movies">
				            <div class="inner-agile-w3l-part-head">
                                @foreach($movies as $movie)
                                <?php
                                $data=CommentController::listcomment($movie->id);

                                                $rate=RatingController::getrate($movie->id);

                                ?>
					            <h3 class="w3l-inner-h-title">{{$movie->mov_name}}</h3>

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




								   </div>
								   <div class="col-md-4 latest-news-agile-right-content">
								   <h4 class="side-t-w3l-agile">For Latest <span>Movies</span></h4>
										<div class="side-bar-form">
										 <form action="{{route('search')}}" method="GET">
											<input type="text" name="query" id="query" value="{{request()->input('query')}}" placeholder="Search here...." required="required">
											<input type="submit" value=" ">
										 </form>
                                            <h3>
                                               Movie Rate
                                                <?php

                                                echo $rate;
                                                ?>
                                                <span class="fa fa-star" style="color:#ffbf00;
                                                "></span></h3>
									    </div>

											<div class="clearfix"> </div>


							       </div>
								   <div class="clearfix"></div>
							   </div>

						</div>
				</div>
@endguest
</body>
</html>
