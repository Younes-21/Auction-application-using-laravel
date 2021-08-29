<!DOCTYPE html>
<html>
   <head>
        <title>Ventench</title>
    </head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css')  }}">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="{{ asset('assets/css/Astyle.css')  }}" type="text/css" >
    <link rel="stylesheet" href="{{ asset('assets/css/main1.css')  }}" type="text/css" >
   
    <body>
        @include('partials.menu')
<div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @include('partials.flash')
                </div>
            </div>
        </div>
        <div class="">
            <div class="">
                @yield('content')
            </div>

        </div>
        @include('partials.footer')
    <script src="{{ asset('assets/js/jquery.min.js')  }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')  }}"></script>
    <script src="{{ asset('assets/js/jquery-1.4.1.min.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.jcarousel.pack.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.slide.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery-func.js')  }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main1.js')  }}" type="text/javascript"></script>
    </body>
</html>