<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Thêm địa điểm</title>
</head>

<body>

<h1>THÊM ĐỊA ĐIỂM</h1>

<form method="POST"
      action="/admin/places/store">

    @csrf

    <div>Tên địa điểm</div>

    <input type="text" name="name">

    <br><br>

    <div>Mô tả</div>

    <textarea name="description"></textarea>

    <br><br>

    <div>Địa chỉ</div>

    <input type="text" name="address">

    <br><br>

    <button type="submit">
        Thêm
    </button>

</form>

<br>

<a href="/admin/places">
    Quay lại danh sách
</a>

</body>
</html>