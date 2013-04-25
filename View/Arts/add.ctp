<h1>Add New Art</h1>
<?php
echo $this->element('logout');
echo $this->Session->flash();
?>
<form name="Art" method="post" action="/arts/add" enctype="multipart/form-data">
	<div>
		Name:<br/>
		<input name="name" type="text">
	</div>
	<div>
		Desciription:<br />
		<textarea name="description"></textarea>
	</div>
	<div>
		Category:<br />
		<select name="category">
			<?php foreach ($categories as $category): ?>
			<option value="<?php echo $category['Categorie']['id'] ?>">
				<?php echo $category['Categorie']['name'] ?>
			</option>
			<?php endforeach; ?>
		</select>
	</div>
	<div>
		Image:<br/>
		<input type="file" name="image" id="image">
	</div>
	<div>
		<input name="submit" type="submit" value="Add Art">
	</div>
</form>