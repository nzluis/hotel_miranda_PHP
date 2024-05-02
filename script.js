console.log('running..')

const swiper = new Swiper('.swiper', {
  loop: true,
  slidesPerView:1,
  speed: 1500,
  autoplay: {
  delay: 3000,
},

  pagination: {
    el: '.swiper-pagination',
  },
  breakpoints: {
    1000: {
        slidesPerView: 3,
    }
  },
});


const learnMoreButton = document.querySelector('.learnMore')
learnMoreButton.addEventListener('click', () => {
  window.location.href='/about.php'
})
