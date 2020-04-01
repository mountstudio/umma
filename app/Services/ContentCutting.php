<?php
/**
 * Created by PhpStorm.
 * User: damir
 * Date: 3/29/20
 * Time: 14:07
 */

namespace App\Services;


use Illuminate\Support\Str;

class ContentCutting
{
    public static function cut_contents($content, $countWords, $countSymbols)
    {
        $content = strip_tags($content);
        if (self::htmlStrCounter($content) < $countSymbols - 3) {
            return $content;
        } else {
            return self::recursive_cut_content($content, $countWords, $countSymbols);
        }
    }

    private static function recursive_cut_content($content, $countWords, $countSymbols)
    {
        $content = Str::words($content, $countWords, '');
        if (self::htmlStrCounter($content) < $countSymbols - 3) {
            $strWithoutLastSymbol = preg_replace('/(!|,|\.|\'|\"|\:|\.{2}|\.{3}|\;)$/', '', $content);
            return $strWithoutLastSymbol . '...';
        } else {
            return self::recursive_cut_content($content, --$countWords, $countSymbols);
        }
    }

    private static function htmlStrCounter($htmlStr){
        return strlen(utf8_decode(html_entity_decode($htmlStr, ENT_COMPAT, 'utf-8')));
    }
}