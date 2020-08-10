export default (el) => {
  let width = el.offsetWidth;
  let style = getComputedStyle(el);

  width += parseInt(style.marginLeft) + parseInt(style.marginRight);
  return width;
};
