<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            background-color: #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
@php
    $stt = 1;

@endphp

<body>
    <h1>Danh sách Sản Phẩm</h1>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>id_user</th>
                <th>fullname</th>
                <th>email</th>
                <th>phone number</th>
                <th>address</th>
                <th>note</th>
                <th>order date</th>
                <th>total money</th>

            </tr>
        </thead>

        <tbody>
            <a href="{{ route('admin.checkout.clear') }}" class="btn btn-danger">Xóa tất cả sản phẩm</a>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $stt }}</td>
                    <td>{{ $product->user_id }}</td>
                    <td>{{ $product->fullname }}</td>
                    <td>{{ $product->email }}</td>
                    <td>{{ $product->phone_number }}</td>
                    <td>{{ $product->address }}</td>
                    <td>{{ $product->note }}</td>
                    <td>{{ $product->order_date }}</td>
                    <td>{{ number_format($product->total_money) }}</td>



                </tr>

                @php
                    $stt++;
                @endphp
            @endforeach

        </tbody>
    </table>
</body>

</html>
