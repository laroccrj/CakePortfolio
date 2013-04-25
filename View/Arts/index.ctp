<?php
	$this->Html->css('art', null, array('inline' => false));
	$this->Html->script('art', array('inline' => false));
?> 
<div id="catagories">
	<?php foreach ($categories as $category): ?>
	<a href="/arts/index/<?php echo $category['Categorie']['id'] ?>">
		<div class="catagory">
			<?php echo $category['Categorie']['name'] ?>
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