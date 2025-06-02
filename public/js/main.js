// chuyen san pham

function showBox(boxNumber) {
    // Ẩn tất cả các box
    const boxes = document.querySelectorAll('.box-sanpham');
    boxes.forEach(box => box.classList.remove('active-sanpham'));

    // Hiển thị box được chọn
    const selectedBox = document.getElementById(`box${boxNumber}`);
    selectedBox.classList.add('active-sanpham');

    // Gỡ bỏ lớp active khỏi tất cả các nút
    const buttons = document.querySelectorAll('.box-sanpham button');
    buttons.forEach(button => button.classList.remove('active-sanpham'));

    // Thêm lớp active cho nút tương ứng
    const selectedButton = document.getElementById(`btn${boxNumber}-${boxNumber}`);
    selectedButton.classList.add('active-sanpham');
}

// Đảm bảo mặc định nút 1 có màu đỏ khi load trang
window.onload = function() {
    document.getElementById('btn1-1').classList.add('active-sanpham');
}




