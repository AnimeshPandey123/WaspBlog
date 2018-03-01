@extends('General.index')
@section('content')
		<br><br><br><br>

		<div class="container">
			<h1 class="text-center text-info">Projects</h1>
			<br><br>
			<div class="row">
				@foreach($projects as $project)
				<div class="col-lg-6 col-md-6 col-sm-12 project">
					<h3 class="text-danger">

						<i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;
						{{$project->title}}
					</h3><br>
					{!!$project->description!!}
					<br><br>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" style="width:{{{ $project['status'] }}}%;"></div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>

		<br><br>
    	
    		@endsection