<div class="main">

	<section class="content">
	
	
	
	  <article>
	  	<div class="player">
		  	<img src="<?php echo $page->images()->last()->url() ?>" alt="<?php echo html($page->title()) ?>" />
		  	
	  		<audio id="audio" preload controls>
	  			<source src="http://welle20.melonsol.de:8000/" type="audio/mpeg" />
	  		</audio>
	  		
		  	<div class="rotation">  		
		  		<div id="controls">
		  		   <div onclick="document._audio.play()" class="play"><i class="icon-play icon-2x"></i></div>
		  		   <div onclick="document._audio.pause()" class="pause"><i class="icon-pause icon-2x"></i><div class="currently-playing">
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