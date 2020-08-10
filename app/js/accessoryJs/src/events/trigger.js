export default (el, eventName) => {
  let event = document.createEvent(eventName);
  event.initEvent('change', true, false);
  return el.dispatchEvent(event);
};
