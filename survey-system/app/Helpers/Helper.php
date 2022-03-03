<?php 
 
 namespace app\Helpers;
// This function will return a random
// string of specified length





class Helper
{
public static function generateKey()
{
 $keyLength=10;
    // String of all alphanumeric character
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
 
    // Shuffle the $str_result and returns substring
    // of specified length
    return substr(str_shuffle($str_result),
                       0, $keyLength);


}
 
}

?> 
