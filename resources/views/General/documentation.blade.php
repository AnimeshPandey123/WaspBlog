
@extends('General.index')
@section('content')
		<br><br><br><br>

		<div class="container downloads">
			<div class="row">
				<div class="col-9" style="">
					<h4 class="text-info">Digital Scrum Board - {{$post['created_at']}}</h4>
					<br>
					<i class="fa fa-user"></i>{{$post['name']}}<br><br>

					<b>Today's tasks are as follows</b> <br>
					<ul>
						{!!$post['description']!!}
					</ul>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 daily" style="box-shadow:0px 0px 1px #b5b5b5;">
					<h4 class="info-title"><i class="far fa-file"></i>&nbsp;&nbsp;Documentation</h4>
					<div class="doc_links">
						@foreach($doc as $docs)
						<a href="{{route('documentation',['id'=>$docs->id])}}" class="links">{{$docs->title }}- {{$docs->created_at}}</a><br><br>
						@endforeach
					</div>
				</div>
			</div>
		</div>

		<br><br>
    	
    	@endsection	