<?php
$prefix = 'attr';
$resultArr = [];
if ($attr) {
    $attr_ar = explode(',', preg_replace('/\s/', '', $attr));
    foreach ($attr_ar as &$value) {
        $resultArr[$value] = $_GET[$value];
    }
};

$modx->toPlaceholders($resultArr, $prefix);
