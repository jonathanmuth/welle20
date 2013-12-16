<section class="footer">
	
	<?php 
	
	// selective items
	
	$items = $pages->find('impressum', 'faq', 'support');
	
	if($items && $items->count() > 0): 
	
	?>
	<nav>
	  <ul>    
	    <?php foreach($items as $item): ?>
    	<li><i class="fa fa-facebook-square"></i> <i class="fa fa-twitter-square"></i> <i class="fa fa-pencil-square"></i></li>
	    <li><a onclick="document._audio.pause()" <?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
	    <?php endforeach ?>
	    <li>webdesign & development by jonathanmuth</li>
	  </ul>
	</nav>
	<?php endif ?>
	
</section>