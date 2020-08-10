export default (el, child) => {
  return el !== child && el.contains(child);
};
