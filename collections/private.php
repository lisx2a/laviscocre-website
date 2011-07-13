
	<div class="internal_content">

 		<div class="page_title">LVC Private Collectons: Wedding</div>

			<div class="left_column ">
			
			<div class="container_cre_photo" id="collection1">
				<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+1" alt="Example 1" />
			</div>
			
			<div class="container_cre_photo" id="collection2">
				<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+2" alt="Example 2" />
			</div>
			
			<div class="container_cre_photo" id="collection3">
					<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+3" alt="Example 3" />
			</div>
			
			<div class="container_cre_photo" id="collection4">
				<img src="http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+4" alt="Example 4" />
			</div>

	</div>
<div class="right_column" id="collection_summary">
<p> Enter description about the collections here</p>
<a class="link_icon_private" id="link1" href="?page=collections">LVC Collections</a>
</div>




		<div class="right_column" id="scrollbar1"> 
			<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
			<div class="viewport">
				<div class="overview" id="overview_two">
	<div id="collection1_description">		
	<h2>LVC Wedding Collections I</h2>
<br/>
<ul>
		<li>Invitations and Envelopes (Letterpress available)</li>
		<li>Reply Cards and Envelopes (RSVP)</li>
		<li>3rd Card - Save the Date, Direction, Rehearsal</li>
		<li>Ceremony Programs</li>
		<li>Menus</li>
		<li>Place Cards</li>
		<li>Thank You and Envelope</li>
		<li>Photographer + 1 Assistant - 4 hours</li>
		<li>Videographers + 1 Assistant - 4 hours</li>
		<li>Audio/DJ - 2 hours</li>
		</ul>
		<p>Starting at $4,400<br/>
		using guest count of 200</p>
	</div>
	
	<div id="collection2_description">		
	<h2>LVC Wedding Collections II</h2>
<br/>
<ul>
		<li>Invitatins and Envelopes (Letterpress available)</li>
		<li>Reply Cards and Envelopes (RSVP)</li>
		<li>3rd Card - Save the Date, Direction, Rehearsal</li>
		<li>Ceremony Programs</li>
		<li>Menus</li>
		<li>Place Cards</li>
		<li>Thank You and Envelope</li>
		<li>Photographer + 1 Assistant - 4 hours</li>
		<li>Videographers + 1 Assistant - 4 hours</li>
		<li>Audio/DJ - 2 hours</li>
		</ul>
		<p>Starting at $4,400<br/>
		using guest count of 200</p>
	</div>

<div id="collection3_description">		
	<h2>LVC Wedding Collections III</h2>
<br/>
<ul>
		<li>Invitatins and Envelopes (Letterpress available)</li>
		<li>Reply Cards and Envelopes (RSVP)</li>
		<li>3rd Card - Save the Date, Direction, Rehearsal</li>
		<li>Ceremony Programs</li>
		<li>Menus</li>
		<li>Place Cards</li>
		<li>Thank You and Envelope</li>
		<li>Photographer + 1 Assistant - 4 hours</li>
		<li>Videographers + 1 Assistant - 4 hours</li>
		<li>Audio/DJ - 2 hours</li>
		</ul>
		<p>Starting at $4,400<br/>
		using guest count of 200</p>
	</div>


<div id="collection4_description">		
	<h2>LVC Wedding Collections IV</h2>
<br/>
<ul>
		<li>Invitatins and Envelopes (Letterpress available)</li>
		<li>Reply Cards and Envelopes (RSVP)</li>
		<li>3rd Card - Save the Date, Direction, Rehearsal</li>
		<li>Ceremony Programs</li>
		<li>Menus</li>
		<li>Place Cards</li>
		<li>Thank You and Envelope</li>
		<li>Photographer + 1 Assistant - 4 hours</li>
		<li>Videographers + 1 Assistant - 4 hours</li>
		<li>Audio/DJ - 2 hours</li>
		</ul>
		<p>Starting at $4,400<br/>
		using guest count of 200</p>
	</div>


	</div>
	</div>
				<a class="link_icon_private" id="link1" href="?page=collections">LVC Collections</a>
			
	</div>


<script type="text/javascript">

$(document).ready(function(){

	$('#scrollbar1').hide();
	
	$("#collection1 img").click(function(){
		$('#collection_summary').hide();
		$('#collection2_description').hide();
		$('#collection3_description').hide();
		$('#collection4_description').hide();

		$('#collection1 img').attr({src:"http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+1" });
		$('#collection2 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection3 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection4 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		
		$('#scrollbar1').show();
		$('#collection1_description').show();

	});
	
	$("#collection2 img").click(function(){
		
		$('#collection_summary').hide();
		$('#collection1_description').hide();
		$('#collection3_description').hide();
		$('#collection4_description').hide();

		$('#collection2 img').attr({src:"http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+2" });
	   $('#collection1 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection3 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection4 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
	
		$('#scrollbar1').show();
		$('#collection2_description').show();

	});
	
	$("#collection3 img").click(function(){
		
		$('#collection_summary').hide();
		$('#collection1_description').hide();
		$('#collection2_description').hide();
		$('#collection4_description').hide();

		$('#collection3 img').attr({src:"http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+3" });
	   $('#collection1 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection2 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection4 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });

		$('#scrollbar1').show();
		$('#collection3_description').show();

	});

	$("#collection4 img").click(function(){
	
		$('#collection_summary').hide();
		$('#collection1_description').hide();
		$('#collection2_description').hide();
		$('#collection3_description').hide();
		
		$('#collection4 img').attr({src:"http://dummyimage.com/200x117/ccc/fff.jpg&text=Example+4" });
	   $('#collection1 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection2 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });
		$('#collection3 img').attr({src:"http://dummyimage.com/200x117/eff0f6/fff" });


		$('#scrollbar1').show();
		$('#collection4_description').show();

	});



});






</script>	
</div>
