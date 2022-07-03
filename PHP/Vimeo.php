<?php
require "src/Embed_Services.php";

$controller_bar_color = "0F0";
// CREATE Player https://demo.kodi.al/Streaming/AIO_Vendors/Embed_Codes/Vimeo_Embed_Code_Generator

$vimeo_colored = "?playsinline&byline=0&portrait=0&color=".$controller_bar_color;

echo Embed_Services("308734134".$vimeo_colored,"vimeo",$height = "100%" ,$width = "100%");