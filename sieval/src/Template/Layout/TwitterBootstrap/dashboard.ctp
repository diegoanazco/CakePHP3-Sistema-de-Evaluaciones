<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->getParam('controller'), $this->request->getParam('action')]) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= Configure::read('App.title') ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right visible-xs">
                    <?= $this->fetch('tb_actions') ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">

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
		<li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?> </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?= $this->fetch('tb_sidebar') ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header"><?= $this->request->getParam('controller'); ?></h1>
<?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash)) {
        echo $this->Flash->render();
    }
    $this->end();
}
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</div></div></div>');
echo $this->fetch('content');
