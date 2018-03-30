@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
			<i class="fa fa-edit"></i>&nbsp;
			Edit the post: {{$post->title}}
		</div>
		<div class="panel-body">
			<form action="{{route('post.update',['id'=>$post->id])}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="title">Edit Title</label>
						<input type="text" name="title" class="form-control boxe" value="{{$post->title}}">
					</div>
						<div class="form-group">
						<label for="category">Select a category</label>
						<select name="category_id" id="category" class="form-control boxe"> 
							@foreach($categories as $category)
								<option value="{{ $category->id }}"

										@if($post->category->id==$category->id)
											selected
										@endif
									>{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
						
					<div class="form-group">
						<label for="feature">Featured Image</label>
						<input type="file" name="featured" class="form-control boxe">
						<div class="form-group">
							<label for="tags">Select Tags</label>
								@foreach($tags as $tag)
						<div class="checkbox">
 						 <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
 						 		@foreach($post->tags as $t)
 						 			@if($tag->id==$t->id)
 						 				checked
 						 			@endif
 						 		@endforeach

 						 	>{{$tag->tag}}</label>
 						</div>
 						 @endforeach
					</div> 
					</div>
						<div class="form-group">
						<label for="content">Edit Content</label>
						<textarea name="content" id="content" cols="5" rows="10" class="form-control boxe" >{{$post->content}}</textarea>
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