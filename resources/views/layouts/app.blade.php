<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://127.0.0.1:8000/posts" />
    <meta property="og:type" content="posts" />
    <title>Laravel Livewire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <!-- flash message -->
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <!-- end flash message -->

                <!-- component -->
                @yield('content')
                <!-- end component -->

            </div>
        </div>
    </div>
    @livewireScripts
    {{--  <script src="{{ mix('js/app.js') }}"></script>  --}}
</body>
</html>