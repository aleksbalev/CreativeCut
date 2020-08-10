import { AddClass, GetCoordinates, RemoveClass } from '../elements';

export default (element, stickyTop = null) => {
  document.addEventListener('scroll', () => {
    if (stickyTop === null) stickyTop = GetCoordinates(element).top;
    if (window.pageYOffset >= stickyTop) {
      AddClass(element, 'sticky');
    } else {
      RemoveClass(element, 'sticky');
    }
  });
};
