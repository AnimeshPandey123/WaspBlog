@extends('layouts.app')
@section('styles')
<style type="text/css">
  body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
@endsection
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
 			
 

@stop
@section('scripts')
<script type="text/javascript">
    
    document.getElementById("myBtn").addEventListener("click", function(){
    alert("Hello World!");
});
    </script>
@stop
