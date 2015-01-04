<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title  itemprop="name">Test Website</title>
    {{ HTML::style('css/main.css') }}
    {{ HTML::script('js/jquery.js') }}
        
  </head>  
  <body>
    <div class="container">
      @yield('content')
    </div>
      
      @yield('script')
  </body>
</html>