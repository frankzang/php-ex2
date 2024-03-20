<?php

class CaesarCipher {
    private const ALPHABET_SIZE = 26;

    public static function decrypt(string $cipherText, int $offset): string {
        $plainText = '';

        foreach (str_split($cipherText) as $character) {
            if (ctype_upper($character)) {
                $newIndex = ((ord($character) - ord('A') - $offset) + self::ALPHABET_SIZE) % self::ALPHABET_SIZE;
                $plainText .= chr(($newIndex < 0 ? $newIndex + self::ALPHABET_SIZE : $newIndex) + ord('A'));
            } else {
                $plainText .= $character;
            }
        }

        return $plainText;
    }
}

$testCases = [
    ["VQREQFGT", 2],
    ["ABCDEFGHIJKLMNOPQRSTUVWXYZ", 10],
    ["TOPCODER", 0],
    ["ZWBGLZ", 25],
    ["DBNPCBQ", 1],
    ["LIPPSASVPH", 4]
];

foreach ($testCases as $index => $testCase) {
    $decryptedText = CaesarCipher::decrypt($testCase[0], $testCase[1]);
    if ($decryptedText === "HELLOWORLD") {
        echo "Difference found in test case $index!\n";
    }
    echo $decryptedText . "\n";
}
?>
