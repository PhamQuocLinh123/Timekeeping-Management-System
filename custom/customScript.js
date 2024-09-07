document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"].checkbox');

    checkboxes.forEach(function(checkbox) {
        // Thay đổi màu cho checkbox khi checkbox được chọn
        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                checkbox.parentElement.style.backgroundColor = 'lightblue';
            } else {
                checkbox.parentElement.style.backgroundColor = 'lightgray';
            }
        });

        // Đặt màu cho checkbox bị vô hiệu hóa
        if (checkbox.disabled) {
            checkbox.parentElement.style.backgroundColor = 'darkgray';
        }
    });
});
