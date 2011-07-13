<!DOCTYPE>
<html>
<title>LAVISCO CRE</title>
<head>
<meta content="A collective of professionals specializing in creative services for NYC Events. Invitations, Design, Photography, Videography, Music, DJ" name="description">
<meta name="author" content="Developed by Lissa Aguilar Designed by ShaDoe McIntosh" />
<meta name="keywords" content="creative, photography, laviscro cre, organize" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<LINK href="css/main.css" rel="stylesheet" type="text/css">
<LINK href="css/video-js.css" rel="stylesheet" type="text/css" media="screen" title="Video JS" charset="utf-8">

<!-- Design by ShaDoe McIntosh Web Development by Lissa Aguilar -->

<script type="text/javascript" src="scripts/jquery-1.4.4.min.js">
</script>
<script type="text/javascript" src="scripts/video.js charset="utf-8"></script>



<script type="text/javascript" src="scripts/tinyscrollbar.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#scrollbar1').tinyscrollbar();
	});
</script>
<script>
function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

	$(function() {
			setInterval("slideSwitch()", 3500 );

		});
</script>



</head>
<body>
<div id="main_container">

<a href="?page=home"><div id="laviscocre_logo"></div></a>
<div id="main_nav">
	<ul id="nav_sidebar_a">
		<li id="panel_a1"><a id="panel_a1"href="?page=aboutus"></a></li>
		<li id="panel_a2"><a id="panel_a2"href="?page=collections"></a></li>
		<li id="panel_a3"><a id="panel_a3"href="?page=meet"></a></li>
	</ul>
	
	
	<ul id="nav_sidebar_b">
	<li<?php if ($page=="services") echo " id=\"active_b1\""; ?> id="panel_b1"><a id="panel_b1" href="?page=services"></a></li>
	<li id="panel_b2"><a id="panel_b2" href="?page=creatives"></a></li>
	<li id="panel_b3"><a id="panel_b3" href="?page=portfolio"></a></li>
	<li id="panel_b4"><a id="panel_b4" href=#></a></li>
	
	</ul>
</div>

