// ANIMATION

function init() {
  const tl = gsap.timeline();
  tl.from('body', { autoAlpha: 0 })
    .fromTo(
      '.hero',
      { y: -200, opacity: 0 },
      { y: 0, opacity: 1, ease: 'power4. out' }
    )
    .fromTo(
      '.hero__right-image',
      { x: -600, opacity: 0 },
      { x: 0, opacity: 1, ease: 'power4. out' }
    )
    .fromTo(
      '.g-img',
      { x: -600, opacity: 0, scale: 1.5 },
      {
        scale: 1,
        x: 0,
        opacity: 1,
        ease: 'power4. out',
      },
      '<'
    );
  // .fromTo('.nav', { y: -200, opacity: 0 }, { y: 0, opacity: 1, duration: 1 });
}

window.addEventListener('load', function(event) {
  init();

  gsap.from('.header-overlay', { y: 100, opacity: 0 });
});

// form section animation

// Menu

const menu = document.getElementById('hamburger');
const navwrapper = document.querySelector('.nav__wrapper');
const close = document.querySelector('.close__nav');

const tl = gsap.timeline({ paused: true });

tl.fromTo(
  '.nav__wrapper',
  { css: { display: 'none', opacity: 0 }, duration: 0.5, stagger: 1 },
  { css: { display: 'block', opacity: 1 }, duration: 0.5, stagger: 1 }
)
  .fromTo('.close__nav', { opacity: 0 }, { opacity: 1 }, '<')
  .fromTo(
    '.nav__list-mobile > li',
    { opacity: 0 },
    { opacity: 1, stagger: { amount: 0.4 } },
    '<'
  );

menu.addEventListener('click', () => {
  tl.play();
});

close.addEventListener('click', () => {
  tl.reverse();
});
