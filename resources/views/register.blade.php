<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>ĐĂNG KÝ</h1>

@if($errors->any())

<div style="color:red">

@foreach($errors->all() as $error)

<p>{{ $error }}</p>

@endforeach

</div>

@endif

<form method="POST" action="/register">

@csrf

<input type="text" name="name" placeholder="Họ tên">

<br><br>

<input type="text" name="username" placeholder="Username">

<br><br>

<input type="password" name="password" placeholder="Password">

<br><br>

<button type="submit">
Register
</button>

</form>

</body>
</html>