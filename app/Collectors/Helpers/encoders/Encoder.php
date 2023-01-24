<?php

namespace App\Collectors\Helpers\encoders;
// FOR DEBUGGING ONLY: SET ERROR REPORTING ON
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
// error_reporting(0);

//  ENVIRONMENT SETUP
ini_set('memory_limit', '-1');
set_time_limit(0);

class Encoder
{
    public $var_name;
    public $func_name;
    public $div_name;
    public $characters_per_line;

    public function __construct()
    {
        $this->var_name  = $this->generateRandomString(rand(10,20)); // SET THREE DIFFERENT VALUES
        $this->func_name = $this->generateRandomString(rand(10,20));      // SET THREE DIFFERENT VALUES
        $this->div_name  = $this->generateRandomString(rand(10,20));  // SET THREE DIFFERENT VALUES
        $this->characters_per_line = 111;       // NOTE: Must be necessarily divisible by 3
    }

    // HELPER
    public function html_encoder($buffer)
    {
        $var_name = $this->var_name;
        $func_name = $this->func_name;
        $div_name = $this->div_name;
        if (1) {
            $code = "<script type=\"text/javascript\" language=\"Javascript\">function " . $func_name . "(s){var i=0,out='';l=s.length;for(;i<l;i+=3){out+=String.fromCharCode(parseInt(s.substr(i,2),16));}document.write(out);}</script>";
            $out = $func_name . "(" . $var_name . ");\n</script>";
        } else {
            $code = "<script type=\"text/javascript\" language=\"Javascript\">function " . $func_name . "(s){var i=0,out='';l=s.length;for(;i<l;i+=3){out+=String.fromCharCode(parseInt(s.substr(i,2),16));}document.getElementById('" . $div_name . "').innerHTML=out;}</script>";
            $out = "document.write('<div id=" . $div_name . "></div>');\n" . $func_name . "(" . $var_name . ");\n</script>";
        }
        $output  = "<script type=\"text/javascript\" language=\"Javascript\">\n";
        $output .= "/*  Elsayed HTML Encoder \n";
        $output .= " *  Reverse engineering of this file is strictly prohibited. \n";
        $output .= " */\n";
        $output .= "document.write(unescape('" . $this->js_escape($code) . "'));\n";
        //$output .= "document.write('<xmp>'+unescape('".$this->js_escape($code)."'));\n"; // HACK
        $output .= "var " . $var_name . "='';\n";
        $output .= $this->encoder($buffer);
        $output .= $out;
        $noscript = '<noscript><div style="color:white;background:red;padding:20px;text-align:center"><tt><strong><big>For functionality of this site it is necessary to enable JavaScript. <br><br> Here are the <a target="_blank"href="http://www.enable-javascript.com/" style="color:white">instructions how to enable JavaScript in your web browser</a>.</big></strong></tt></div></noscript>';
        return ($output . $noscript);
    }

    public function encoder($in)
    {
        $var_name = $this->var_name;
        $func_name = $this->func_name;
        $div_name = $this->div_name;
        $characters_per_line = $this->characters_per_line;
        $out = '';
        $in = utf8_decode($in);
        $in = htmlentities($in);
        $in = $this->htmlspecialcharsDecode($in);
        for ($i = 0; $i < strlen($in); $i++) {
            $hex = dechex(ord($in[$i]));
            if ($hex == '') {
                $temp = urlencode($in[$i]);
                $temp = str_replace('%', '', $temp);
                $out = $out . $temp . '.';
            } else {
                $out = $out . ((strlen($hex) == 1) ? ('0' . strtoupper($hex)) : (strtoupper($hex))) . '.';
            }
        }
        $out = str_replace('+', '20.', $out);
        $out = str_replace('_', '5F.', $out);
        $out = str_replace('-', '2D.', $out);
        $out = $var_name . "+='" . chunk_split($out, $characters_per_line, "';\n" . $var_name . "+='") . "';\n";
        $out = str_replace("html_encoder_data+='';\n", '', $out);
        return $out;
    }

    public function htmlspecialcharsDecode($str, $quote_style = ENT_COMPAT)
    {
        return strtr($str, array_flip(get_html_translation_table(HTML_SPECIALCHARS, $quote_style)));
    }

    public function js_escape($in)
    {
        $out = '';
        for ($i = 0; $i < strlen($in); $i++) {
            $hex = dechex(ord($in[$i]));
            if ($hex == '')
                $out = $out . urlencode($in[$i]);
            else
                $out = $out . '%' . ((strlen($hex) == 1) ? ('0' . strtoupper($hex)) : (strtoupper($hex)));
        }
        return $out;
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = 'l';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
