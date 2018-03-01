@extends('layouts.app')

@section('content')
@include('admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Update Category:{{$categories->name}} 
		</div>
		<div class="panel-body">
			<form action="{{route('category.update',['id'=>$categories->id])}}" method="post">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" value="{{$categories->name}}" class="form-control">
					</div>
						
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Update Category</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop