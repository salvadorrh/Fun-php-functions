<?php
$from = 'Jack';
$closure = function($name)
use ($from) /* <--- capture state */ {
    return sprintf("Hello %s from %s", $name, $from);
};
$from = 'Jay';
echo $closure('Joe');
?>
