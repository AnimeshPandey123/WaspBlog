@extends('General.index')
@section('content')
<div class="page-header" data-parallax="true" style="background-image: url('images/mainImage.png');">	
		<div class="filter"></div>
			<div class="container">
			    <div class="motto text-center">
			        <h1 class="logo">We are Sudo Programmers</h1>
			        <h3 style="font-weight:bold;">Design | Develop | Learn</h3>
			        <br />
			        <a href="{{route('downloads')}}" class="btn btn-outline-neutral btn-round">
			        	<i class="fa fa-download"></i>&nbsp;
			        	Downloads
			        </a>&nbsp;&nbsp;
			        <a href="{{route('projects.general')}}" class="btn btn-outline-neutral btn-round">
			        	Projects
			        </a>
			    </div>
			</div>
    	</div>

    	<br><br>

    	<div class="main">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-6 col-md-6 col-sm-12">
    				@if($post)
    					<div class="blog">
    						<div class="image">
    							<img src="{{asset($post['featured'])}}" style="width:100%;">
    						</div>
    						<div class="cont">
    							<a href="{{route('postone',['id'=>$post['id']])}}"><h4 class="text-info" >{{$post['title']}}</h4></a><br>
    							<div class="smallboi">
    								<i class="fa fa-user"></i>&nbsp;{{$post['name']}}
    								&nbsp;&nbsp;&nbsp;
    								<i class="fa fa-clock"></i>{{$post['created_at']}}
    								&nbsp;&nbsp;&nbsp;
    								@foreach($tags as $tag)
									<span class="label label-{{$progress[$loop->index]}}">{{$tag->tag}}</span>
									@endforeach
    								
    							</div>
    							<br>
    							<div class="post">

    								{!! $post['description'] !!}
    								<span class="text-info"><a href="{{route('postone',['id'=>$post['id']])}}">Read More</a></span>
    							</div>
    						</div>
    					</div>
    				

    				@else
    				
    					<div class="blog">
    					<div class="cont">
    						<label>There is no post</label>
    					</div>
    						
    					</div>
    				
    				@endif	
    				</div>
    				
    				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 projects">
    					<div class="text-center">
    					@foreach($projects as $project)
    						<div class="pro text-danger" style="">
    							<i class="fa fa-{{$icons[$loop->index]}} text-{{$progress[$loop->index]}}" style="font-size:2.4em;"></i><br>
    							<h5 style="font-size:1.5em;" class="text-center spanis-{{$loop->index}}">{{$project->title}}</h5>
    							<div class="progress">
    						 		<div class="progress-bar progress-bar-{{$progress[$loop->index]}}" role="progressbar" style="width:{{{ $project['status'] }}}%;"></div>
    							</div>
    						</div>
    						<br>
    						@endforeach
    					</div>
    				</div>

    				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 daily">
    					<h4 class="info-title"><i class="far fa-file"></i>&nbsp;&nbsp;Documentation</h4>
    					<div class="doc_links">
    					@if($lpost)
    						@foreach($lpost as $last)
    						<a href="{{route('documentation',['id'=>$last->id])}}" class="links">{{$last->title}} - {{$last->created_at}}</a><br><br>
    						@endforeach
    						</div>
    					@else
    						<div class="doc_links">
    						
    						<label>No Documents Created</label>
    						
    						</div>
    					@endif
    						
    					
    				</div>
    			</div>
    		</div>
    		<br><br>
    		<div class="container-fluid team">
				<div class="container">
					<h2 class="text-center">Meet the Team</h2>
					<div class="row text-center">
						<div class="col-lg-4 col-md-4 col-sm-6 boi">
							<img src="{{asset('images/aakash.jpg')}}" class="profile image-fluid">
							<h4>Aakash Raj Dahal</h4><br>
							<h6>UI/UX & Frontend Developer</h6>
							<p>
								He does all of the designing work for the products of WASP.
								From HTML and CSS in the front end part to designing graphics using Photoshop and Illustrator, he does it all.
							</p>
							<br>
							<a href="https://www.facebook.com/akashraj.dahal" style="color:#fff;"><i class="fab fa-facebook"  style="margin-left:20px;margin-right:20px;"></i></a>
							<a href="https://twitter.com/AkashRajDahal" style="color:#fff;"><i class="fab fa-twitter" style="margin-left:20px;margin-right:20px;"></i></a>
							<a href="https://www.instagram.com/aakashdahal" style="color:#fff;">
							<i class="fab fa-instagram" style="margin-left:20px;margin-right:20px;"></i></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 boi">
							<img src="{{asset('images/animesh.jpg')}}" class="profile image-fluid">
							<h4>Animesh Pandey</h4><br>
							<h6>API & BACKEND DEVELOPER</h6>
							<p>
								He loves to code and makes a lot of mistakes.
								But eventually he learns and makes WASP products run smoothly under the hood without any problems.
							</p>
							<br>
							<a href="https://www.facebook.com/ani.mesh.775" style="color:#fff;"><i class="fab fa-facebook" style="margin-left:20px;margin-right:20px;"></i></a>
							<a href="https://twitter.com/Ani_mesh_pandey" style="color:#fff;"><i class="fab fa-twitter" style="margin-left:20px;margin-right:20px;"></i></a>
							<a href="https://www.instagram.com/ani_mesh_pandey" style="color:#fff;">
							<i class="fab fa-instagram" style="margin-left:20px;margin-right:20px;"></i></a>
							
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 boi">
							<img src="{{asset('images/prayush.jpg')}}" class="profile">
							<h4>Prayush Bijukchhe</h4><br>
							<h6>FULL STACK WEB DEVELOPER</h6>
							<p>
								He is the master of several Programming Languages. 
								He teaches the team whenever someone needs help with Programming and in his free time, jams the Guitar.
							</p>
							<br>
							<a href="https://www.facebook.com/bprayush" style="color:#fff;"><i class="fab fa-facebook"  style="margin-left:20px;margin-right:20px;"></i></a>
							<i class="fab fa-twitter" style="margin-left:20px;margin-right:20px;"></i>
							<a href="https://www.instagram.com/bprayush" style="color:#fff;">
							<i class="fab fa-instagram" style="margin-left:20px;margin-right:20px;"></i></a>
						</div>
					</div>
					<br><br><br><br><br>
					<div class="row text-center">
						<div class="col-lg-4 col-md-4 col-sm-6 boi">
							<img src="{{asset('images/suresh.jpg')}}" class="profile">
							<h4>Suresh Ghimire</h4><br>
							<h6>PROJECT MANAGER</h6>
							<p>
								He is the guy with the plan.
								He is responsible for communicating with other teams at Karkhana and making sure everything runs smoothly in the team.
							</p>
							<br>
							<a href="https://www.facebook.com/surayshh" style="color:#fff;"><i class="fab fa-facebook"  style="margin-left:20px;margin-right:20px;"></i></a>
							<i class="fab fa-twitter" style="margin-left:20px;margin-right:20px;"></i>
							<a href="https://www.instagram.com/sureshghimire" style="color:#fff;">
							<i class="fab fa-instagram" style="margin-left:20px;margin-right:20px;"></i></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 boi">
							<img src="{{asset('images/william.jpg')}}" class="profile">
							<h4>William Rai</h4><br>
							<h6>ANDROID DEVELOPER</h6>
							<p>
								He is the one and only Android Developer for WASP. 
								He connects all the different pieces of Designs, APIs and Backend components to develop Android Applications.
							</p>
							<br>
							<a href="https://www.facebook.com/raiwilliam.reaper" style="color:#fff;"><i class="fab fa-facebook"  style="margin-left:20px;margin-right:20px;"></i></a>
							<a href="https://twitter.com/Williamrai11Rai" style="color:#fff;"><i class="fab fa-twitter" style="margin-left:20px;margin-right:20px;"></i></a>
							<a href="https://www.instagram.com/raiwilliam" style="color:#fff;">
							<i class="fab fa-instagram" style="margin-left:20px;margin-right:20px;"></i></a>
						</div>
    				</div>
				</div>
    		</div>
@endsection