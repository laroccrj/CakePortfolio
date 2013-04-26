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
        Category:<br />
        <select name="Category">
            <?php foreach ($Categories as $Category): ?>
            <option value="<?php echo $Category['Categorie']['id'] ?>">
                <?php echo $Category['Categorie']['name'] ?>
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