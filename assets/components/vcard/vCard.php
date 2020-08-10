<?php
require_once __DIR__.'/Manager.php';
require_once __DIR__.'/Encoding.php';

use \ForceUTF8\Encoding;

function charset_decode_utf_8($string){
  /* Only do the slow convert if there are 8-bit characters */
  if ( !preg_match("/[\200-\237]/", $string) && !preg_match("/[\241-\377]/", $string) )
    return $string;

  // decode three byte unicode characters
  $string = preg_replace_callback("/([\340-\357])([\200-\277])([\200-\277])/",
            create_function ('$matches', 'return \'&#\'.((ord($matches[1])-224)*4096+(ord($matches[2])-128)*64+(ord($matches[3])-128)).\';\';'),
            $string);

  // decode two byte unicode characters
  $string = preg_replace_callback("/([\300-\337])([\200-\277])/",
            create_function ('$matches', 'return \'&#\'.((ord($matches[1])-192)*64+(ord($matches[2])-128)).\';\';'),
            $string);
  return $string;
}

function Unaccent($string){
  if (strpos($string = htmlentities($string, ENT_QUOTES, 'UTF-8'), '&') !== false){
    $string = html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|tilde|uml);~i', '$1', $string), ENT_QUOTES, 'UTF-8');
  }
  return $string;
}

function replace_umlaute($str, $how = '-'){
$search = array("�", "�", "�", "�", "�", "�", 
                "�", "&", "�", "�", "�");
$replace = array("ae", "oe", "ue", "ss", "Ae", "Oe", 
                 "Ue", "und", "e", "a", "o");
$str = str_replace($search, $replace, $str);
return $str;
}

function removeHtmlTags($stringHtml){
	$retStr =  preg_replace('/<[^>]*>/', ' ', $stringHtml);
	return $retStr; 
}
function correct_encoding($text) {
    $current_encoding = mb_detect_encoding($text, 'auto');
    $text = iconv($current_encoding, 'UTF-8', $text);
    return $text;
}
function convertToUtf8($stringToConvert){
	$retStr = (html_entity_decode($stringToConvert));
  $retStr = Encoding::fixUTF8($retStr);
	return $retStr; 
}

function clearString($stringToClear){	
	$retStr = $stringToClear;
	$retStr = removeHtmlTags($retStr);
	$retStr = convertToUtf8($retStr);
	$retStr = replace_umlaute($retStr);
	return $retStr; 
}
$manager = new Manager();
$htmlOutput= "";

foreach ($_POST as $key => $value){
	 if (property_exists($manager, $key)) {		 
		 $manager->$key = clearString($value);
	 }
}
echo $manager->getStringVCard();