const gap = 16;
const carousel = document.getElementById('carousel');
const next = document.getElementById('next');
const prev = document.getElementById('prev');

if (carousel) {
  let width = carousel.offsetWidth;
  window.addEventListener('resize', () => (width = carousel.offsetWidth));

  next.addEventListener('click', () => {
    carousel.scrollBy(width + gap, 0);
  });
  prev.addEventListener('click', () => {
    carousel.scrollBy(-(width + gap), 0);
  });
}
