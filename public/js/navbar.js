// reset menu biar kembali ke bentuk awal
function resetMenu() {
    if (window.innerWidth >= 1315) {
        document.getElementById("nav-mobile").style.display = "flex";
    } else if (window.innerWidth < 1315) {
        document.getElementById("nav-mobile").style.display = "none";
    }
}
resetMenu();

// Tambahkan event listener untuk menangkap perubahan ukuran layar
window.addEventListener("resize", resetMenu);


// untuk memunculkan navbar pada ukuran mobile
function mobileMenu() {
    if (document.getElementById("nav-mobile").style.display == "flex") {
        document.getElementById("nav-mobile").style.display = "none";
    } else {
        document.getElementById("nav-mobile").style.display = "flex";
    }
}

document.getElementById("nav-icon").addEventListener("click", mobileMenu);

document.addEventListener("DOMContentLoaded", function (event) {
    // array with texts to type in typewriter
    var dataText = ["Look Sharp Feel Sharper <br>With Our Cuts"]; // Tambahkan <br> setelah kata "Sharper"

    // type one text in the typewriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
        // chekc if text isn't finished yet
        if (i < text.length) {
            // add next character to h1
            document.querySelector("h1").innerHTML =
                text.substring(0, i + 1) +
                '<strong aria-hidden="true"></strong>';

            // wait for a while and call this function again for next character
            setTimeout(function () {
                typeWriter(text, i + 1, fnCallback);
            }, 100);
        }
        // text finished, call callback if there is a callback function
        else if (typeof fnCallback == "function") {
            // call callback after timeout
            setTimeout(fnCallback, 700);
        }
    }

    // start a typewriter animation for a text in the dataText array
    function StartTextAnimation(i) {
        if (typeof dataText[i] == "undefined") {
            setTimeout(function () {
                StartTextAnimation(0);
            }, 20000);
        }
        // check if dataText[i] exists
        if (i < dataText[i].length) {
            // text exists! start typewriter animation
            typeWriter(dataText[i], 0, function () {
                // after callback (and whole text has been animated), start next text
                StartTextAnimation(i + 1);
            });
        }
    }

    // start the text animation
    StartTextAnimation(0);
});

var swiper = new Swiper(".mySwiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    initialSlide: 1,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1.2,
        slideShadows: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    speed: 1800,
    grabCursor: true,
    mousewheel: true,
    keyboard: true,
});

const productContainers = [...document.querySelectorAll(".product-container")];
const nxtBtn = [...document.querySelectorAll(".nxt-btn")];
const preBtn = [...document.querySelectorAll(".pre-btn")];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;
    let cardWidth = 280; // Lebar setiap kartu (sesuaikan dengan kebutuhan Anda)
    let visibleCards = 1; // Jumlah kartu yang akan ditampilkan per geseran (sesuaikan dengan kebutuhan Anda)

    nxtBtn[i].addEventListener("click", () => {
        let scrollAmount =
            Math.floor(item.scrollLeft / cardWidth) * cardWidth +
            100 +
            visibleCards * cardWidth +
            100;
        if (scrollAmount > item.scrollWidth - containerWidth) {
            scrollAmount = 0; // Kembali ke pojok kiri jika mencapai akhir
        }
        item.scrollTo({
            left: scrollAmount,
            behavior: "smooth",
        });
    });

    preBtn[i].addEventListener("click", () => {
        let scrollAmount =
            Math.floor(item.scrollLeft / cardWidth) * cardWidth +
            100 -
            visibleCards * cardWidth +
            100;
        item.scrollTo({
            left: scrollAmount,
            behavior: "smooth",
        });
    });
});

const items = document.querySelectorAll(".drop button");

function toggledrop() {
    const itemToggle = this.getAttribute("aria-expanded");

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute("aria-expanded", "false");
    }

    if (itemToggle == "false") {
        this.setAttribute("aria-expanded", "true");
    }
}

items.forEach((item) => item.addEventListener("click", toggledrop));
