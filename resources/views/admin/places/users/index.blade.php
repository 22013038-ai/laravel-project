<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>

<h1>DANH SÁCH USER</h1>

@foreach($users as $user)

<p>

{{ $user->name }}

-

{{ $user->email }}

</p>

<hr>

@endforeach

</body>
</html>