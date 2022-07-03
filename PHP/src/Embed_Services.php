<?php
/*
Embed Services
Generate Automatically Embed Player for Various Social Media Websites

Support Sites
------------------------------------
* Youtube
* Vimeo
* Dailymotion
* Facebook
* Streamable
* Vudeo
* MP4
* Viddler
* LiveStream
*/

function Embed_Services($id, $service, $height = null, $width = null)
{

    if (!$width)
	{
    	$width = "560";
    }

    if (!$height)
	{
    	$height = "315";
    }

	if($service == "youtube")
	{
	$url = "http://www.youtube.com/embed/";
	}
// echo Embed_Services("tVgVVIOPjZs", "youtube", $height = "100%", $width = "100%");

	else if($service == "vimeo")
	{
		$url = "https://player.vimeo.com/video/";
	}
// echo Embed_Services("308734134", "vimeo", $height = "100%", $width = "100%");

	else if($service == "dailymotion")
	{
		$url = "https://www.dailymotion.com/embed/video/";
	}
// echo Embed_Services("x81a55w", "dailymotion", $height = "100%", $width = "100%");

	else if($service == "facebook")
	{
	$url = "https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/facebook/videos/";
	}
//echo Embed_Services("205432109601953", "facebook", $height = "100%" ,$width = "100%");

	else if($service == "streamable")
	{
	$url = "https://streamable.com/o/";
	}
// echo Embed_Services("d9jkh9", "streamable", $height = "100%" ,$width = "100%");

	else if($service == "vudeo")
	{
	//$url = "https://vudeo.net/embed-"; // old
	$url = "https://vudeo.io/embed-"; // new
	}

//echo Embed_Services("aqgypxct9pmq" . ".html","vudeo", $height = "100%" ,$width = "100%");

	else if($service == "mp4")
	{
		$url = "";
	}
// echo Embed_Services("https://kodi.al/app_stream_tester/Capital%20T%20ft%20Cliqme%20X%20ft%20Koach2.0%20-%20Across%20The%20World.mp4", "mp4", $height = "100%" ,$width = "100%");

	else if($service == "viddler")
	{
		// required data-video-id
		//$url = "http://www.viddler.com/simple/";
		//$url = "http://www.viddler.com/player/";
		$url = "https://www.viddler.com/embed/";
		$poster = "http://www.viddler.com/thumbnail/";
	}

/*
HELP
https://livestream.com/watch/browse/music
EXAMPLE ACCOUNT https://livestream.com/rcnradio
SELECT LIVE OR VIDEO
EX: https://livestream.com/rcnradio/lamegabogota
AT RIGHT PRESS SHARE BUTTON [LINK] - [EMBED]
SELECT EMBED -> COPY ONLY https://livestream.com/accounts/13907141/events/4117932/
*/

	else if($service == "livestream")
	{
		//$url = "http://cdn.livestream.com/embed/";  // OLD
		$url = "https://livestream.com/accounts/"; // NEW
	}

echo '<html lang="en">
<head data-cast-api-enabled="true">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta content="width=device-width,minimum-scale=1,initial-scale=1" name="viewport"/>
<title>Albdroid Embed Player</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<meta http-equiv="cache-control" content="no-store">
<meta name="description" content="Embed Player" />
<meta name="author" content="Olsion Bakiaj - Endrit Pano" />
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
<meta name="referrer" content="no-referrer"/>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Albdroid TV">
<meta name="keywords" content="Albdroid TV" />
<meta name="application-name" content="Albdroid TV">
<meta name="msapplication-tooltip" content="Albdroid TV">
<meta name="msapplication-starturl" content="http://cdn.kodi.al">
<meta property="og:type" content="Television" />
<meta name="msapplication-TileColor" content="#0F0">
<meta name="msapplication-navbutton-color" content="#0F0">
<meta name="theme-color" content="#0F0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#0F0">
<meta property="og:type" content="website">
<meta property="og:url" content="http://cdn.kodi.al">
<meta property="og:site_name" content="Embed Player">
<meta property="og:title" content="Albdroid TV">
<meta property="og:description" content="Albdroid.al">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@trc4com">
<meta name="twitter:title" content="Albdroid.al">
<meta name="twitter:description" content="Albdroid.al">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#0F0">
<meta name="robots" content="noindex, nofollow">
<meta name="author" content="metatags generator">
<meta name="robots" content="noindex, nofollow">
<meta name="revisit-after" content="3 month">
</head>'."\n";
echo '<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
}
</style>'."\n";
echo '<body style="margin:0px;padding:0px;height:100%;overflow:hidden;">'."\n";
return "<iframe type='text/html' src='".$url.$id."' height='".$height."' width='".$width."' scrolling='no' frameborder='0' style='border: 0px none transparent;' webkitAllowFullScreen mozallowfullscreen allowFullScreen>\n</iframe>\n</body>
</html>";
}
?>