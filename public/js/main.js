// JavaScript chính cho ứng dụng
document.addEventListener('DOMContentLoaded', function() {
    console.log('Web Bán Hàng MVC đã sẵn sàng!');
    
    // Tự động đóng thông báo alert sau 5 giây
    setTimeout(function() {
        var alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            if (alert && alert.parentNode) {
                alert.parentNode.removeChild(alert);
            }
        });
    }, 5000);
});

// Xác thực form sản phẩm
function validateForm() {
    var name = document.getElementById('name').value;
    var description = document.getElementById('description').value;
    var price = document.getElementById('price').value;
    
    if (name.trim() === '') {
        alert('Vui lòng nhập tên sản phẩm');
        return false;
    }
    
    if (description.trim() === '') {
        alert('Vui lòng nhập mô tả sản phẩm');
        return false;
    }
    
    if (parseFloat(price) <= 0) {
        alert('Giá sản phẩm phải lớn hơn 0');
        return false;
    }
    
    return true;
}

// Xác thực form danh mục
function validateCategoryForm() {
    var name = document.getElementById('name').value;
    
    if (name.trim() === '') {
        alert('Vui lòng nhập tên danh mục');
        return false;
    }
    
    return true;
}
