export default (el, className) => {
  if (el.classList) {
    el.classList.toggle(className);
  } else {
    let classes = el.className.split(' ');
    let existingIndex = classes.indexOf(className);
  
    if (existingIndex >= 0)
      classes.splice(existingIndex, 1);
    else
      classes.push(className);
  
    el.className = classes.join(' ');
  }
};
