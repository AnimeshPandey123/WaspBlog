@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
			Create New Category
		</div>
		<div class="panel-body">
			<form action="{{route('category.store')}}" method="post">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control boxe">
					</div>
						
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success greenboi" type="submit" >
								<i class="fa fa-save"></i>&nbsp;
								Store Category
							</button>
						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop