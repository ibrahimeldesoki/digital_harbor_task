<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags
        ========================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content=" ">
        <meta name="author" content="Feidi">
        <meta name="contact" content="info@example.com">
        <meta name="contactNetworkAddress" CONTENT="abdo23970@gmail.com">


        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title')</title>


        <!-- Base & Vendors
        ========================== -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <!-- Site Style
        ========================== -->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
        <script>
            var url = "{{ url('/') }}";
            base_url =  url;
        </script>
        @yield('style')
    </head>
    <body>
        @include('header')
                <div class="contain">
                    <div class="row">
                        <div class="col-lg-3">
                            @include('sidebar')
                        </div>
                        <div class="col-lg-9">
                            <div class="page_body">
                                @yield('content')
                            </div>
                        </div>

                    </div>
                </div>
  @include('footer')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        @yield('scripts')
    </body>
</html>
