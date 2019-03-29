--TEST--
Test of compare object handler for DateInterval objects
--FILE--
<?php

echo "Simple test for DateInterval compare object handler\n";

echo "\n-- First interval is greater than second --\n"

$a = new DateInterval('P2Y');
$b = new DateInterval('P1Y');

var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('P2M');
$b = new DateInterval('P1M');

var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('P2D');
$b = new DateInterval('P1D');

var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('PT2H');
$b = new DateInterval('PT1H');

var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('PT2M');
$b = new DateInterval('PT1M');

var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('PT2S');
$b = new DateInterval('PT1S');

var_dump($a > $b);
var_dump($a < $b);

echo "\n\n-- Intervals are equals --\n"

$a = new DateInterval('P1Y');
$b = new DateInterval('P1Y');

var_dump($a == $b);
var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('P1M');
$b = new DateInterval('P1M');

var_dump($a == $b);
var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('P1D');
$b = new DateInterval('P1D');

var_dump($a == $b);
var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('PT1H');
$b = new DateInterval('PT1H');

var_dump($a == $b);
var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('PT1M');
$b = new DateInterval('PT1M');

var_dump($a == $b);
var_dump($a > $b);
var_dump($a < $b);

$a = new DateInterval('PT1S');
$b = new DateInterval('PT1S');

var_dump($a == $b);
var_dump($a > $b);
var_dump($a < $b);


?>
===DONE===
--EXPECT--
Simple test for DateInterval compare object handler

-- First interval is greater than second --
bool(true)
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)
bool(true)
bool(false)

-- Intervals are equals --
bool(true)
bool(false)
bool(false)
bool(true)
bool(false)
bool(false)
bool(true)
bool(false)
bool(false)
bool(true)
bool(false)
bool(false)
bool(true)
bool(false)
bool(false)
bool(true)
bool(false)
bool(false)
===DONE===
