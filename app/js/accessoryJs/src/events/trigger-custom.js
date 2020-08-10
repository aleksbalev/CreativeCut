// @el = node
// @eventName = string
// @data = object
export default (el, eventName, data) => {
  let event;
  if (window.CustomEvent) {
    event = new CustomEvent(eventName, {detail: data});
  } else {
    event = document.createEvent('CustomEvent');
    event.initCustomEvent(eventName, true, true, data);
  }
  
  return el.dispatchEvent(event);
};
