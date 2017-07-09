<?php
define('VERSION_NUMBER', 'V1.2');

function testConstantScope() {
    echo VERSION_NUMBER;
}

define('VERSION_NUMBER', "v1.3");
testConstantScope();