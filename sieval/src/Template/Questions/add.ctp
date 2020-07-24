<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($question, ['type' => 'file']); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Question']) ?></legend>
    <?php
    echo $this->Form->control('tests_id', ['options' => $tests]);
    echo $this->Form->control('questions_score');
    echo $this->Form->control('questions_header');
    echo $this->Form->input('questions_photo', ['type' => 'file', 'class' => 'form-control']);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
