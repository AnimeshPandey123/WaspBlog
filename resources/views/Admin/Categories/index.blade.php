@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading">
 				Categories
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			<th>
 				Category name
 			</th>
 			<th>
 				Editing
 			</th>
 			<th>
 				Deleting
 			</th>
 		</thead>
 			<tbody>
 				@if(count($categories)>0)
 				
 				@foreach($categories as $category)
 				<tr>
 					<td>
 						{{$category->name}}
 					</td>
 					<td>
 						<a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-xs btn-info">
 							Edit

 						</a>
 					</td>
 					<td>
 						<a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-xs btn-danger">
 							Delete
 						</a>
 					</td>
 				</tr>
 				
 				@endforeach 
 				@else
 				<tr>
 					<th colspan="5" class="text-center">
 						No Categories yet
 						</th>
 					
 				</tr>
 				@endif
 			</tbody>


 			</table>	
 			</div>
 			
 		</div>
 		

@stop