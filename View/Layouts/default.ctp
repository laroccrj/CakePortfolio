<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Your Name
    </title>
    <?php
        echo $this->Html->meta('icon');
        if(ISSET($jsVars))
            echo $this->Html->scriptBlock('var jsVars = '.$this->Js->object($jsVars).';');
        
        echo $this->Html->script('jquery');
        echo $this->Html->css('reset');
        echo $this->Html->css('main');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
    <div id="header">
        Your Name
    </div>
    <div id="nav">
        <a href="">
            <div class="link">Art</div>
        </a>
        <a href="">
            <div class="link">About</div>
        </a>
        <a href="">
            <div class="link">Contact</div>
        </a>
    </div>
    <div id="content">
        <?php echo $this->fetch('content'); ?>
    </div>
</body>
</html>
