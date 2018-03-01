@extends('layouts.app')

@section('content')
@include('admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Create Projects
		</div>
		<div class="panel-body">
			<form action="{{route('project.update')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="title">{{$project->title}}</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label for="status">{{$project->status}}</label>
						<input type="text" name="status" class="form-control">
					</div>		 
					<div class="form-group">
						<label for="content">{{$project->description}}</label>
						<textarea name="content" id="content" cols="10" rows="10" class="form-control"></textarea>
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