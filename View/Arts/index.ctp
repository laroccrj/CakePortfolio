<?php
	$this->Html->css('art', null, array('inline' => false));
	$this->Html->script('art', array('inline' => false));
?> 
<div id="Categories">
	<?php foreach ($Categories as $Category): ?>
	<a href="/arts/index/<?php echo $Category['Categorie']['id'] ?>">
		<div class="Category">
			<?php echo $Category['Categorie']['name'] ?>
		</div>
	</a>
	<?php endforeach; ?>
</div>
<div id="art">
	<div id="info">
		<div id="title">
			</div>
		<div id="description">
			
		</div>
	</div>
	<div id="imageContainer">
		<img src="" id="image">
	</div>
</div>