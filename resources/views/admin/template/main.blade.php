<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Panel de administración</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('admin.template.partials.nav')

    <section class="section-admin">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong class="text-uppercase">@yield('title', 'Blog')</strong>
                </div>

                <div class="panel-body">
                    @include('flash::message')
                    @include('admin.template.partials.errors')
                    @yield('content')
                </div>
            </div>
            @include('admin.template.partials.footer')
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>