<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Quản lý địa điểm</title>
</head>

<body>

<h1>QUẢN LÝ ĐỊA ĐIỂM</h1>

<a href="/admin/places/create">
    Thêm địa điểm
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Tên</th>
    <th>Địa chỉ</th>
    <th>Hành động</th>
</tr>

@foreach($places as $place)

<tr>

    <td>{{ $place->id }}</td>

    <td>{{ $place->name }}</td>

    <td>{{ $place->address }}</td>

    <td>

        <a href="/admin/places/edit/{{ $place->id }}">
            Sửa
        </a>

        |

        <a href="/admin/places/delete/{{ $place->id }}">
            Xóa
        </a>

    </td>

</tr>

@endforeach

</table>

</body>
</html>