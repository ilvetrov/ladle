<?php

function img_async_src(String $src, $scroll = true, $isBackground = false, $fullPath = false, $manual = false)
{
  echo get_img_async_src($src, $scroll, $isBackground, $fullPath, $manual);
}

function get_img_async_src(String $src, $scroll = true, $isBackground = false, $fullPath = false, $manual = false)
{
  $outputSrc = $fullPath ? $src : (get_template_directory_uri() . '/assets/img/' . $src);
  if (preg_match('/\.svg$/', $src)) {
    if ($isBackground) {
      echo " style=\"background-image: url($outputSrc)\"";
    } else {
      echo " src=\"$outputSrc\" loading=\"lazy\"";
    }
    return;
  }
  if (!$isBackground) {
    $imageSize = cache('size_of_' . $outputSrc, function() use ($outputSrc)
    {
      return getimagesize($outputSrc);
    });
    $width = $imageSize[0];
    $height = $imageSize[1];
    $blankForSrc = create_blank_for_src($width, $height);
  }
  $asyncData = get_link_properties($src, $scroll, $isBackground, $fullPath, $manual);

  $htmlOfBlank = !$isBackground ? 'src="' . $blankForSrc . '" loading="lazy"' : '';
  $htmlOfAsyncAttribute = 'data-async-image="' . htmlspecialchars(json_encode($asyncData)) . '"';
  
  $htmlOutput = trim($htmlOfBlank . ' ' . $htmlOfAsyncAttribute);

  return $htmlOutput;
}

function get_link_properties(String $src, $scroll = true, $isBackground = false, $fullPath = false, $manual = false)
{
  $serverPath = $fullPath ? (getcwd() . explode(get_site_url(), $src)[1]) : (get_template_directory() . '/assets/img/' . $src);
  $outputSrc = $fullPath ? $src : (get_template_directory_uri() . '/assets/img/' . $src);
  return [
    "scroll" => $scroll,
    "isBackground" => $isBackground,
    "manual" => $manual,
    "src" => $outputSrc,
    "isHigh" => filesize($serverPath) >= MIN_SIZE_OF_IMG_TO_HIGH_LOAD
  ];
}

function create_blank_for_src($width, $height)
{
  return "data:image/svg+xml," . str_replace('+', '%20', urlencode(create_blank($width, $height)));
}

function create_blank($width, $height)
{
  return '<svg xmlns="http://www.w3.org/2000/svg" width="' . $width . '" height="' . $height . '"></svg>';
}