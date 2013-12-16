<div class="sidebar">
	<nav class="navigation">
	<div class="logo">
		<a onclick="document._audio.pause()" href="<?php echo url() ?>">
			<img src="<?= url('') ?>assets/images/welle20-logo-small-black.png" />
		</a>
	</div>
	
	<!--<h3>Neues im Blog</h3>
	
		<ul>
			<li>Neues Semester, neue Formate.</li>
			<li>Alles neu, alles gut.</li>
			<li>Redesign</li>
		</ul>--> 
	
	  <ul class="shows">
	    <?php foreach($pages->visible() AS $p): ?>
	    <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>>
	    	<a onclick="document._audio.pause()" href="<?php echo $p->url() ?>"><img src="<?php echo $p->images()->last()->url() ?>" alt="<?php echo html($p->title()) ?>" /></a><div class="description"><?php echo html($p->claim()) ?></div>
	    </li>
	    <?php endforeach ?>
	    <?php foreach($pages->visible() AS $p): ?>
	    <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>>
	    	<a onclick="document._audio.pause()" href="<?php echo $p->url() ?>"><img src="<?php echo $p->images()->last()->url() ?>" alt="<?php echo html($p->title()) ?>" /></a><div class="description">Kurzbeschreibung der Sendung</div>
	    </li>
	    <?php endforeach ?>
	  </ul>
	  
	  
	</nav>
</div>