        const listImg = document.querySelector('.list-img');
     const images = document.querySelectorAll('.list-img img');
     const btnLeft = document.querySelector('.btn-left');
     const btnRight = document.querySelector('.btn-right');

     const imgCount = images.length;
     let currentIndex = 0;

     const changeSlide = () => {
         const slideWidth = document.querySelector('.slide-show').offsetWidth;
         listImg.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
     };

     let autoSlide = setInterval(() => {
         currentIndex = (currentIndex + 1) % imgCount;
         changeSlide();
     }, 2000);

     btnRight.addEventListener('click', () => {
         clearInterval(autoSlide);
         currentIndex = (currentIndex + 1) % imgCount;
         changeSlide();
         autoSlide = setInterval(() => {
             currentIndex = (currentIndex + 1) % imgCount;
             changeSlide();
         }, 2000);
     });

     btnLeft.addEventListener('click', () => {
         clearInterval(autoSlide);
         currentIndex = (currentIndex - 1 + imgCount) % imgCount;
         changeSlide();
         autoSlide = setInterval(() => {
             currentIndex = (currentIndex + 1) % imgCount;
             changeSlide();
         }, 2000);
     });

     window.addEventListener('resize', () => {
         changeSlide();
     });

     let startX = 0;
     let endX = 0;

     listImg.addEventListener('touchstart', (e) => {
         startX = e.touches[0].clientX;
         clearInterval(autoSlide);
     });

     listImg.addEventListener('touchmove', (e) => {
         endX = e.touches[0].clientX;
     });

     listImg.addEventListener('touchend', () => {
         if (startX > endX + 50) {
             currentIndex = (currentIndex + 1) % imgCount;
         } else if (startX < endX - 50) {
             currentIndex = (currentIndex - 1 + imgCount) % imgCount;
         }
         changeSlide();
         autoSlide = setInterval(() => {
             currentIndex = (currentIndex + 1) % imgCount;
             changeSlide();
         }, 2000);
     });

     let isMouseDown = false;
     let mouseStartX = 0;

     listImg.addEventListener('mousedown', (e) => {
         isMouseDown = true;
         mouseStartX = e.clientX;
         clearInterval(autoSlide);
     });

     listImg.addEventListener('mousemove', (e) => {
         if (!isMouseDown) return;
         const mouseEndX = e.clientX;
         const diff = mouseStartX - mouseEndX;
         if (diff > 50) {
             currentIndex = (currentIndex + 1) % imgCount;
             isMouseDown = false;
         } else if (diff < -50) {
             currentIndex = (currentIndex - 1 + imgCount) % imgCount;
             isMouseDown = false;
         }
     });

     listImg.addEventListener('mouseup', () => {
         isMouseDown = false;
         autoSlide = setInterval(() => {
             currentIndex = (currentIndex + 1) % imgCount;
             changeSlide();
         }, 2000);
     });

     listImg.addEventListener('dragstart', (e) => {
         e.preventDefault();
     });

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




