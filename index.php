<?php
require_once 'classes/ReverText.php';

use \Revert\ReverText as Revert;


$revert = new Revert;

$res = $revert->reverText('Hello World');

echo $res;

// Результат dlroW olleH