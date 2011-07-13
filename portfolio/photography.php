
	<div class="internal_content">

 		<div class="page_title">Portfolio | Photography</div>

		<div class="left_column">
			<div id="gallery_closeup">
		
				<img src="http://dummyimage.com/409x242/ccc/fff.jpg&text=Click+Thumbnails" alt="Placeholder Initial Image Description" />	
		
			</div>
		
		</div>

	<div class="right_column">
		<div class="portfolio_description">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vestibulum neque vitae diam 
			fermentum et lobortis justo porta. In non lacus mi, sit amet fermentum erat. Vivamus vitae erat
			tincidunt. Fusce fringilla iaculis magna eget lacinia.</p><br />
		</div>
		<div class="gallery_clip">
				<a href="http://dummyimage.com/409x242/ccc/fff.jpg" title="image description here"><img src="http://dummyimage.com/95x80/ccc/fff.jpg" /></a>
		</div>
		
		<div class="gallery_clip">
					<a href="http://dummyimage.com/409x242/ccc/fff.jpg&text=Sample+1" title="image 1 description"><img src="http://dummyimage.com/95x80/ccc/fff.jpg&text=Sample+1" /></a>
		</div>

		<div class="gallery_clip">
				<a href="http://dummyimage.com/409x242/ccc/fff.jpg&text=Sample+2" title="image 2 description" ><img src="http://dummyimage.com/95x80/ccc/fff.jpg&text=Sample+2" /></a>	
		</div>

		<div class="gallery_clip">
				<a href="http://dummyimage.com/409x242/ccc/fff.jpg&text=Sample+3" title="image 3 Description"><img src="http://dummyimage.com/95x80/ccc/fff.jpg&text=Sample+3" /></a>
		</div>
		
	</div>
	
		<a class="link_icon" href="?page=portfolio">View Portfolio</a>

	</div>

		<script type="text/javascript">
$(document).ready(function(){

	$(".gallery_clip a").click(function(){
	
		var largePath = $(this).attr("href");
		var largeAlt = $(this).attr("title");
		
		$("#gallery_closeup img").attr({ src: largePath, alt: largeAlt });
		
		$(".portfolio_description p").html(" (" + largeAlt + ")"); return false;
	});
	
});
</script>

