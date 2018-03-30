@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
 				Categories
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			<th>
 				Category name
 			</th>
 			<th>
 				
 			</th>
 			<th>
 				
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
 						<a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-xs btn-info blueboi">
 							<i class="fa fa-edit"></i>&nbsp;
 							Edit
 						</a>
 					</td>
 					<td>
 						<a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-xs btn-danger redboi">
 							<i class="fa fa-trash"></i>&nbsp;
 							Delete
 						</a>
 					</td>
 				</tr>
 				
 				@endforeach 
 				@else
 				<tr>
 					<th colspan="5" class="text-center">
 						No Categories yet my bruddha
 						</th>
 					
 				</tr>
 				@endif
 			</tbody>


 			</table>	
 			</div>
 			
 		</div>
 		

@stop