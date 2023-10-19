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

        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

        body {
            background: #f2f2f2;
            font-family: 'Open Sans', sans-serif;
        }

        .search {
            width: 100%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 100%;
            border: 3px solid #00B4CC;
            border-right: none;
            padding: 5px;
            height: 20px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9DBFAF;
        }

        .searchTerm:focus {
            color: #00B4CC;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #00B4CC;
            background: #00B4CC;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }


        .edit-button {
            margin-right: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            text-decoration: none;
            cursor: pointer;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        .delete-button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            text-decoration: none;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c82333;
        }



        a {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            width: fit-content;
            border: none;
            border-radius: 4px;
            padding: 10px;
            margin-top: 10px;
        }

        a:hover {
            background-color: #0056b3;
        }

        .fa-search {
            font-size: 18px;
            margin-right: 5px;
        }
    </style>
</head>
@php
    $stt = 1;

@endphp

<body>
    <h1>Danh sách Sản Phẩm</h1>
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="wrap">
        <div class="search">
            <input type="text" id="search" placeholder="Search products">

            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>

        </div>

        <form method="POST" action="{{ route('product.add') }}">
            @csrf
            <!-- Các trường dữ liệu và nút gửi ở đây -->
            <a href="{{ route('product.add') }}">Add Product</a>

        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>giảm giá</th>
                <th>mô tả</th>
                <th>Hành động</th>

            </tr>
        </thead>


        <tbody class="product-list">
            @foreach ($products as $product)
                <tr>
                    <td>{{ $stt }}</td>
                    <td>{{ $product->title }}</td>
                    <td>
                        <img src="{{ asset($product->thumnail) }}" alt="Product Thumbnail" width="100"
                            height="100">
                    </td>

                    <td>{{ number_format($product->price) }}VND </td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->description }}</td>
                    <td style="display:flex">

                        <a href="{{ route('admin.editproduct.show', $product->id) }}" class="edit-button">Edit</a>

                        <form action="{{ route('admin.Product.delete', $product->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button"
                                onclick="return confirm('u r really delete this user ?')">Delete</button>
                        </form>
                    </td>

                </tr>
                @php
                    $stt++;
                @endphp
            @endforeach

        </tbody>
    </table>
    {{-- <form method="POST" action="{{ route('product.add') }}">
        @csrf
        <!-- Các trường dữ liệu và nút gửi ở đây -->
        <a href="{{ route('product.add') }}">Add User</a>

    </form> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                let searchTerm = $(this).val();
                searchProducts(searchTerm);
            });


            function searchProducts(searchTerm) {
                console.log("Search term: " + searchTerm);
                $.get("{{ route('search') }}", {
                    search: searchTerm
                }, function(data) {
                    console.log(data);
                    displayProducts(data.products);
                });
            }
            var products = @json($products);

            function displayProducts(products) {
                let productRows = '';
                let stt = 1;
                if (products && products.length > 0) {
                    products.forEach(function(product) {
                        productRows += `
                <tr>
                    <td>${ stt }</td
                    <td>${product.id}</td>
                    <td>${product.title}</td>
                    <td><img src="{{ '' }}/${product.thumnail}" alt="Thumnail" width="100" height="100"></td>
                    <td>${number_format(product.price)} VND</td>
                    <td>${product.discount}</td>
                    <td>${product.description}</td>
                    <td style="display:flex">
                        <a href="{{ route('admin.editproduct.show', $product->id) }}" class="edit-button">Edit</a>
                        <form action="{{ route('admin.Product.delete', $product->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button"
                                onclick="return confirm('u r really delete this user ?')">Delete</button>
                        </form>
                    </td>
                </tr>
            `;
                        stt++;
                    });
                } else {
                    // Handle the case when no products are found
                    productRows = '<tr><td colspan="6">No products found.</td></tr>';
                }
                // console.log("san pham", productRows);
                $('.product-list').html(productRows);
            }

            function number_format(number, decimals, decPoint, thousandsSep) {
                number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
                var n = !isFinite(+number) ? 0 : +number,
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep,
                    dec = (typeof decPoint === 'undefined') ? '.' : decPoint,
                    s = '',
                    toFixedFix = function(n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };
                // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || '').length < prec) {
                    s[1] = s[1] || '';
                    s[1] += new Array(prec - s[1].length + 1).join('0');
                }
                return s.join(dec);
            }
        });
    </script>
</body>

</html>
