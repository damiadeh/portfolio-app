<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Portforlio: Cakephp';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
        <?php// $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?php echo $this->Html->css('bootstrap.min') ?>
    <?php echo $this->Html->css('cake') ?>
    <?php echo $this->Html->css('plugins') ?>
    <?php echo $this->Html->css('roboto-railway-webfont') ?>
    <?php echo $this->Html->css('linearicons-web-font') ?>
    <?php echo $this->Html->css('magnific-popup') ?>
    <?php echo $this->Html->css('style') ?>
    <?php echo $this->Html->css('responsive') ?>
    <?php echo $this->Html->script('modernizr-2.8.3-respond-1.4.2.min') ?>
    <?php echo $this->Html->script('jquery-1.11.2.min') ?>
    <?php echo $this->Html->script('bootstrap.min') ?>
    <?php echo $this->Html->script('plugins') ?>
    <?php echo $this->Html->script('jquery.magnific-popup') ?>
    <?php echo $this->Html->script('modernizr') ?>
    <?php echo $this->Html->script('main') ?>

    
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
       
    
</head>
<body>
    
    <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
    
    
     <?php echo $this->Html->script('jquery-1.11.2.min') ?>
    <?php echo $this->Html->script('bootstrap.min') ?>
    <?php echo $this->Html->script('plugins') ?>
    <?php echo $this->Html->script('jquery.magnific-popup') ?>
    <?php echo $this->Html->script('modernizr') ?>
    <?php echo $this->Html->script('main') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</body>
</html>
