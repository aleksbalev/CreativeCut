<?php
$modx->lexicon->load('getfilter:portfolio');
$output = '';
$filter = $_GET["filter"];

if ($links) {
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0];
  $links = str_replace(", ", ",", $links);
  $links = explode(",", $links);
  $defaultLink;
  
  if (!$filter || array_search($filter, $links) === false) {
    $filter = $defaultLink;
  }
  
  if (!$attrLink) {
      $attrLink = '';
  }

  foreach ($links as &$link) {
    $linkTranslate = $modx->lexicon('getfilter.'.$link) ?: $link;
    if ($link == $filter || (!$filter && $defaultLink == $link)) {
      $output .= '<a class="active" href="'.$actual_link.'?filter='.$link.$attrLink.'">'.$linkTranslate.'</a> ';
    } else {
      $output .= '<a href="'.$actual_link.'?filter='.$link.$attrLink.'">'.$linkTranslate.'</a> ';
    }
  }
}


$modx->toPlaceholders(array(
  'filter' => $filter,
  'output' => $output,
),'pf');
