<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesSubject $typesSubject
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Types Subjects'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Types Subjects'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($typesSubject); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Types Subject']) ?></legend>
    <?php
    echo $this->Form->control('types_subjects_description');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
