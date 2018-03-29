@extends('General.index2')
@section('content')

		<div class="container downloads">
			<form action="{{route('contact.store')}}" method="post">
				
			{{csrf_field()}}
           
			<h3 class="text-success">
               
				<i class="fa fa-envelope"></i>&nbsp;&nbsp;
				Contact Us

			</h3><br><br>
			<div class="col-md-6">
        		<div class="form-group">
            		<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your Full Name" name="name" required autofocus>
                    @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        		</div>
    		</div>
            <br><br>
    		<div class="col-md-6">
        		<div class="form-group">
            		<input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your Email Address" name="email" required autofocus>
        		</div>
                 @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
    		</div>
    		<div class="col-md-6">
        		<div class="form-group">
            		<textarea class="form-control{{$errors->has('description') ? ' is-invalid' : '' }}" 
                    rows="4" placeholder="Tell us your thoughts" name="description" required autofocus></textarea>
                     @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
        		</div>
    		</div>
    		<button class="btn btn-success btn-round" style="margin-left:15px;">
    			<i class="fa fa-paper-plane"></i>Send
    		</button>
    	</form>
		</div>

		<br><br>
    	@stop
    	
    @yield('scripts')

