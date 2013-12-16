<div class="main">

	<section class="content">
	
	  <article>
	  	<div class="player">
	  		<img src="<?php echo $page->images()->last()->url() ?>" alt="<?php echo html($page->title()) ?>" />
	  		
	  		<audio src="http://welle20.melonsol.de:8000/" id="audio" preload controls>
	  			<source src="http://welle20.melonsol.de:8000/" type="audio/mpeg" />
	  		</audio>
	  		
	  		<script>
	  		
	  			$(document).ready(function() {
	  			
	  				$('.currently-playing').load('proxy.php', function () {
  						Timer = window.setTimeout(updateDiv, 10000);
  					});
  				
  					$(".pause").hide();
  					$(".currently-playing").hide();
  				
  				    $(".play").click(function(){
  				        $(".play").hide();
  				        $(".pause").show();
  				        $(".currently-playing").show();
  				    })
  				    
  				    $(".pause").click(function(){
  						$(".pause").hide();
  						$(".currently-playing").hide();
  						$(".play").show();
  				    })
	  			    
	  			});
	  			
	  		</script>
	  		
	  		<div class="rotation">  		
	  			<div id="controls">
	  			   <div onclick="document._audio.play()" class="play"><i class="fa fa-play fa-2x"></i></div>
	  			   <div onclick="document._audio.pause()" class="pause"><i class="fa fa-pause fa-2x"></i><div class="currently-playing">
	  			   	<?php include('proxy.php'); ?>
	  			   </div>
	  			   </div>
	  			</div>
	  			
	  		</div>	 
	  	</div> 
	  	
	  	<div class="text-wrap">
			<!--<h2><?php echo html($page->title()) ?></h2>-->
			<?php echo kirbytext($page->text()) ?>
		</div>
	  </article>
	
	</section>
	
	<?php snippet('footer') ?>
	
</div>