<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog | WASP</title>

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

    <link rel="stylesheet" type="text/css" href=" {{ asset('css/style.min.css') }} ">
    @yield('styles')   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #2980b9;color:#fff;">
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
                    <a class="navbar-brand" href="{{route('home')}}" style="color:#fff;">
                        Wasp Blog | Admin Panel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="color:#fff;">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" style="color:#fff;">Login</a></li>
                            <li><a href="{{ route('register') }}"  style="color:#fff;">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" style="color:#fff;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
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
                         <li class="list-group-item sido bg-primary" style="background-color:#3498db;color:#fff;border:1px solid #3498db">
                            <i class="fa fa-dashboard"></i>&nbsp;
                            <a href=" {{route('home')}} " style="color:#fff;">Dashboard</a>
                        </li>
                     
                        <li class="list-group-item sido">
                            <a href=" {{route('post.create')}} " class="walter">
                                <i class="fa fa-file-text"></i>&nbsp;
                                Create New Post
                            </a>
                        </li> 
                          <li class="list-group-item sido">
                            <a href=" {{route('posts')}} " class="walter">
                                <i class="fa fa-files-o"></i>&nbsp;
                                All posts
                            </a>
                        </li> 
                         <li class="list-group-item sido">
                            <a href=" {{route('documentations')}} " class="walter">
                                <i class="fa fa-files-o"></i>&nbsp;
                                All Documentations
                            </a>
                        </li> 
                         <li class="list-group-item sido">
                            <a href=" {{route('changelogs')}} " class="walter">
                                <i class="fa fa-files-o"></i>&nbsp;
                                All Changelogs
                            </a>
                        </li>
                        <li class="list-group-item sido">
                            <a href=" {{route('changelog.create')}} " class="walter">
                                <i class="fa fa-files-o"></i>&nbsp;
                                Create Changelogs
                            </a>
                        </li>
                        <li class="list-group-item sido">
                            <a href=" {{route('categories')}} " class="walter">
                                <i class="fa fa-map-signs"></i>&nbsp;
                                Categories
                            </a>
                        </li>
                       
                         <li class="list-group-item sido">
                            <a href="{{route('projects')}}" class="walter">
                                <i class="fa fa-clipboard"></i>&nbsp;
                                All projects
                            </a>
                        </li> 
                        <li class="list-group-item sido">
                            <a href="{{route('project.create')}}" class="walter">
                                <i class="fa fa-clipboard"></i>&nbsp;
                                Create projects
                            </a>
                        </li> 

                        
                        
                        <li class="list-group-item sido">
                            <a href=" {{route('tags')}} " class="walter">
                                <i class="fa fa-tags"></i>&nbsp;
                                Tags
                            </a>
                        </li> 

                        <li class="list-group-item sido">
                            <a href=" {{route('tag.create')}} " class="walter">
                                <i class="fa fa-plus-circle"></i>&nbsp;
                                Create Tags
                            </a>
                        </li> 

                        <li class="list-group-item sido">
                            <a href=" {{route('post.trashed')}} " class="walter">
                                <i class="fa fa-trash"></i>&nbsp;
                                Trashed posts
                            </a>
                        </li>
                        
                        <li class="list-group-item sido">
                            <a href=" {{route('message')}} " class="walter">
                                <i class="fa fa-envelope"></i>&nbsp;
                                Messages
                            </a>
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
