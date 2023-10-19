<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #payment-options {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #payment-options button {
            margin: 5px;
        }
    </style>
</head>

<body>
    @extends('layout')

    @section('content')
        <div class="container">
            <h1>Checkout</h1>

            <form action="/checkout" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>

                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea name="note" id="note" class="form-control"></textarea>
                </div>

                {{-- <button type="submit" class="btn btn-primary">Hình thức thanh toán </button>
            <button type="submit" class="btn btn-danger">Thanh toán momo</button>
            <button type="submit" class="btn btn-success">Thanh toán VnPay</button> --}}
                <button type="button" class="btn btn-primary" onclick="showPaymentOptions()">Các phương thức thanh
                    toán</button>
                <div id="payment-options" style="display: none;">
                    <a class="btn btn-danger" href="">Thanh toán Momo</a>
                    <a class="btn btn-success" href="{{ url('vnpay_payment') }}">
                        Thanh toán VnPay
                    </a>
                </div>





            </form>
        </div>
    @endsection
</body>

</html>

<script>
    function showPaymentOptions() {
        var paymentOptions = document.getElementById("payment-options");
        paymentOptions.style.display = "block";
    }
</script>
