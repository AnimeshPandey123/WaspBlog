@extends('layouts.app')

@section('content')
@include('admin.includes.error')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit Users
		</div>
		<div class="panel-body">
			<form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" value="{{$user->name}}">
					</div>
							<div class="form-group">
						<label for="name">Email</label>
						<input type="email" name="email" class="form-control" value="{{$user->email}}">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="avatar">Upload new avatar</label>
						<input type="file" name="avatar" class="form-control" >
					</div>
					<div class="form-group">
						<label for="facebook">Facebook Profile</label>
						<input type="text" name="facebook" class="form-control" >
					</div>
					<div class="form-group">
						<label for="youtube">Youtube Profile</label>
						<input type="text" name="youtube" class="form-control">
					</div>

					<div class="form-group">
						<label for="about">About you</label>
						<textarea class="form-control" name="about" id="about" cols="6" rows="6" >
							
						</textarea>

					</div>
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Update User</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop