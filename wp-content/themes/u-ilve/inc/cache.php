<?php

$temp_storage = [];
function cache($name, $getter)
{
  global $temp_storage;
  if (!array_key_exists($name, $temp_storage)) {
    $temp_storage[$name] = $getter();
  }
  return $temp_storage[$name];
}