<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesTest $typesTest
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Types Test'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Types Test'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($typesTest); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Types Test']) ?></legend>
    <?php
    echo $this->Form->control('types_test_description');
    echo $this->Form->control('types_test_weight');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
