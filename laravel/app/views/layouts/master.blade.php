<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title  itemprop="name">Coderiders - Accountant</title>
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('packages/bootstrap/css/bootstrap-theme.css') }}
    {{ HTML::style('css/main.css') }}
    
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('packages/bootstrap/js/bootstrap.js') }}
    
  </head>  
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Coderiders Accountant</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li @if(Request::segment(1) == '') class="active" @endif>{{ HTML::link('/', 'Statistics', array(), false)}}</li>
            <li @if(Request::segment(1) == 'payin') class="active" @endif>{{ HTML::link('/payin', 'Մուտքային', array(), false)}}</li>
            <li @if(Request::segment(1) == 'payout') class="active" @endif>{{ HTML::link('/payout', 'Ելքային', array(), false)}}</li>
<!--            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
    <div class="container">
      @yield('content')
    </div>
      
      @yield('script')
  </body>
</html>