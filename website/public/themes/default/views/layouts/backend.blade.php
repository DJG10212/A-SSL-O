<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield('title') &mdash; Website</title>

        <link rel="stylesheet" href="{{ theme('css/backend.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="{{ theme('js/all.js') }}"></script> 
    </head>
    <body>
        <nav class="navbar navbar-static-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a href="/" class="navbar-brand">Website</a></div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('backend.users.index') }}">Users</a></li>
                    <li><a href="{{ route('backend.pages.index') }}">Pages</a></li>
                    <li><a href="{{ route('backend.blog.index') }}">Listings</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><span class="navbar-text">Hello, {{ $admin->name }}</span></li>
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>@yield('title')</h3>
                    
                    @if($errors->any())
                               <div class="alert alert-danger">
                                   <strong>We found some errors!</strong>
                                   
                                   <ul>
                                       @foreach($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>                      
                               </div>
                            @endif
                            
                            @if($status)
                                <div class="alert alert-info">
                                    {{ $status }}
                                </div>
                            @endif
                    
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>