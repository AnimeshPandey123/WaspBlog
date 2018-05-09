@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading" style="background-color:#3498db;border:1px solid #3498db;">
 				Published posts
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			<th>
 				Title
 			</th>
 			<th>
 				Category
 			</th>
 			<th>
 				
 			</th>
 			<th>
 				
 			</th>
 		</thead>
 			<tbody>
 				@if(count($posts)>0)
 				
 				@foreach($posts as $post)
 				<tr>
 				<td>{{$post->title}}</td>
 				<td>{{$post->category->name}}</td>
 				<td>
						<a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-xs btn-info blueboi" > 
							<i class="fa fa-edit"></i>&nbsp;
							Edit 
						</a>
 				</td>
 				<td>
 				<a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-xs btn-danger redboi" > 
 					<i class="fa fa-trash"></i>&nbsp;
 					Trash 
 				</a>
 			</td>
 				</tr>
 				

 				@endforeach
 			@else
 			<tr>
 					<th colspan="5" class="text-center">
 						No Documentations YET
 					</th>
 					
 				</tr>
 				@endif
 			</tbody>


 			</table>
 			{{$posts->links()}}	
 			</div>
 			
 		</div>
 		

@stop