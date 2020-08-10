import setCookie from './set-cookies';

export default (name) => {
  setCookie(name, "", {
    'max-age': -1
  })
};