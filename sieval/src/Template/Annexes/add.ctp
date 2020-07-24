<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Annex $annex
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Annexes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Annexes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($annex); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Annex']) ?></legend>
    <?php
    echo $this->Form->control('tests_id', ['options' => $tests]);
    echo $this->Form->control('annexes_description');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
