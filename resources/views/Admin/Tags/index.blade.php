@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;"> 
 				<i class="fa fa-tags"></i>&nbsp;
 				Tags
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			<th>
 				Tags name
 			</th>
 			<th>
 				
 			</th>
 			<th>
 				
 			</th>
 		</thead>
 			<tbody>
 				@if(count($tags)>0)
 				
 				@foreach($tags as $tag)
 				<tr>
 					<td>
 						{{$tag->tag}}
 					</td>
 					<td>
 						<a href="{{route('tag.edit',['id'=>$tag->id])}}" class="btn btn-xs btn-info blueboi">
 							<i class="fa fa-edit"></i>&nbsp;
 							Edit
 						</a>
 					</td>
 					<td>
 						<a href="{{route('tag.delete',['id'=>$tag->id])}}" class="btn btn-xs btn-danger redboi">
 							<i class="fa fa-trash"></i>&nbsp;
 							Delete
 						</a>
 					</td>
 				</tr>
 				
 				@endforeach 
 				@else
 				<tr>
 					<th colspan="5" class="text-center">
 						No tags yet
 						</th>
 					
 				</tr>
 				@endif
 			</tbody>


 			</table>	
 			</div>
 			
 		</div>
 		

@stop