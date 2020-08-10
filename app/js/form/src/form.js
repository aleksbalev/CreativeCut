import 'jquery-validation';
import '../methods/phone';

function selectLanguage (_lang) {
  switch (_lang) {
    case 'de':
      require('../localization/messages_de');
      break;
    case 'ru':
      require('../localization/messages_ru');
      break;
    case 'uk':
      require('../localization/messages_uk');
      break;
    case 'cs':
      require('../localization/messages_cs');
      break;
    case 'en':
    default:
      require('../localization/messages_en');
  }
}

export default class Form {
  constructor(_form, _attributes, _lang = 'en') {
    
    selectLanguage(_lang);

    _form.validate({
      rules: _attributes,
      focusCleanup: true,
      errorElement: 'span'
    });
  }
};