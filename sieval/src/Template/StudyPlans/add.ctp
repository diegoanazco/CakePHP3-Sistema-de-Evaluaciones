<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StudyPlan $studyPlan
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Study Plans'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Study Plans'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($studyPlan); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Study Plan']) ?></legend>
    <?php
    echo $this->Form->control('schools_id', ['options' => $schools]);
    echo $this->Form->control('study_plans_year');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
