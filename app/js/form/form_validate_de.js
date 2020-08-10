import $ from 'jquery';
import Form from './src/form';

// validate signup form on keyup and submit
 const form = $('form#default_form');
 const attributes = {
     lastname: 'required',
     email: {
         required: true,
         email: true
     },
     phone: {
         required: true,
         phone: true
     }
 }
 new Form(form, attributes, 'de');