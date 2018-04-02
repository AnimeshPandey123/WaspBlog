@extends('General.index2')
@section('content')
		<div class="container downloads">
			<div class="row">
            @if($post)
				<div class="col-9" style="">
					<h4 class="text-info">{{$post['title']}}</h4>
					<br>
					<i class="fa fa-user"></i>{{$post['name']}}<br><br>
					<ul>
						{!!$post['description']!!}
					</ul>
				</div>
                @else
                <div class="col-9" style="">
                    <h4 class="text-info">No such documents</h4>
                </div>
				@endif
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 daily" style="box-shadow:0px 0px 1px #b5b5b5;">
					<h4 class="info-title"><i class="fa fa-file"></i>&nbsp;&nbsp;Documentation</h4>
					<div class="doc_links">
						@foreach($doc as $docs)
						<a href="{{route('documentation',['id'=>$docs->id])}}" class="links">{{$docs->title }}</a><br><br>
						@endforeach
					</div>
				</div>
			</div>
		</div>

	
    @stop
    @yield('scripts')

</html>