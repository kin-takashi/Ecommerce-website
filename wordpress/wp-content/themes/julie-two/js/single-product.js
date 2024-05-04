document.addEventListener('DOMContentLoaded', function () {
  const quantityForms = document.querySelectorAll('.quantity form');
  quantityForms.forEach(function (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // Ngăn chặn form gửi đi

      // eslint-disable-next-line indent
      const indexInput = form.querySelector('input[name="index"]');
      const quantityInput = form.querySelector('input[name="quantity"]');
      const index = indexInput.value;
      const quantity = quantityInput.value;

      // Cập nhật số lượng trong giỏ hàng
      updateQuantity(index, quantity);
    });
  });

  const incrementBtns = document.querySelectorAll('.increment-btn');
  incrementBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const quantityInput = btn.parentElement.querySelector('input[name="quantity"]');
      const currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;

      // Gọi hàm cập nhật tổng giá trị sau khi thay đổi số lượng
      updateTotal();
    });
  });

  const decrementBtns = document.querySelectorAll('.decrement-btn');
  decrementBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const quantityInput = btn.parentElement.querySelector('input[name="quantity"]');
      const currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;

        // Gọi hàm cập nhật tổng giá trị sau khi thay đổi số lượng
        updateTotal();
      }
    });
  });

  

});