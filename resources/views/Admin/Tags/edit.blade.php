@extends('layouts.app')

@section('content')
@include('admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Update Tag:{{$tag->name}} 
		</div>
		<div class="panel-body">
			<form action="{{route('tag.update',['id'=>$tag->id])}}" method="post">
				{{ csrf_field() }}
					<div class="form-group">
						<label for="tag">Name</label>
						<input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
					</div>
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Update tags</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop