<!DOCTYPE html>
<html>
<head>
    <title>Website Du Lịch</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" href="/">
            Travel Website
        </a>

        <div>

            <a href="/" class="btn btn-light">
                Trang chủ
            </a>

            <a href="/places" class="btn btn-light">
                Địa điểm
            </a>

            @if(session('isLogin'))

                <a href="/dashboard" class="btn btn-warning">
                    Dashboard
                </a>

                <a href="/logout" class="btn btn-danger">
                    Logout
                </a>

            @else

                <a href="/login" class="btn btn-success">
                    Login
                </a>

                <a href="/register" class="btn btn-primary">
                    Register
                </a>

            @endif

        </div>

    </div>

</nav>

<div class="container mt-4">

    @yield('content')

</div>

</body>
</html>