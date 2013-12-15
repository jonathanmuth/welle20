<div class="main">

	<section class="content">
	
	  <article>
	  	<img src="<?php echo $page->images()->last()->url() ?>" alt="<?php echo html($page->title()) ?>" />
	  	
	  	<div class="text-wrap">
			<!--<h2><?php echo html($page->title()) ?></h2>-->
			<?php echo kirbytext($page->text()) ?>
		</div>
	  </article>
	
	</section>
	
	<?php snippet('footer') ?>
	
</div>