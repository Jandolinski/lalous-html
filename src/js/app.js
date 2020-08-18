$(document).ready(() => {
    const homepageSlider = new Swiper('.homepage-slider', {
      slidesPerView: 1
    }); 
    const homepageCategoriesSlider = new Swiper('#homepageCategoriesSlider', {
      slidesPerView: 3,
      loop: true,
      spaceBetween: 50,
      navigation: {
        nextEl: '#homepageCategoriesSlider .slider-btn--next',
        prevEl: '#homepageCategoriesSlider .slider-btn--prev',
      }
    }); 
    const homepageSectionSlider1 = new Swiper('#homepageSectionSlider1', {
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: '#homepageSectionSlider1 .navigation__btn--next',
        prevEl: '#homepageSectionSlider1 .navigation__btn--prev',
      },
      pagination: {
        el: '#homepageSectionSlider1 .swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    }); 
    const homepageSectionSlider2 = new Swiper('#homepageSectionSlider2', {
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: '#homepageSectionSlider2 .navigation__btn--next',
        prevEl: '#homepageSectionSlider2 .navigation__btn--prev',
      },
      pagination: {
        el: '#homepageSectionSlider2 .swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    }); 
    const homepageSectionSlider3 = new Swiper('#homepageSectionSlider3', {
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: '#homepageSectionSlider3 .navigation__btn--next',
        prevEl: '#homepageSectionSlider3 .navigation__btn--prev',
      },
      pagination: {
        el: '#homepageSectionSlider3 .swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    }); 

  
    console.log('Theme ready');
  });