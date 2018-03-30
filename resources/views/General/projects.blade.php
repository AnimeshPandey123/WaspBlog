@extends('General.index2')
@section('content')


		<div class="container">
			<h1 class="text-center text-info">Projects</h1>
			<br><br>
			<div class="row">
				@foreach($projects as $project)
				<div class="col-lg-6 col-md-6 col-sm-12 project">
					<h3 class="text-{{$progress[$loop->index]}} spanis-{{$loop->index}}">
						<i class="fa fa-{{$icons[$loop->index]}}"></i>&nbsp;&nbsp;
						{{$project->title}}
					</h3><br>
					{!!$project->description!!}
					<br><br>
					<div class="progress">
						<div class="progress-bar progress-bar-{{$progress[$loop->index]}}" role="progressbar" style="width:{{{ $project['status'] }}}%;"></div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>

    @stop
    @yield('scripts')

