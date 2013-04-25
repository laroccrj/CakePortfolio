<h1>Categories</h1>
<?php
echo $this->element('logout');
echo $this->Session->flash();
?>

<p>
<?php
echo $this->Html->link(
		'Admin Home',
		array('controller' => 'arts', 'action' => 'admin')
	);
?>
</p>

<p>
<?php
echo $this->Html->link(
		'New Category',
		array('action' => 'add')
	);
?>
</p>
<table>
<?php foreach ($categories as $category): ?>
<tr>
	<td><?php echo $category['Categorie']['name'] ?></td>
	<td>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $category['Categorie']['id'])); ?>
	</td>
	<td>
		<?php echo $this->Html->link('Delete', array('action' => 'delete', $category['Categorie']['id'])); ?>
	</td>
</tr>
<?php endforeach; ?>
</table>