<div class="sidebar">
	<nav class="navigation">
	
	<a href="<?php echo url() ?>">
	<img class="logo" src="<?= url('') ?>assets/images/welle20-logo-small-black.png" />
	</a>
	
	<!--<h3>Neues im Blog</h3>
	
		<ul>
			<li>Neues Semester, neue Formate.</li>
			<li>Alles neu, alles gut.</li>
			<li>Redesign</li>
		</ul>--> 
	
	  <ul class="shows">
	    <?php foreach($pages->visible() AS $p): ?>
	    <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>>
	    	<a href="<?php echo $p->url() ?>"><img src="<?php echo $p->images()->last()->url() ?>" alt="<?php echo html($p->title()) ?>" /></a><div class="description"><?php echo html($p->claim()) ?></div>
	    </li>
	    <?php endforeach ?>
	    <?php foreach($pages->visible() AS $p): ?>
	    <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>>
	    	<a href="<?php echo $p->url() ?>"><img src="<?php echo $p->images()->last()->url() ?>" alt="<?php echo html($p->title()) ?>" /></a><div class="description">Kurzbeschreibung der Sendung</div>
	    </li>
	    <?php endforeach ?>
	  </ul>
	  
	  
	</nav>
</div>