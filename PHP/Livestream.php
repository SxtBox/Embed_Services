<?php
require "src/Embed_Services.php";
// don't remove $player_options
$player_options = "/player?enableInfoAndActivity=true&defaultDrawer=feed&autoPlay=true&mute=false";
echo Embed_Services("13907141/events/4117932" . $player_options, "livestream", $height = "100%", $width = "100%"); 