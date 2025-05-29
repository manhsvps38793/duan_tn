// deital
document.addEventListener('DOMContentLoaded', () => {
    const imagedaitals = document.querySelectorAll('.detail-imgall img');
    const thumbnails = document.querySelectorAll('.detail-itemimg');
    const sliderdeital = document.getElementById('sliderdeital');
    const prevBtn = document.querySelector('.prev-btndeital');
    const nextBtn = document.querySelector('.next-btndeital');
    let currentIndex = 0;
    let isDragging = false;
    let startX = 0;
    let moveX = 0;

    function updateImagedaitals() {
        imagedaitals.forEach((img, index) => {
            img.classList.toggle('activedeiatl', index === currentIndex);
        });
        thumbnails.forEach((thumb, index) => {
            thumb.classList.toggle('activedeiatl', index === currentIndex);
        });
    }

    // Nút bấm cho PC
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + imagedaitals.length) % imagedaitals.length;
        updateImagedaitals();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % imagedaitals.length;
        updateImagedaitals();
    });

    // Swipe logic cho PC & Mobile
    sliderdeital.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.clientX;
    });

    sliderdeital.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        moveX = e.clientX - startX;
    });

    sliderdeital.addEventListener('mouseup', () => {
        if (Math.abs(moveX) > 50) {
            if (moveX < 0) {
                currentIndex = (currentIndex + 1) % imagedaitals.length; // Swipe trái
            } else {
                currentIndex = (currentIndex - 1 + imagedaitals.length) % imagedaitals.length; // Swipe phải
            }
            updateImagedaitals();
        }
        isDragging = false;
        moveX = 0;
    });

    sliderdeital.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });

    sliderdeital.addEventListener('touchmove', (e) => {
        moveX = e.touches[0].clientX - startX;
    });

    sliderdeital.addEventListener('touchend', () => {
        if (Math.abs(moveX) > 50) {
            if (moveX < 0) {
                currentIndex = (currentIndex + 1) % imagedaitals.length; // Swipe trái
            } else {
                currentIndex = (currentIndex - 1 + imagedaitals.length) % imagedaitals.length; // Swipe phải
            }
            updateImagedaitals();
        }
        moveX = 0;
    });

    // Thumbnails click
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => {
            currentIndex = index;
            updateImagedaitals();
        });
    });
});


// click size
  // Get elements
  const openBox = document.getElementById('openBox');
    const popupBox = document.getElementById('popupBox');
    const overlay = document.getElementById('overlay');
    const closeBox = document.getElementById('closeBox');

    // Show popup box
    openBox.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default link behavior
        popupBox.style.display = 'block';
        overlay.style.display = 'block';
    });

    // Hide popup box
    closeBox.addEventListener('click', () => {
        popupBox.style.display = 'none';
        overlay.style.display = 'none';
    });

    // Hide popup box when clicking on the overlay
    overlay.addEventListener('click', () => {
        popupBox.style.display = 'none';
        overlay.style.display = 'none';
    });

    // soluong
    document.addEventListener("DOMContentLoaded", () => {
    const decreaseBtn = document.getElementById("decrease");
    const increaseBtn = document.getElementById("increase");
    const quantityInput = document.getElementById("quantity");

    decreaseBtn.addEventListener("click", () => {
        let currentValue = parseInt(quantityInput.value, 10);
        if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
        }
    });

    increaseBtn.addEventListener("click", () => {
        let currentValue = parseInt(quantityInput.value, 10);
        quantityInput.value = currentValue + 1;
    });
    });

    // chuyen
      // Đảm bảo rằng khi trang tải, Item 1 có màu đỏ
      window.onload = function() {
        document.getElementById('detail-sp').style.border = '1px solid red'; // Mặc định cho Item 1 là đỏ
        document.getElementById('box-detail-sp').style.display = 'block'; // Hiển thị box 1
    };

    function changeContent(itemNumber) {
        // Ẩn cả hai box
        document.getElementById('box-detail-sp').style.display = 'none';
        document.getElementById('box-detail-bl').style.display = 'none';

        // Đặt lại border của cả hai nút về màu đen
        document.getElementById('detail-sp').style.border = '1px solid black'; // Mặc định border đen
        document.getElementById('detail-bl').style.border = '1px solid black'; // Mặc định border đen

        // Hiển thị box tương ứng và cập nhật nội dung cho box tương ứng
        if (itemNumber === 1) {
            document.getElementById('box-detail-sp').style.display = 'block'; // Hiển thị box 1
            document.getElementById('detail-sp').style.border = '1px solid red'; // Thêm border đỏ cho box 1
            document.getElementById('box-detail-sp').innerHTML; // Cập nhật nội dung box 1
        } else if (itemNumber === 2) {
            document.getElementById('box-detail-bl').style.display = 'block'; // Hiển thị box 2
            document.getElementById('detail-bl').style.border = '1px solid red'; // Thêm border đỏ cho box 2
            document.getElementById('box-detail-bl').innerHTML; // Cập nhật nội dung box 2
        }
    }
    
// size
document.addEventListener('DOMContentLoaded', () => {
        const icons = document.querySelectorAll('.detail-textall-sizeicon'); // Sử dụng đúng class
        const display = document.getElementById('selected-icon'); // Tham chiếu đến phần tử hiển thị

        // Mặc định chọn icon đầu tiên
        if (icons.length > 0) {
            icons[0].classList.add('active');
            display.textContent = `Kích thước: ${icons[0].textContent}`;
        }

        icons.forEach(icon => {
            icon.addEventListener('click', () => {
                // Xóa class 'active' từ tất cả icon
                icons.forEach(i => i.classList.remove('active'));

                // Thêm class 'active' vào icon được click
                icon.classList.add('active');

                // In ra tên của icon
                display.textContent = `Kích thước: ${icon.textContent}`;
            });
        });
    });
    // icon hinhf
    document.addEventListener('DOMContentLoaded', () => {
        const icons = document.querySelectorAll('.detail-textall-imgicon'); // Sử dụng đúng class
        const display = document.getElementById('selected-iconhinhanh'); // Tham chiếu đúng ID

        // Mặc định chọn icon đầu tiên
        if (icons.length > 0) {
            icons[0].classList.add('active');
            display.textContent = `Màu: ${icons[0].textContent}`;
        }

        icons.forEach(icon => {
            icon.addEventListener('click', () => {
                // Xóa class 'active' từ tất cả icon
                icons.forEach(i => i.classList.remove('active'));

                // Thêm class 'active' vào icon được click
                icon.classList.add('active');

                // In ra tên của icon
                display.textContent = `Màu: ${icon.textContent}`;
            });
        });
    });