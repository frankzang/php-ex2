<?php

function encrypt($line) {
    $result = "";

    for ($i = 0; $i < strlen($line); $i++) {
        $char = $line[$i];
        if (ctype_alpha($char)) {
            $code = ord($char) + 3;
            if (ctype_upper($char) && $code > ord('Z')) {
                $code -= 26;
            } elseif (ctype_lower($char) && $code > ord('z')) {
                $code -= 26;
            }
            $char = chr($code);
        }
        $result .= $char;
    }

    $result = strrev($result);

    $length = strlen($result);
    $half = $length / 2;
    for ($i = $half; $i < $length; $i++) {
        $char = $result[$i];
        if (ctype_alpha($char)) {
            $code = ord($char) - 1;
            if (ctype_upper($char) && $code < ord('A')) {
                $code += 26;
            } elseif (ctype_lower($char) && $code < ord('a')) {
                $code += 26;
            }
            $char = chr($code);
        }
        $result[$i] = $char;
    }

    return $result;
}

while (true) {
    fscanf(STDIN, "%d\n", $n);
    if ($n == 0) break;
    
    for ($i = 0; $i < $n; $i++) {
        $line = trim(fgets(STDIN));
        echo encrypt($line) . "\n";
    }
}

?>
