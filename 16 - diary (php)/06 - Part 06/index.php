<?php

header("Content-Type: text/plain");

$start = microtime(true);

// Date functions!
// UNIX timestamp
var_dump(time());
var_dump(microtime(true));

$end = microtime(true);
var_dump($end - $start);


//
echo "Dates: \n"; 
date_default_timezone_set('Asia/Jerusalem');
var_dump(date('Y-m-d H:i:s', 1700000000));
var_dump(date('M/d/Y h:i a', 1700000000));  