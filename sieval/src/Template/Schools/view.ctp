<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->schools_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->schools_id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->schools_id)]) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->schools_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->schools_id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->schools_id)]) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($school->schools_name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Department') ?></td>
            <td><?= $school->has('department') ? $this->Html->link($school->department->departments_name, ['controller' => 'Departments', 'action' => 'view', $school->department->departments_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Schools Name') ?></td>
            <td><?= h($school->schools_name) ?></td>
        </tr>
        <tr>
            <td><?= __('Schools Id') ?></td>
            <td><?= $this->Number->format($school->schools_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($school->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($school->modified) ?></td>
        </tr>
    </table>
</div>

