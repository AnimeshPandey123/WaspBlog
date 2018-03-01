@extends('layouts.app')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">Welcome to Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are now logged in!
                </div> 
            </div>
        
@endsection
