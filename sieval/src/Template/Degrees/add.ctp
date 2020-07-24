<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Degree $degree
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Degrees'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($degree); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Degree']) ?></legend>
    <?php
    echo $this->Form->control('degrees_description');
    echo $this->Form->control('degrees_acronym');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
