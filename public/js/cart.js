// public/js/cart.js

function addToCart(productId) {
    // Gửi yêu cầu AJAX đến máy chủ để thêm sản phẩm vào giỏ hàng
    $.ajax({
        type: "POST",
        url: "/add-to-cart", // Điều này cần phải tương ứng với tên tuyến đường bạn đã định nghĩa trong Laravel
        data: {
            product_id: productId,
            quantity: 1, // Số lượng bạn muốn thêm vào giỏ hàng
        },
        success: function (response) {
            // Xử lý kết quả trả về từ máy chủ
            if (response.success) {
                alert("Sản phẩm đã được thêm vào giỏ hàng.");
            } else {
                alert("Không thể thêm sản phẩm vào giỏ hàng.");
            }
        },
        error: function () {
            alert("Đã xảy ra lỗi khi thêm sản phẩm vào giỏ hàng.");
        },
    });
}
