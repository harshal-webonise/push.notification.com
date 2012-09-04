<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
       Notifacations
    </title>
    <meta property="og:image">
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('my_css','bootstrap','bootstrap-responsive','prettify','jquery.validate','style','style1'));
    echo $this->fetch('meta');
    echo $this->fetch('css');




    echo $this->Html->script(array('jquery.min','prettify','eye','bootstrap-collapse','bootstrap-dropdown','bootstrap-scrollspy','bootstrap-tooltip','bootstrap-popover',
        'bootstrap-carousel','layout','jquery.validate','jquery.validation.functions','bootstrap-modal.js','bootstrap-alert'));



    echo $this->fetch('script');
    ?>
    <style>
        #container{background:#ebebeb;}
        .switch, .switch1{
            border:none;
            background:left no-repeat;
            width:105px;
            height:43px;
            padding:0;
            margin:0;
        }
        .on, .off, .on1, .off1{
            width:50px;
            height:40px;
            display:inline-block;
            cursor:pointer;
        }
        .result{display:none; margin-top:5px; font-size:14px; color:#333;}
        .result span{color:#C03; font-weight:700;}
    </style>
</head>
<body style="background-image: url('/app/webroot/img/back.png');padding-left: 170px;background-repeat: repeat;">
<?php echo $this->element('header'); ?>

<div id="container" style="margin-top: 40px;">

    <div class="hero-unit span4" style="background-color:transparent;">
        <?php echo $this->fetch('content'); ?>
    </div>


</div>
<div>
</div>

<?php $this->element('sql_dump')?>

</body>
</html>