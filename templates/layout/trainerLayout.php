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
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('bootstrap-grid.css') ?>
    <?= $this->Html->css('bootstrap-grid.min.css') ?>
    <?= $this->Html->css('bootstrap-reboot.css') ?>
    <?= $this->Html->css('bootstrap-reboot.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('trainer.css') ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-sm navbar-dark sticky-top">
        <div class="container-fluid">
           <a class="navbar-brand" href="#">Silver's Gym</a>
             
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?= $this->Html->link(__('Dashboard'),['controller'=>'trainer','action' => 'index']) ?>
            </li>
            <li class="nav-item">
              <?= $this->Html->link(__('Members'),['controller'=>'trainer','action' => 'index']) ?>
            </li>
            <li class="nav-item">
              <?= $this->Html->link(__('Massages'),['controller'=>'trainer','action' => 'index']) ?>
            </li>
            <li class="nav-item">
                    <?= $this->Html->image('fabusa.jpeg',["class"=>"rounded","height"=>30,"width"=>30,"url"=>['controller'=>'trainer','action' => 'view']]);?>
                      
            </li>
            <li class="nav-item">
                <a href="/trainer/logout"><i class='fas fa-sign-out-alt fa-2x'></i></a>
                    
                
            </li>
          </ul>
          
        </div>
        </nav>

    <div class="main">
        
        
       
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
