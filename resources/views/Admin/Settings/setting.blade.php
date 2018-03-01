@extends('layouts.app')

@section('content')
@include('admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit blog setting
		</div>
		<div class="panel-body">
			<form action="{{route('settings.update')}}" method="post">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="name">Site Name</label>
						<input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control">
					</div>
					<div class="form-group">
						<label for="name">Contact Name</label>
						<input type="text" name="contact_name" value="{{$settings->contact_name}}" class="form-control">
					</div>
					<div class="form-group">
						<label for="adress">Address</label>
						<input type="text" name="address" class="form-control" value="{{$settings->address}}" >
					</div>
					<div class="form-group">
						<label for="contact_number">Contact phone</label>
						<input type="text" name="contact_number" class="form-control" value="{{$settings->contact_number}}" >
					</div>
					<div class="form-group">
						<label for="contact_email">Contact Email</label>
						<input type="text" name="contact_email" class="form-control" value="{{$settings->contact_email}}" >
					</div>
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Update site settings</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop