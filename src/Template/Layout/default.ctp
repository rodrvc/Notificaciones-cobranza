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
    <?= $this->fetch('script') ?>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script('hola', array('inline' => false)) ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- 
    <title id='Description'>This example shows how to create a Grid from Array data.</title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.selection.js"></script> -->


   
   <!-- JQWidjets Configuration  -->
   <?= $this->html->css('jqx.base.css') ?>
    <?= $this->Html->script('jqwidgets/jquery-1.11.1.min', array('inline' => false)) ?>
    <?= $this->Html->script('jqwidgets/jqxcore', array('inline' => false)) ?>
    <?= $this->Html->script('jqwidgets/jqxbuttons', array('inline' => false)) ?>
    <?= $this->Html->script('jqwidgets/jqxscrollbar', array('inline' => false)) ?>
    <?= $this->Html->script('jqwidgets/jqxmenu', array('inline' => false)) ?>
    
    <?= $this->Html->script('jqwidgets/jqxgrid', array('inline' => false)) ?>
    <?= $this->Html->script('jqwidgets/jqxgrid.selection', array('inline' => false)) ?>
    <?= $this->Html->script('jqwidgets/jqxdata' , array('inline' => false)) ?>
  
    
    


    <?= $this->Html->meta('icon') ?>
   <!-- <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?> -->
    <?= $this->Html->css('bootstrap.css') ?>
  
    <?= $this->Html->css('index.css') ?>  




    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--  -->

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
  

<!-- JQCOMPONENTS -->
   


  

    
  




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
