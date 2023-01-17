<?php
namespace App\Collectors\Helpers;

class Encryption
{
    public static function encrypt($data, $secret)
    {
        $key = md5(utf8_encode($secret), true);
        $key .= substr($key, 0, 8);
        $block_size = @mcrypt_get_block_size('tripledes', 'ecb');
        $length = strlen($data);
        $pad = $block_size - ($length % $block_size);
        $data .= str_repeat(chr($pad), $pad);
        $encrypted_data = @mcrypt_encrypt('tripledes', $key, $data, 'ecb');
        return base64_encode($encrypted_data);
    }

    public static function decrypt($data, $secret)
    {
        $key = md5(utf8_encode($secret), true);
        $key .= substr($key, 0, 8);
        $data = base64_decode($data);
        $data = @mcrypt_decrypt('tripledes', $key, $data, 'ecb');
        $block = @mcrypt_get_block_size('tripledes', 'ecb');
        $length = strlen($data);
        $pad = ord($data[$length - 1]);
        return substr($data, 0, strlen($data) - $pad);
    }
}
