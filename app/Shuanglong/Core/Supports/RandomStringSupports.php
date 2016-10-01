<?php

namespace App\Shuanglong\Core\Supports;


class RandomStringSupports
{
    /**
     * 產出一個有固定前贅字的亂數
     * @param       string          $header             前贅字
     * @param       int             $str_length         字串長度
     * @param       string          $candidate_text     亂數候選字
     *
     * @return      string
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-10-02
     */
    public static function generateWithPrefix($header = '', $str_length = 20, $candidate_text = 'abcdefghijklmnopqrstuvwxyz1234567890')
    {
        // 隨機字串長度
        $rand_str_length = $str_length - strlen($header);

        return $header . static::generate($rand_str_length, $candidate_text);
    }

    /**
     * 產出亂數字串
     * @param                       $rand_str_length
     * @param       string          $candidate_text
     *
     * @return      string
     *
     * @access      public
     * @author      Abel            abel@thenewslnes.com
     * @date        2016-10-02
     */
    public static function generate($rand_str_length, $candidate_text = 'abcdefghijklmnopqrstuvwxyz1234567890')
    {
        // 亂數字串
        $rand_str = '';
        // 候選文字長度
        $candidate_text_length = strlen($candidate_text)-1;

        for ($i = 0; $i < $rand_str_length; ++$i) {
            // 隨機挑選文字
            $rand_str .= $candidate_text[mt_rand(0, $candidate_text_length)];
        }

        return $rand_str;
    }
}