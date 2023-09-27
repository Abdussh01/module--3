<?php
$text = "The quick brown fox jumps over the lazy dog.";
function modifiedText($text){
  echo strtolower(str_replace("brown","red",$text));
}
modifiedText($text);