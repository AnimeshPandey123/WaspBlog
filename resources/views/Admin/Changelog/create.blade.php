@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
			<i class="fa fa-file-text"></i>&nbsp;
			Create Changelog
		</div>
		<div class="panel-body">
			<form action="{{route('changelog.store')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control boxe">
					</div>
					<div class="form-group">
						<label for="project">Select a Project</label>
						<select name="project_id" id="project" class="form-control boxe"> 
							@foreach($projects as $project)
								<option value="{{ $project->id }}">{{ $project->title }}</option>
							@endforeach
						</select>
					</div>
					<div>
						<label for="version">Version</label>
						<input type="text" name="version" class="form-control">
					</div>
					<div class="form-group">
						<label for="date">Select a date</label>
						<input type="date" name="date" class="form-control">
					</div>
						<div class="form-group">
						<label for="desecription">Description</label>
						<textarea name="description" id="content" cols="10" rows="10" class="form-control boxe">
							{{ old('content') }}
						</textarea>
					</div>
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success greenboi" type="submit" >
								<i class="fa fa-upload"></i>
								Post Now
							</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

	<script>
    $(document).ready(function() {
        $('#content').summernote();
    });
  </script>

@stop