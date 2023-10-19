<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        select,
        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            margin-top: 10px;
            cursor: pointer;
        }

        select {
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Thêm Sản Phẩm</h1>
    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="category_id">Danh mục:</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="title">Tên sản phẩm:</label>
        <input type="text" name="title" id="title" required>

        <label for="price">Giá:</label>
        <input type="number" name="price" id="price" required>

        <label for="discount">Giảm giá (%):</label>
        <input type="number" name="discount" id="discount">

        <label for="thumnail">Ảnh sản phẩm:</label>
        <input type="file" name="thumnail" id="thumnail">

        <label for="description">Mô tả:</label>
        <textarea name="description" id="description"></textarea>

        <button type="submit">Thêm Sản Phẩm</button>
    </form>
</body>

</html>
