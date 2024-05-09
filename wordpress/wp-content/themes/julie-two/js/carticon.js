// Xác định phần tử biểu tượng giỏ hàng
var cartCountElement = document.getElementById("cart-count");

// Lấy số lượng sản phẩm từ thuộc tính data của phần tử biểu tượng giỏ hàng
var cartItemCount = parseInt(cartCountElement.getAttribute("data-item-count"));

// Kiểm tra nếu giá trị không phải là một số nguyên hợp lệ
if (isNaN(cartItemCount)) {
    // Nếu không phải, gán giá trị mặc định là 0
    cartItemCount = 0;
}

// Function để cập nhật số lượng sản phẩm trong biểu tượng giỏ hàng
function updateCartItemCount(newCount) {
    // Cập nhật số lượng sản phẩm trong biểu tượng giỏ hàng
    cartCountElement.innerText = newCount;
    // Cập nhật giá trị thuộc tính data để sử dụng cho lần tiếp theo
    cartCountElement.setAttribute("data-item-count", newCount);
} 

// Gọi function để cập nhật số lượng ban đầu
updateCartItemCount(cartItemCount);

// Thêm sự kiện lắng nghe khi xóa sản phẩm
document.addEventListener("DOMContentLoaded", function() {
    var deleteButtons = document.querySelectorAll(".btn-delete-item");

    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Giảm số lượng sản phẩm đi 1 khi xóa sản phẩm
            cartItemCount -= 1;
            // Cập nhật số lượng sản phẩm trong biểu tượng giỏ hàng
            updateCartItemCount(cartItemCount);
        });
    });
});
