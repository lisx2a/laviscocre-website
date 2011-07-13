	<div class="internal_content">

 		<div class="page_title">Portfolio</div>

 	
	<div class="small_column border" id="print">
	<div class="center"><p>Print<br/>Graphic Design</p> </div>

	</div>
	
	<div class="small_column border" id="photography"><div class="center"><p>Photography</p> </div>
</div>
	
	<div class="small_column border" id="videography">
		<div class="center"><p>Videography</p> </div>
</div>


	<div class="small_column no_margin border" id="audio">
		<div class="center"><p>Audio & DJ</p> </div>
	</div>
	
			<a class="link_icon" href="?page=collections">The Collections</a>


	</div>
	<script type="text/javascript">
	$(document).ready( function(){
		
		$('#audio').hover(function(){
			$(this).html('<div class="center">Audio & DJ<br/><span class="normal"><p>From the song that was playing on your first date, to last song on your wedding night...</p></span><div class="link_icon"></div></div>');
			$(this).wrap('<a href="?page=portfolio/audio"></a>');
		},
		function(){
			$('#audio').html('<div class="center">Audio & DJ</div>');

		});
	
		$('#photography').hover(function(){
			$(this).html('<div class="center">Photography<br/><span class="normal"><p>Moments of you,your achievements, your celebrations...captured like this...</p></span><div class="link_icon"></div></div>');
			$(this).wrap('<a href="?page=portfolio/photography"></a>');	
		},
		function(){
		$('#photography').html('<div class="center">Photography</div>');


	});
		$('#videography').hover(function(){
			$(this).html('<div class="center">Videography<br/><span class="normal"><p>Some things are better understood in images...most are just better when relived...</p></span><div class="link_icon"></div></div>');
			$(this).wrap('<a href="?page=portfolio/videography"></a>');
		},
		function(){
		$('#videography').html('<div class="center">Videography</div>');


	});
		$('#print').hover(function(){
			$(this).html('<div class="center">Print<br/> Graphic Design<br/><span class="normal"><p>From Classical letterpressed invitations to ..well..things a little more unforgettable...</p></span><div class="link_icon"></div></div>');
			$(this).wrap('<a href="?page=portfolio/print"></a>');
		},
		function(){
		$('#print').html('<div class="center"><p>Print<br/>Graphic Design</p></div>');


	});
});


	</script>
