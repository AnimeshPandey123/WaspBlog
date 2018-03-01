@extends('General.index')
@section('content')

		<br><br><br><br>

		<div class="container downloads">
			<form action="{{route('contact.store')}}" method="post">
				
			{{csrf_field()}}

			<h3 class="text-success">
                @include('Admin.includes.error')
				<i class="fa fa-envelope"></i>&nbsp;&nbsp;
				Contact Us

			</h3><br><br>
			<div class="col-md-6">
        		<div class="form-group">
            		<input type="text" class="form-control" placeholder="Your Full Name" name="name">
        		</div>
    		</div>
    		<div class="col-md-6">
        		<div class="form-group">
            		<input type="text" class="form-control" placeholder="Your Email Address" name="email">
        		</div>
    		</div>
    		<div class="col-md-6">
        		<div class="form-group">
            		<textarea class="form-control" rows="4" placeholder="Tell us your thoughts" name="description"></textarea>
        		</div>
    		</div>
    		<button class="btn btn-success btn-round" style="margin-left:15px;">
    			<i class="fa fa-paper-plane"></i>Send
    		</button>
    	</form>
		</div>

		<br><br>
    	
    	@endsection