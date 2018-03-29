<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wasp Blog</title>

    <!-- Styles -->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/wasp.png')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/toastr.min.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    @yield('styles')   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{route('home')}}">
                        Wasp Blog
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @if(Auth::check())

                <div class="col-lg-4">
                    <ul class="list-group">
                         <li class="list-group-item sido" style="background-color:#3498db;color:#fff;">
                            <i class="fa fa-home"></i>&nbsp;
                            <a href=" {{route('home')}} " style="color:#fff;">Home</a>
                        </li>
                     
                        <li class="list-group-item sido">
                            <i class="fa fa-file-text"></i>&nbsp;
                            <a href=" {{route('post.create')}} " class="walter">Create New Post</a>
                        </li> 
                          <li class="list-group-item sido">
                            <i class="fa fa-files-o"></i>&nbsp;
                            <a href=" {{route('posts')}} " class="walter">All posts</a>
                        </li> 
                         <li class="list-group-item sido">
                            <i class="fa fa-files-o"></i>&nbsp;
                            <a href=" {{route('documentations')}} " class="walter">All Documentations</a>
                        </li> 
                        <li class="list-group-item sido">
                            <i class="fa fa-map-signs"></i>&nbsp;
                            <a href=" {{route('categories')}} " class="walter">Categories</a>
                        </li>
                       
                         <li class="list-group-item sido">
                            <i class="fa fa-clipboard"></i>&nbsp;
                            <a href="{{route('projects')}}" class="walter">All projects</a>
                        </li> 
                        <li class="list-group-item sido">
                            <i class="fa fa-clipboard"></i>&nbsp;
                            <a href="{{route('project.create')}}" class="walter">Create projects</a>
                        </li> 

                        
                        
                        <li class="list-group-item sido">
                            <i class="fa fa-tags"></i>&nbsp;
                            <a href=" {{route('tags')}} " class="walter">Tags</a>
                        </li> 
                           <li class="list-group-item sido">
                            <i class="fa fa-plus-circle"></i>&nbsp;
                            <a href=" {{route('tag.create')}} " class="walter">Create Tags</a>
                        </li> 
                          <li class="list-group-item sido">
                            <i class="fa fa-trash"></i>&nbsp;
                            <a href=" {{route('post.trashed')}} " class="walter">Trashed posts</a>
                        </li>
                       <li class="list-group-item sido">
                            <i class="fa fa-envelope"></i>&nbsp;
                            <a href=" {{route('message')}} " class="walter">Messages</a>
                        </li>
                  

                    </ul>
                    
                </div> 
                 @endif
                <div class="col-lg-8">
                     
                    @yield('content')
                        
                    </div>  
            </div>

        </div>  
    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src=" {{asset('js/toastr.min.js')}} "></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @elseif(Session::has('nope'))
            toastr.warning("{{Session::get('nope')}}")
        @endif

    </script>
  
    @yield('scripts')
</body>
</html>
