	<div class="internal_content">

 		<div class="page_title">Meet a few of the Creatives</div>

		<div class="left_column">
			<div class="container_cre_photo" id="photo">
				<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Headshot+1" alt="photo headshot 1" />

			</div>
			<div class="container_cre_photo" id="photo2">
						<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Headshot+2" alt="photo headshot 2" />
			</div>
			<div class="container_cre_photo" id="photo3">
						<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Headshot+3" alt="photo headshot 3" />
			</div>

			<div class="container_cre_photo" id="photo4">
								<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Headshot+4" alt="photo headshot 4" />

			</div>
		</div>

	<div class="right_column">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vestibulum neque vitae diam 
			fermentum et lobortis justo porta. In non lacus mi, sit amet fermentum erat. Vivamus vitae erat
			nec dolor ultricies elementum. Quisque blandit congue congue. Vestibulum ultricies scelerisque 
			tincidunt. Fusce fringilla iaculis magna eget lacinia.</p><br />

		
	</div>
	
		<a class="link_icon" href="?page=portfolio">View Portfolio</a>

	</div>
<script type="text/javascript">
$(document).ready(function(){

	$("#photo").click(function(){
		$(".right_column p").html('description of first creative');
		
		$('#photo2 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#photo3 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#photo4 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
	
		
	});
	
	$("#photo2").click(function(){
		$(".right_column p").html('description of second creative'); 
		
		$('#photo2 img').attr({ src:"http://dummyimage.com/200x117/ccc/fff.jpg&text=Headshot+2" });
		$('#photo img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#photo3 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#photo4 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });


	});


	$("#photo3").click(function(){
		$(".right_column p").html('description of third creative');
		
		$('#photo3 img').attr({ src:"http://dummyimage.com/200x117/ccc/fff.jpg&text=Headshot+3" });
		
		$('#photo img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
	
		$('#photo2 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
		
		$('#photo4 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });

	});


	$("#photo4").click(function(){
		$(".right_column p").html('description of fourth creative'); 

		$('#photo4 img').attr({ src:"http://dummyimage.com/200x117/ccc/fff.jpg&text=Headshot+4" });
		
		$('#photo img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
		
		$('#photo3 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });
		
		$('#photo2 img').attr({ src:"http://dummyimage.com/200x117/eff0f6/fff" });

	});

	
});
</script>

