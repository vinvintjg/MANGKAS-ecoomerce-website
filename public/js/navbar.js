// reset menu biar kembali ke bentuk awal
function resetMenu() {
    if(window.innerWidth >= 1315){
        document.getElementById('nav-mobile').style.display = 'flex';
    }else if (window.innerWidth < 1315){
        document.getElementById('nav-mobile').style.display = 'none';
    }
}
window.addEventListener('resize', resetMenu);

// untuk memunculkan navbar pada ukuran mobile
function mobileMenu(){
    if(document.getElementById('nav-mobile').style.display =='flex'){
        document.getElementById('nav-mobile').style.display = 'none';
    }else{
        document.getElementById('nav-mobile').style.display = 'flex';
    }
}

document.getElementById('nav-icon').addEventListener('click', mobileMenu);


document.addEventListener('DOMContentLoaded', function(event) {
    // array with texts to type in typewriter
    var dataText = ["Look Sharp Feel Sharper<br>With Our Cuts"]; // Tambahkan <br> setelah kata "Sharper"

    // type one text in the typewriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
      // chekc if text isn't finished yet
      if (i < (text.length)) {
        // add next character to h1
        document.querySelector("h1").innerHTML = text.substring(0, i + 1) + '<strong aria-hidden="true"></strong>';

        // wait for a while and call this function again for next character
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback)
        }, 100);
      }
      // text finished, call callback if there is a callback function
      else if (typeof fnCallback == 'function') {
        // call callback after timeout
        setTimeout(fnCallback, 700);
      }
    }

    // start a typewriter animation for a text in the dataText array
    function StartTextAnimation(i) {
      if (typeof dataText[i] == 'undefined') {
        setTimeout(function() {
          StartTextAnimation(0);
        }, 20000);
      }
      // check if dataText[i] exists
      if (i < dataText[i].length) {
        // text exists! start typewriter animation
        typeWriter(dataText[i], 0, function() {
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
        modifier: 1,
        slideShadows: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
        speed: 800,
        grabCursor: true,
        mousewheel: true,
        keyboard: true,
      });
