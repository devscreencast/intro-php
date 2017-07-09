<?php

///local scope
///global scope
///static scope

echo $y = 10 ."<br />";

function testScope() {
    // global $y;
    static $x = 1;
    echo $x;
    $x++;
}

testScope();
echo "<br />";
testScope();
echo "<br />";
testScope();
echo "<br />";


