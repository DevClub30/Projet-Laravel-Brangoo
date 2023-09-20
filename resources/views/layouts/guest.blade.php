<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts --><!-- 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="/css/style2.css">
        <!-- Scripts -->
    </head>
    <body>

        <div class="container-scroller">
        
            <div class="container-fluid page-body-wrapper full-page-wrapper">
        
                <div class="content-wrapper d-flex align-items-center auth px-0">
        
                    <div class="row w-100 mx-0">
        
                        <div class="col-lg-4 mx-auto">
        
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                {{ $slot }}
                            </div>
        
                        </div>
        
                    </div>
        
                </div>
              <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        
    </body>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/"></script>
</html>
