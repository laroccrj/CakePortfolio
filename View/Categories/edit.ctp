<h1>Edit Category</h1>
<form name="Category" method="post" action="">
    <div>
        Name:<br/>
        <input name="name" value="<?php echo $this->data['Categorie']['name'] ?>" type="text">
    </div>
    <div>
        <input name="submit" type="submit" value="Update Art">
    </div>
    <input type="hidden" name="data[Categorie][id]" value="<?php echo $this->data['Categorie']['id'] ?>" id="PostId">
</form>