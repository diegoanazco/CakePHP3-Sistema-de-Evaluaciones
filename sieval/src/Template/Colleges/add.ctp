<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\College $college
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Colleges'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Colleges'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($college); ?>
<fieldset>
    <legend><?= __('Add {0}', ['College']) ?></legend>
    <?php
    echo $this->Form->control('college_name');
    echo $this->Form->control('college_address');
    echo $this->Form->control('college_phone');
    echo $this->Form->control('college_cellphone');
    echo $this->Form->control('college_email');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
