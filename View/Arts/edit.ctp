<h1>Edit Art</h1>
<?php
    echo $this->element('logout');
    echo $this->Session->flash();
?>
<form name="Art" method="post" action="/arts/edit/<?php echo $this->data['Art']['id'] ?>" enctype="multipart/form-data">
    <div>
        Name:<br/>
        <input name="name" type="text" value="<?php echo $this->data['Art']['name'] ?>">
    </div>
    <div>
        Category:<br />
        <select name="Category">
            <?php foreach ($Categories as $Category): ?>
                <?php 
                    if($Category['Categorie']['id'] == $this->data['Art']['category']){ 
                        echo '<option value="'.$Category['Categorie']['id'] .'" selected>';
                    } else {
                        echo '<option value="'.$Category['Categorie']['id'] .'">';
                    } 
                ?>
                
                <?php echo $Category['Categorie']['name'] ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="hidden" name="data[Art][id]" value="<?php echo $this->data['Art']['id'] ?>" id="PostId">
    <div>
        <input name="submit" type="submit" value="Update Art">
    </div>
</form>