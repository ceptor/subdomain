<?php

function encodeDBPassword($password) {
    $secret = md5Secret();
    $lengthOfSecret = strlen($secret);
    $passwordLength = strlen($password);
    $result = '';
    for ($i = 0; $i < $passwordLength + rand(16, 64); ++$i) {
        if ($i > $passwordLength) {
            $random = rand(0, 127);
        } elseif ($i == $passwordLength) {
            $random = 0;
        } else {
            $random = ord($password[$i]);
        }
        $partResult = chr(($random + ord($secret[$i % $lengthOfSecret])) % 256);
        $result .= $partResult;
    }
    $result = base64_encode($result);
    return $result;
}

function decodeDBPassword($password) {
    $secret = md5Secret();
    $lengthOfSecret = strlen($secret);
    $password = base64_decode($password);
    $passwordLength = strlen($password);
    $result = '';
    for ($i = 0; $i < $passwordLength; ++$i) {
        $partResult = (ord($password[$i]) + 256 - ord($secret[$i % $lengthOfSecret])) % 256;
        if ($partResult === 0) break;
        $result .= chr($partResult);
    }
    return $result;
}

function md5Secret()
{
    return md5('seсret');
}

?>