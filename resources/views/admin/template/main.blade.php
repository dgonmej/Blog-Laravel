<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blog') | Panel de administración</title>
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