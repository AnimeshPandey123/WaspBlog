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
						<a class="btn btn-xs btn-info" id="show"> Show </a>
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
 			 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" id="myModal">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
 		</div>
 		

@stop
@section('scripts')
  <script type="text/javascript">
    $('show').click(function() {
  console.log('#someButton was clicked');
  // do something
});
    	console.log('#someButton was clicked');
    document.getElementById("show").addEventListener("click", function(){


        console.log('dataaa');
      });
        //var show = document.getElementById('show');
    
    
    
       

    
</script>
@stop