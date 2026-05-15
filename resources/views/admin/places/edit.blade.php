<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Sửa địa điểm</title>
</head>

<body>

<h1>SỬA ĐỊA ĐIỂM</h1>

<form method="POST"
      action="/admin/places/update/{{ $place->id }}">

    @csrf

    <div>Tên địa điểm</div>

    <input type="text"
           name="name"
           value="{{ $place->name }}">

    <br><br>

    <div>Mô tả</div>

    <textarea name="description">{{ $place->description }}</textarea>

    <br><br>

    <div>Địa chỉ</div>

    <input type="text"
           name="address"
           value="{{ $place->address }}">

    <br><br>

    <button type="submit">
        Cập nhật
    </button>

</form>

<br>

<a href="/admin/places">
    Quay lại danh sách
</a>

</body>
</html>