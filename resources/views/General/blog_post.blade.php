@extends('General.index2')
@section('content')

		<br><br>

		<div class="container downloads">
			<div class="row">
			@if($post)
				<div class="col-lg-9 col-md-9 col-sm-12" style="">
					<h4 class="text-info">{{$post['title']}}</h4><br>
					<div class="smallboi">

						<i class="fa fa-user"></i>&nbsp;{{$post['name']}}
						&nbsp;&nbsp;&nbsp;
						<i class="fa fa-clock"></i>{{$post['created_at']}}
						&nbsp;&nbsp;&nbsp;
						@foreach($tags as $tag)
						<span class="label label-{{$progress[$loop->index]}}">{{$tag->tag}}</span>
						@endforeach
					
					</div><br>

					<img src="{{asset($post['featured'])}}" style="width:100%;">
					<br><br><br>
					{!!$post['description']!!}
				</div>
				@else
				<div class="col-lg-9 col-md-9 col-sm-12" style="">
					<h4 class="text-info">No post created</h4><br>
					
				</div>
				@endif
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 daily" style="box-shadow:0px 0px 1px #b5b5b5;">
					<h4 class="info-title"><i class="fa fa-align-center"></i>&nbsp;&nbsp;Older Posts</h4>
					<div class="doc_links">
						@foreach($lpost as $post)
						<a href="{{route('postone',['id'=>$post->id])}}" class="links">{{$post->title}} </a><br><br>
						@endforeach
					
					</div>
				</div>
			</div>
		</div>

		<br><br>
    	
    		@endsection