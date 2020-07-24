<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->departments_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->departments_id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->departments_id)]) ?> </li>
<li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Department'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->departments_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->departments_id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->departments_id)]) ?> </li>
<li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Department'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($department->departments_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Faculty') ?></td>
            <td><?= $department->has('faculty') ? $this->Html->link($department->faculty->faculties_name, ['controller' => 'Faculties', 'action' => 'view', $department->faculty->faculties_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Departments Name') ?></td>
            <td><?= h($department->departments_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Departments Id') ?></td>
            <td><?= $this->Number->format($department->departments_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($department->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($department->modified) ?></td>
        </tr>
    </table>
</div>

