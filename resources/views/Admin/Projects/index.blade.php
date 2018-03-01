@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading">
 				Published posts
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			
 			<th>
 				Title
 			</th>
 			<th>
 				Status
 			</th>
 			<th>
 				Edit
 			</th>
 			<th>
 				Trash
 			</th>
 		</thead>
 			<tbody>
 				@if(count($projects)>0)
 				
 				@foreach($projects as $project)
 				<tr>
 				<td>{{$project->title}}</td>
 				<td>{{$project->status}}</td>
 				<td>
						<a href="{{route('project.edit',['id'=>$project->id])}}" class="btn btn-xs btn-info" > Edit </a>
 				</td>
 				<td>
 				<a href="{{route('project.delete',['id'=>$project->id])}}" class="btn btn-xs btn-danger" > Trash </a>
 			</td>
 				</tr>
 				

 				@endforeach
 			@else
 			<tr>
 					<th colspan="5" class="text-center">
 						No project
 						</th>
 					
 				</tr>
 				@endif
 			</tbody>


 			</table>	
 			</div>
 			
 		</div>
 		

@stop