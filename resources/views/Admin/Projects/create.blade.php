@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
			<i class="fa fa-plus"></i>&nbsp;
			Create Projects
		</div>
		<div class="panel-body">
			<form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control boxe">
					</div>

					<div class="slidecontainer">
						<label>Status</label>
						<p>Percentage of Completion: <span id="demo" for="status"></span></p>
  						<input type="range" min="1" max="100" value="50" class="slider" id="myRange" name="status">
					</div>
						 <br>
					<div class="form-group">
						<label for="content">Description</label>
						<textarea name="content" id="content" cols="10" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success greenboi" type="submit">
								<i class="fa fa-upload"></i>&nbsp;
								Post Now
							</button>
						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<style>
.slidecontainer {
    width: 100%;
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #4CAF50;
    cursor: pointer;
}

.slider::-moz-range-thumb {
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

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

@stop