let accordionMap = map => {
    if (map.hasAttribute('data-href')) {
        const mapHref = map.getAttribute('data-href');
        let mapElement = document.createElement('iframe');
        mapElement.setAttribute('width', '100%');
        mapElement.setAttribute('height', '100%');
        mapElement.setAttribute('frameborder', 0);
        mapElement.setAttribute('scrolling', 'no');
        mapElement.setAttribute('marginheight', 0);
        mapElement.setAttribute('marginwidth', 0);
        mapElement.setAttribute('src', mapHref);
        map.classList.toggle('contact_map--open');
        if (!map.childNodes.length > 0) {
            map.appendChild(mapElement);
        }
    }
}

export default class AccordionMap {
    constructor(map) {
        accordionMap(map);
    }
};