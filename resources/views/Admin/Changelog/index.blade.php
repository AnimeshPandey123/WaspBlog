@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
 				Published Changelog
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
	 			<thead>
		 			<th>
		 				Title
		 			</th>
		 			<th>
		 				Date
		 			</th>
		 			<th>
		 				Project
		 			</th>
		 			<th>
		 				Edit
		 			</th>
		 			<th>
		 				Delete
		 			</th>
	 			</thead>
	 			<tbody>
	 				@if(count($changes)>0)
	 				
	 				@foreach($changes as $change)
	 				<tr>
		 				<td>{{$change->title}}</td>
		 				<td>{{$change->date}}</td>
		 				<td>{{$change->project->title}}</td>
		 				<td>
							<a  href="{{route('changelog.edit',['id'=>$change->id])}}"> 	<i class="fa fa-edit"></i>&nbsp;
								Edit 
							</a>
		 				</td>
		 				<td>
		 					<a  href="{{route('changelog.delete',['id'=>$change->id])}}">
		 						<i class="fa fa-trash"></i>&nbsp;
		 						Trash 
		 					</a>
		 				</td>
	 				</tr>
	 				@endforeach

	 				@else
	 				<tr>
	 					<th colspan="5" class="text-center">
							No Changelog
						</th>
	 				</tr>
	 				@endif
	 			</tbody>


 			</table>
 			{{$changes->links()}}		
 			</div>
 			
 		</div>
 		

@stop