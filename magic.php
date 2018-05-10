<?php

// use PhpAes\Aes;

// $aes = new Aes('abcdefgh01234567', 'CBC', '1234567890abcdef');

// $y = $aes->encrypt('hello world!');
// $x = $aes->decrypt($y);

// echo base64_encode($y);
// echo $x; 

require 'vendor\autoload.php';

use phpseclib\Crypt\AES;
use phpseclib\Crypt\Random;

$cipher = new AES(); // could use AES::MODE_CBC
// keys are null-padded to the closest valid size
// longer than the longest key and it's truncated
//$cipher->setKeyLength(128);
$cipher->setKey('abcdefghijklmnop');
// the IV defaults to all-NULLs if not explicitly defined
$cipher->setIV(Random::string($cipher->getBlockLength() >> 3));

$size = 10 * 1024;
$plaintext = str_repeat('a', $size);

echo $cipher->decrypt($cipher->encrypt($plaintext));
?>