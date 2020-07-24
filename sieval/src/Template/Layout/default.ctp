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

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?php echo $this->Html->script('jquery-1.12.4.min.js'); 
	echo $this->Html->css('path/to/bootstrap.css');
echo $this->Html->script(['path/to/jquery.js', 'path/to/bootstrap.js']);
?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
		<li><?= $this->Html->image("icons/32/Peru-Flag-icon.png", [
			"alt" => "Español",
			'url' => ['controller' => 'App', 'action' => 'change-language', 'es_PE']
			]); ?></li>
		<li><?= $this->Html->image("icons/32/United-States-Flag-icon.png", [
			"alt" => "English",
			'url' => ['controller' => 'App', 'action' => 'change-language', 'en_US']
			]); ?></li>
		<li><?= $this->Html->image("icons/32/Brazil-Flag-icon.png", [
			"alt" => "Portugues",
			'url' => ['controller' => 'App', 'action' => 'change-language', 'pt_BR']
			]); ?></li>

            </ul>
        </div>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
