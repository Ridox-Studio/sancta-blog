// var newsboards = document.querySelectorAll('.news-boards');
// let lftbtn = document.querySelector('.leftbtn-news');
// let rthbtn = document.querySelector('.rightbtn-news');
// var position = 0;
// var noof = newsboards.length * 30;
// lftbtn.addEventListener('click', function () {
//     moveTiles("left");
// });
// rthbtn.addEventListener('click', function () {
//     moveTiles("right");
// });


// function moveTiles(direction) {
//     let styles = "";
//     switch (direction) {
//         case "left":
//             position -= 30;
//             styles = `right:${position}%;`;

//             break;
//         case "right":
//             position += 30;
//             styles = `right:${position}%;`;

//             break;
//         default:
//             console.log("Invalid direction");
//             break;
// ic ommented this 
// let swiper = new Swiper(".hero-section", {
//     effect: "coverflow",
//     grabCursor: true,
//     centeredSlides: true,
//     slidesPerView: "auto",
//     loop: true,
//     spaceBetween: 32,
//     coverflowEffect: {
//         rotate: 0,
//     },
// })

//     if (position < noof && position >= -noof / 2) {
//         newsboards.forEach(element => {
//             element.style = styles;
//         });

//     }


// }