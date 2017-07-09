<?php
//This is a comment
$string = "university of east london of";

#a function that returns the length of a string
strlen($string);

/**
 * a function to convert every first letter of each word
 * in a string to upper case
 * @param string
 * @return mixed
 */
ucwords($string);

ucfirst($string);
str_word_count($string);
strpos($string, 'e');
str_replace('of', '', $string);
echo strrev($string);