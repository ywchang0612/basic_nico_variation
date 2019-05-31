<?php

/**
 * Nico Game
 * From codewar Katas
 * @see https://www.codewars.com/kata/basic-nico-variation/train/php
 */
class Nico
{
   static function encode(string $key, string $message): string {
      $head = str_split($key);
      $length = count($head);

      $message = array_chunk(str_split($message), $length);

      $message = array_map(function($message) use ($length) {
        return $message + array_fill(0, $length, ' ');
      }, $message);

      $message = array_map(function($message) use ($head) {
        $new = array_combine($head, $message);
        ksort($new, SORT_NATURAL);
        return array_values($new);
      }, $message);

      $message = array_merge(...$message);

      return implode($message);
    }
}

