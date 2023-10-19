$(document).ready(function () {
    $("#search").on("keyup", function () {
        let searchTerm = $(this).val();
        searchProducts(searchTerm);
    });

    function searchProducts(searchTerm) {
        console.log("Search term: " + searchTerm);
        $.get(
            "{{ route('search') }}",
            {
                search: searchTerm,
            },
            function (data) {
                console.log(data);
                displayProducts(data.products);
            }
        );
    }

    function displayProducts(products) {
        let productRows = "";
        let stt = 1;
        if (products && products.length > 0) {
            products.forEach(function (product) {
                productRows += `
                <tr>
                    <td>${stt}</td
                        <td></td>
                    <td>${product.id}</td>
                    <td>${product.title}</td>
                    <td>${number_format(product.price)} VND</td>
                    <td>${product.discount}</td>
                    <td>${product.description}</td>
                    <td>
                        <button>sửa</button>
                        <button>xóa</button>
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
        $(".product-list").html(productRows);
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        number = (number + "").replace(/[^0-9+\-Ee.]/g, "");
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = typeof thousandsSep === "undefined" ? "," : thousandsSep,
            dec = typeof decPoint === "undefined" ? "." : decPoint,
            s = "",
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return "" + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || "").length < prec) {
            s[1] = s[1] || "";
            s[1] += new Array(prec - s[1].length + 1).join("0");
        }
        return s.join(dec);
    }
});
