<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Coordinator'), ['action' => 'edit', $coordinator->coordinators_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Coordinator'), ['action' => 'delete', $coordinator->coordinators_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinator->coordinators_id)]) ?> </li>
<li><?= $this->Html->link(__('List Coordinators'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Coordinator'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Coordinator'), ['action' => 'edit', $coordinator->coordinators_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Coordinator'), ['action' => 'delete', $coordinator->coordinators_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinator->coordinators_id)]) ?> </li>
<li><?= $this->Html->link(__('List Coordinators'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Coordinator'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($coordinator->coordinators_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $coordinator->has('user') ? $this->Html->link($coordinator->user->Array, ['controller' => 'Users', 'action' => 'view', $coordinator->user->users_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('School') ?></td>
            <td><?= $coordinator->has('school') ? $this->Html->link($coordinator->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $coordinator->school->schools_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Coordinators Id') ?></td>
            <td><?= $this->Number->format($coordinator->coordinators_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($coordinator->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($coordinator->modified) ?></td>
        </tr>
    </table>
</div>

