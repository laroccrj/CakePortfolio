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

    <div id="imageContainer">
        <img src="" id="image">
    </div>
    <div id="info">
        <div class="arrow" id="leftArrow">
            <img src="\img\left_arrow.png">
        </div>
        <div id="number">
            1/1
        </div>
        <div class="arrow" id="rightArrow">
            <img src="\img\right_arrow.png">
        </div>
        <div id="title">
        </div>
    </div>
</div>