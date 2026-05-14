<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>ĐĂNG NHẬP</h1>

@if(session('success'))
<p style="color:green">
{{ session('success') }}
</p>
@endif

@if(session('error'))
<p style="color:red">
{{ session('error') }}
</p>
@endif

<form method="POST" action="/login">

@csrf

<input type="text" name="username" placeholder="Username">

<br><br>

<input type="password" name="password" placeholder="Password">

<br><br>

<button type="submit">
Login
</button>

</form>

<br>

<a href="/register">
Đăng ký tài khoản
</a>

</body>
</html>