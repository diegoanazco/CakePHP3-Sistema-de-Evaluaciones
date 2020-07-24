<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $faculty->faculties_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->faculties_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $faculty->faculties_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->faculties_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Faculties'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($faculty); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Faculty']) ?></legend>
    <?php
    echo $this->Form->control('college_id', ['options' => $colleges]);
    echo $this->Form->control('faculties_name');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
