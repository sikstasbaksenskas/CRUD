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

$cakeDescription = 'CRUD';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->script('jquery-3.1.0.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <?php echo $this->html->link('Sąrašas', ['action'=>'index'], ['class'=>'navbar-brand'], ['style'=>'text-decoration:none']);?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php echo $this->html->link('Apie mus', ['action'=>'apiemus'], ['class'=>'nav-link'], ['style'=>'text-decoration:none']);?>
      </li>
      <li class="nav-item">
        <?php echo $this->html->link('Paslaugos', ['action'=>'paslaugos'], ['class'=>'nav-link'], ['style'=>'text-decoration:none']);?>
      </li>
      <li class="nav-item">
        <?php echo $this->html->link('Kontaktai', ['action'=>'kontaktai'], ['class'=>'nav-link'], ['style'=>'text-decoration:none']);?>
      </li>
    </ul>
  </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <hr>
    <footer>
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright </div>
          <!-- Copyright -->
    </footer>
</body>
</html>
