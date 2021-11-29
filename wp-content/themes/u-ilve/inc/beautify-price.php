<?php
function beautify_price($price)
{
  return number_format((float) $price, 0, '.', ' ');
}