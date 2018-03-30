@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
			Update Tag:{{$tag->name}} 
		</div>
		<div class="panel-body">
			<form action="{{route('tag.update',['id'=>$tag->id])}}" method="post">
				{{ csrf_field() }}
					<div class="form-group">
						<label for="tag">Name</label>
						<input type="text" name="tag" value="{{$tag->tag}}" class="form-control boxe">
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