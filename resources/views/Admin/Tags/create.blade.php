@extends('layouts.app')

@section('content')
@include('Admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
			<i class="fa fa-plus"></i>&nbsp;
			Create New Tags
		</div>
		<div class="panel-body">
			<form action="{{route('tag.store')}}" method="post">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="tag">Name</label>
						<input type="text" name="tag" class="form-control boxe">
					</div>
						
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success greenboi" type="submit" >
								<i class="fa fa-save"></i>&nbsp;Store Tags
							</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop