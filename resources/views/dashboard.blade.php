<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>ĐĂNG NHẬP THÀNH CÔNG</h1>

<p>Họ tên: {{ session('name') }}</p>

<p>Username: {{ session('username') }}</p>

<p>Email: {{ session('email') }}</p>

<p>Thời gian đăng nhập: {{ session('login_time') }}</p>

<p>Role: {{ session('role') }}</p>

<br>

<a href="/logout">
    Logout
</a>

</body>
</html>