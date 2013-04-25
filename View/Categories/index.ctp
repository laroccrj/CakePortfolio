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
<?php foreach ($Categories as $Category): ?>
<tr>
	<td><?php echo $Category['Categorie']['name'] ?></td>
	<td>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $Category['Categorie']['id'])); ?>
	</td>
	<td>
		<?php echo $this->Html->link('Delete', array('action' => 'delete', $Category['Categorie']['id'])); ?>
	</td>
</tr>
<?php endforeach; ?>
</table>