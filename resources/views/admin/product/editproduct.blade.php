<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            text-align: center
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            width: 100%;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Style form button on hover */
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    {{-- @extends('layout')

    @section('content') --}}
    <h1>Edit Product</h1>

    <form action="{{ route('admin.updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('GET')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $product->title }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="number" name="discount" id="discount" value="{{ $product->discount }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
    {{-- @endsection --}}
</body>

</html>
