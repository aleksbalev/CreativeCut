function scrollStepStop (CurrentScroll) {
  let NextScroll = window.pageYOffset;
  if (NextScroll > CurrentScroll || NextScroll === 0) {
    clearInterval(toTopIntervalId);
  }
  CurrentScroll = NextScroll;
}

let toTopIntervalId = 0;
function scrollStep() {
  window.scroll(0, window.pageYOffset - 50);
}
 
function scrollToTop() {
  document.addEventListener('scroll', () => scrollStepStop(window.pageYOffset));
  toTopIntervalId = setInterval(scrollStep, 16.66);
}

export default class GoTopButton {
  constructor(element) {
    element.addEventListener('click', scrollToTop);
  }
};
