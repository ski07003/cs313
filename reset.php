<?php

mkdir('json', 0777);

$file = file_get_contents('2results.json');

file_put_contents('json/results.json', $file);

?>
