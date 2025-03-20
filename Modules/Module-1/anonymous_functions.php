<?php

$match = function($match) {
    return strtoupper($match[1]);
};

echo preg_replace_callback('~-([a-z])~', $match, 'hello-world') . "</br>";

// ou simplificando 

echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world');





