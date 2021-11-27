<?php

function remove_whitespaces(String $string)
{
  return str_replace(["\n", "\r", "\t", "  "], "", $string);
}