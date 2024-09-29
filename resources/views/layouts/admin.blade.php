<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Purchase Order App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Tambahkan CSS tambahan jika diperlukan -->
</head>
<body>
    @include('partials.admin.navbar')
    <div class="container-fluid">
        <div class="row">
            @include('partials.admin.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>
    @include('partials.admin.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Tambahkan JS tambahan jika diperlukan -->
</body>
</html>
