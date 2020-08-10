<?php
$modx->lexicon->load('getfilter:archive');
$output = '';
$year = $_GET["year"];

if ($startYear && $endYear) {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://'. $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    $startYear;
    $endYear;
    
    for ($x = $endYear; $x >= $startYear; $x--) {
        if ($x == $year || (!$year && $endYear == $x)) {
            $output .= '<a class="active" href="'.$actual_link.'?year='.$x.'">'.$x.'</a> ';
        } else {
            $output .= '<a href="'.$actual_link.'?year='.$x.'">'.$x.'</a> ';
        }
    }
    if (!$year) {
        $year = $endYear;
    }
}

$start = "01.01.". $year ." 00:00:00";
$end = "31.12.". $year ." 23:59:59";

// if (!$year) {
    // $filter = '';
    // $output .= '<a class="active" href="'.$actual_link.'">'.$allText.'</a> ';
// } else {
    $filter = '["publishedon BETWEEN '. strtotime($start) .' AND '. strtotime($end) .'"]';
    // $output .= '<a href="'.$actual_link.'">'.$allText.'</a> ';
// }


$modx->toPlaceholders(array(
  'start' => strtotime($start),
  'end' => strtotime($end),
  'filter' => $filter,
  'year' => $year,
  'output' => $output,
),'tp');