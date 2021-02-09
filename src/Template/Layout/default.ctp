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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

   <!-- <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?> -->
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->script(['path/to/jquery.js', 'path/to/bootstrap.js']); ?>
    <?= $this->Html->css('index.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="#">Brand</a>
            </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <?= $this->Flash->render() ?>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
