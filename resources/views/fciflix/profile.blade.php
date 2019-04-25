@include('inc.header')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css" media="all" />
<div >
	<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{ Auth::user()->name }} 
					</div>
					<div class="profile-usertitle-job">
						{{ Auth::user()->email }} 
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<a href="{{route('Edit_Profile',(Auth::user()->id))}}" class="btn btn-success btn-sm" >Edit Profile</a>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			  <div class="container-fluid"><hr>
					    <div class="span12">
							    <table class="table table-bordered table-striped">
							        <thead>
								        <th width="10%">
								        number
								        </th>
								        <th width="20">
								        Movie name
								        </th>
								        <th width="10">
								        categroy
								        </th>
								            <th width="%30">
								        Poster
								        </th>
								             <th width="%30">
								        Movie link
								        </th>
								        </th>
								             <th width="%30">
								        Action
								        </th>
							        </thead>
							        <?php $i=0 ?>
							        @foreach($watchlist as $watch)
										<tr>
									        <td>{{ ++$i }}</td>
									        <td>{{$watch->movie->mov_name}}</td>
									       	<td>{{$watch->movie->cat_id}}</td>
									        <td><img src="{{URL::to('/')}}/images/{{$watch->movie->img_path}}" class="img-thumbnail" width="75"></td>
									        <td><a href="{{$watch->movie->source_path}}" target="_blank">{{$watch->movie->mov_name}}</a></td>
											<td><a href="{{URL('/home/delete/'. $watch->id)}}" class="btn btn-warning">Delete</a></td>

       								 	</tr>
							        @endforeach

							    </table>    
						 </div>
				</div>
			</div>
		</div>
<center>
<strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
</center>



</div>

</body>
</html>