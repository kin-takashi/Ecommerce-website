// eslint-disable-next-line no-console
document.addEventListener('DOMContentLoaded', function() {
	const deleteButtons = document.querySelectorAll('.btn-delete-item');
	deleteButtons.forEach(function(button) {
			button.addEventListener('click', function() {
					const productId = button.dataset.id;
					deleteItem(productId);
			});
	});
});

// Hàm xóa sản phẩm khỏi giỏ hàng
function deleteItem(productId) {
	const xhr = new XMLHttpRequest();
	xhr.open('POST', '/wp-content/themes/julie-two/delete_item.php', true);

	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onreadystatechange = function() {
			if (xhr.readyState === XMLHttpRequest.DONE) {
					if (xhr.status === 200) {
							const response = JSON.parse(xhr.responseText);
							if (response.success) {
									// Xóa sản phẩm khỏi giao diện người dùng
									const itemToRemove = document.querySelector(`[data-id="${productId}"]`).closest('ul');
									itemToRemove.parentNode.removeChild(itemToRemove);

									// Kiểm tra nếu giỏ hàng đã trống
									if (document.querySelectorAll('.btn-delete-item').length === 0) {
											const container = document.getElementById('container');
											container.innerHTML = '<p class="text-center">Giỏ hàng của bạn đang trống</p>';
									}

									// Cập nhật tổng giá trị
									// eslint-disable-next-line no-undef
									updateTotal();
							} else {
									// eslint-disable-next-line no-console
									console.error(response.message);
							}
					} else {
							// eslint-disable-next-line no-console
							console.error('Có lỗi xảy ra khi gửi yêu cầu xóa sản phẩm');
					}
			}
	};
	xhr.send(`id=${productId}`);
}
