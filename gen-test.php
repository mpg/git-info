#!/usr/bin/php
<?php
/*
 * Generate tests for the timestamp -> date conversion macros in git-info
 */

date_default_timezone_set('UTC');

function test($offset, $y, $mo = 1, $d = 1, $h = 0, $m = 0, $s = 0) {
    $ts = mktime($h, $m, $s, $mo, $d, $y) - $offset;
    echo '\testdate{'.$ts.'}{'. date('c', $ts)."}\n";
}

test(0, 1970);
test(0, 1970, 2, 3, 4, 5, 6);
test(1, 1971);
test(0, 1971);
test(0, 2000, 3, 2);
test(1, 2000, 3, 1);
test(0, 2000, 3, 1);
test(1, 2001);
test(0, 2001);
test(1, 2001, 3, 1);
test(0, 2001, 3, 1);
