export default (el) => {
  let height = el.offsetHeight;
  let style = getComputedStyle(el);

  height += parseInt(style.marginTop) + parseInt(style.marginBottom);
  return height;
};
