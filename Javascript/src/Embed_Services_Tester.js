/**
 * Embed_Services.js
 * Description: Generate Automatically Embed Player for Various Social Media Websites
 * Copyright: TRC4 2019
 * Website: https://kodi.al/
 * Version: v1.3
 * Package: JS,PHP
 */

var $Embed_Services = function(id, service, height, width)
{
	/* MADHESIA X GJERESIA */
	if(!width) {
		width = '560';
	}
	if(!height) {
		height = '315';
	}
	if(!id) {
		return false;
	}

	/* YOUTUBE */
	if(service == 'youtube') {
		var url = 'http://www.youtube.com/embed/';
	}

	/* VIMEO */
	else if(service == 'vimeo') {
		var url = 'http://player.vimeo.com/video/';
	}

	/* DAILYMOTION */
	else if(service == 'dailymotion') {
		var url = 'http://www.dailymotion.com/embed/video/';
	}

	/* VIDDLER */
	else if(service == 'viddler') {
		var url = 'https://www.viddler.com/embed/';
	}

	/* FACEBOOK */
	else if(service == 'facebook') {
		var url = "https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/facebook/videos/";
	}

	/* VUDEO.NET - VUDEO.IO */
	else if(service == 'vudeo') {
		//var url = "https://vudeo.net/embed-"; // OLD
		var url = "https://vudeo.io/embed-";
	}

	/* MP4 */
	else if(service == 'mp4') {
		var url = ""; // BLANK FOR ANY URL
	}

	/* LIVESTREAM */
	/*
	HELP
	https://livestream.com/watch/browse/music
	EXAMPLE ACCOUNT https://livestream.com/rcnradio
	SELECT LIVE OR VIDEO
	EX: https://livestream.com/rcnradio/lamegabogota
	AT RIGHT PRESS SHARE BUTTON [LINK] - [EMBED]
	SELECT EMBED -> COPY ONLY https://livestream.com/accounts/13907141/events/4117932/
	*/
	else if(service == 'livestream') {
		//var url = 'http://cdn.livestream.com/embed/';  // OLD
		var url = 'https://livestream.com/accounts/'; // NEW
	}

	/* STREAMABLE */
	else if(service == 'streamable') {
		var url = 'https://streamable.com/o/';
	}

	for(var i = 0; i < id.length; i++) {
		document.write("<iframe type='text/html' src='" + url + id[i] + "' frameborder='0' height='" + height + "' width='" + width + "' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>");
	}
}