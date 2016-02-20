<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &mdash; Catchy Brand</title>

        <link rel="stylesheet" href="{{ theme('css/frontend.css') }}">

    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                     <a href="/" class="navbar-brand">Cool Logo
                     </a>
                </div>               
                <ul class="nav navbar-nav">
					@include('partials.navigation')
               </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">@yield('content')</div>
            </div>
        </div>     
    </body>
</html>