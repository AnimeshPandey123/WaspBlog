@extends('layouts.app')

@section('content')
@include('admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Create Projects
		</div>
		<div class="panel-body">
			<form action="{{route('project.update',['id'=>$project->id])}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" value="{{$project->title}}">
					</div>
					<div class="newslider">
						<label>Status</label>
						<p>Percentage of Completion: <span id="demo" for="status"></span></p>
  						<input type="range" min="1" max="100" class="nslid" id="myRange" name="status" value="{{$project->status}}">
  							
							</div>
						 
					<div class="form-group">
						<label for="content"></label>
						<textarea name="content" id="content" cols="10" rows="10" class="form-control">{!!$project->description!!}</textarea>
					</div>
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Update Now</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@stop
@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

	<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>

@stop
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<style>
.newslidernslid {
    width: 100%;
}

.nslid {
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.nslid:hover {
    opacity: 1;
}

.nslid::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}

.nslid::-moz-range-thumb {
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}
</style>
@stop

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

	<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>
  <script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

nslid.oninput = function() {
  output.innerHTML = this.value;
}
</script>

@stop