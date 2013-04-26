<!-- File: /app/View/Arts/panel.ctp -->

<h1>Admin Panel</h1>
<?php
    echo $this->element('logout');
    echo $this->Session->flash();
?>

<p>
    <?php
        echo $this->Html->link(
            'New Art',
            array('action' => 'add')
        );
    ?>
</p>

<p>
    <?php
        echo $this->Html->link(
            'Edit Categories',
            array('controller' => 'Categories')
        );
    ?>
</p>
<h1>Current Arts:</h1>
<table>
    <?php foreach ($arts as $art): ?>
    <tr>
        <td><?php echo $art['Art']['name'] ?></td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $art['Art']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Delete', array('action' => 'delete', $art['Art']['id'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>