<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Social Login</title>
    <style>
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
    <!-- CSS files -->
    <link href="{{ asset('css/tabler.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-flags.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-payments.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-vendors.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/demo.min.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: " cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                @yield('content')
            </div>

        </div>
    </div>



    <footer>
        @include('layouts.footer')

    </footer>
</body>

</html>