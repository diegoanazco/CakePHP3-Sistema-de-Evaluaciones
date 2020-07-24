<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Director'), ['action' => 'edit', $director->directors_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Director'), ['action' => 'delete', $director->directors_id], ['confirm' => __('Are you sure you want to delete # {0}?', $director->directors_id)]) ?> </li>
<li><?= $this->Html->link(__('List Directors'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Director'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Director'), ['action' => 'edit', $director->directors_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Director'), ['action' => 'delete', $director->directors_id], ['confirm' => __('Are you sure you want to delete # {0}?', $director->directors_id)]) ?> </li>
<li><?= $this->Html->link(__('List Directors'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Director'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($director->directors_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $director->has('user') ? $this->Html->link($director->user->Array, ['controller' => 'Users', 'action' => 'view', $director->user->users_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Department') ?></td>
            <td><?= $director->has('department') ? $this->Html->link($director->department->departments_name, ['controller' => 'Departments', 'action' => 'view', $director->department->departments_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Directors Id') ?></td>
            <td><?= $this->Number->format($director->directors_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($director->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($director->modified) ?></td>
        </tr>
    </table>
</div>

