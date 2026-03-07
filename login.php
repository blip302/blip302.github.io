<?php

function encode255($text){
    $nums = [];
    for ($i = 0; $i < strlen($text); $i++) {
        $nums[] = 255 - ord($text[$i]);
    }
    return implode(",", $nums);
}

/* message with new expiry date */
$message = "null:04-04-2099{Separator}{Separator}{data}0x1B341F88";

/* encode */
$encoded = encode255($message);

/* send response */
echo "@Encrypted response By DarkingCheater," . $encoded;

?>
