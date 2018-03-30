@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
 				Projects 
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			
 			<th>
 				Project Name
 			</th>
 			<th>
 				% Completed
 			</th>
 			<th>
 				
 			</th>
 			<th>
 				
 			</th>
 		</thead>
 			<tbody>
 				@if(count($projects)>0)
 				
 				@foreach($projects as $project)
 				<tr>
 				<td>{{$project->title}}</td>
 				<td class="text-success">{{$project->status}} %</td>
 				<td>
					<a href="{{route('project.edit',['id'=>$project->id])}}" class="btn btn-xs btn-info blueboi" > 	
						<i class="fa fa-edit"></i>&nbsp;
						Edit 
					</a>
 				</td>
 				<td>
 				<a href="{{route('project.delete',['id'=>$project->id])}}" class="btn btn-xs btn-danger redboi"> 
 					<i class="fa fa-trash"></i>&nbsp;
 					Trash 
 				</a>
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