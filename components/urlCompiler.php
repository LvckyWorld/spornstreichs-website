<?php

$compiler = new Compiler();

class Compiler
{

 public static function compileUrl($url)
 {
  $url = explode('/', $url);

  if (count($url) > 0) {
   $url = $url[(count($url) - 2)];
  }

  return $url;
 }

}
