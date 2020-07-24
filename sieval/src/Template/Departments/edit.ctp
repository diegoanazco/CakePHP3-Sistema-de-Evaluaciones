<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $department->departments_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $department->departments_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $department->departments_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $department->departments_id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($department); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Department']) ?></legend>
    <?php
    echo $this->Form->control('faculties_id', ['options' => $faculties]);
    echo $this->Form->control('departments_name');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
