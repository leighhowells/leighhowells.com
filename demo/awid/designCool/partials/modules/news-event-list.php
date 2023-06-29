        
              <h2>News/Event Listing</h2>

                <p>The university held its 46th position in the top 100 of World Reputation Rankings, with the upper 
                reaches of the league dominated by US institutions.  The list, based on a survey of senior 
                academics, is topped by what its compilers describe as Anglo-American 'super-brands'.</p>

              <br/>

              <?php for($n=1; $n<=5; $n++): ?>


              <div class="container">
	              <div class="row newslist">

	              	<h4 style="padding-bottom: 5px; margin-bottom:0; ">11th September</h4>
	                <a href="#"><h3 style="margin-top:0; padding-top:0;">News item title with space for very long news article titles that will wrap around and optional image</h3></a>

					
	                <div class="col-xs-12 col-md-7 nopadding">
	                   
	                      <p>This will link to an news details page. The university held its 46th position in the top 100 of World Reputation Rankings, with the 
	                      upper reaches of the league dominated by US institutions. The list, based on a survey of 
	                      senior academics, is topped by what its compilers describe as Anglo-American 'super-brands'.</p>
	                </div>


	                <div class="col-xs-12 col-md-4 col-md-offset-1">

	                <?php $x=rand(1,6); ?>

		                <?php if ($x!=1) :  ?>
		                  <img src="images/bio<?php echo rand(1,5); ?>.jpg" class="thumbnail" style="max-width:100%;">
		                <?php endif; ?>

	                </div>



	              </div>

	           </div>

              <?php endfor; ?>



                <?php for($n=1; $n<=5; $n++): ?>


              <div class="container">
	              <div class="row newslist">

	                <a href="#"><h3 class="nopadding">Event item title with space for very long titles</h3></a>

					<h4 style="margin:10px 0 3px 0;"><strong>Event Date:</strong>&nbsp;&nbsp;11th September</h4>
					<h4 style="padding:0; margin:0 0 15px 0;"><strong>Event Location:</strong>&nbsp;&nbsp;Short Address</h4>
	                <div class="col-xs-12 col-md-7 nopadding">
	                   
	                    
	                      <p>This will link to an event details page. The university held its 46th position in the top 100 of World Reputation Rankings, with the 
	                      upper reaches of the league dominated by US institutions. The list, based on a survey of 
	                      senior academics, is topped by what its compilers describe as Anglo-American 'super-brands'.</p>
	                </div>


	                <div class="col-xs-12 col-md-4 col-md-offset-1">

	                <?php $x=rand(1,6); ?>

		                <?php if ($x!=1) :  ?>
		                  <img src="images/bio<?php echo rand(1,5); ?>.jpg" class="thumbnail" style="max-width:100%;">
		                <?php endif; ?>

	                </div>



	              </div>

	           </div>

              <?php endfor; ?>