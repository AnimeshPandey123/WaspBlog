@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
			<i class="fa fa-edit"></i>&nbsp;
			Edit the Changelog: {{$change->title}}
		</div>
		<div class="panel-body">
			<form action="{{route('changelog.update',['id'=>$change->id])}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="title">Edit Title</label>
						<input type="text" name="title" class="form-control boxe" value="{{$change->title}}">
					</div>
					<div class="form-group">
						<label for="project">Select a project</label>
						<select name="project_id" id="project" class="form-control boxe"> 
							@foreach($projects as $project)
								<option value="{{ $project->id }}"

										@if($change->project->id==$project->id)
											selected
										@endif
									>{{ $project->title }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="description">Edit description</label>
						<textarea name="description" id="content" cols="5" rows="10" class="form-control boxe" >{{$change->description}}</textarea>
					</div>
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success greenboi" type="submit" >
								<i class="fa fa-save"></i>&nbsp;
								Update
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