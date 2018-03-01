@extends('layouts.app')
@section('content')
 
 	
 		<div class="panel panel-primary">
 			<div class="panel-heading">
 				Sent Message
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			
 			<th>
 				Name
 			</th>
 			<th>
 				Message
 			</th>
 			<th>
 				Show
 			</th>
 			<th>
 				Trash
 			</th>
 		</thead>
 			<tbody>
 				@if(count($messages)>0)
 				
 				@foreach($messages as $message)
 				<tr>
 				<td>{{$message->name}}</td>
 				<td>{{$message->description}}</td>
 				<td>
						<a href="{{route('message.show',['id'=>$message->id])}}" class="btn btn-xs btn-info" id="show" > Show </a>
 				</td>
 				<td>
 				<a href="{{route('message.delete',['id'=>$message->id])}}" class="btn btn-xs btn-danger" > Trash </a>
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
 		
<script type="text/javascript">
	$document.ready(function(){
			$(#show).click(function(){
				$get.('show',function(data){
						console.log(data)
				});

			});
	});
</script>
@stop