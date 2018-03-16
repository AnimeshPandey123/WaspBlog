@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Create New Tags
		</div>
		<div class="panel-body">
			<form action="{{route('tag.store')}}" method="post">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="tag">Name</label>
						<input type="text" name="tag" class="form-control">
					</div>
						
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Store Tags</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop