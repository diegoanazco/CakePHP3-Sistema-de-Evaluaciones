<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Academic'), ['action' => 'edit', $academic->academics_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Academic'), ['action' => 'delete', $academic->academics_id], ['confirm' => __('Are you sure you want to delete # {0}?', $academic->academics_id)]) ?> </li>
<li><?= $this->Html->link(__('List Academics'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Academic'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Academic'), ['action' => 'edit', $academic->academics_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Academic'), ['action' => 'delete', $academic->academics_id], ['confirm' => __('Are you sure you want to delete # {0}?', $academic->academics_id)]) ?> </li>
<li><?= $this->Html->link(__('List Academics'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Academic'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($academic->Array) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Coordinator') ?></td>
            <td><?= $academic->has('coordinator') ? $this->Html->link($academic->coordinator->coordinators_id, ['controller' => 'Coordinators', 'action' => 'view', $academic->coordinator->coordinators_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('School') ?></td>
            <td><?= $academic->has('school') ? $this->Html->link($academic->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $academic->school->schools_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Academics Period') ?></td>
            <td><?= h($academic->academics_period) ?></td>
        </tr>
        <tr>
            <td><?= __('Academics Id') ?></td>
            <td><?= $this->Number->format($academic->academics_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Academics Year') ?></td>
            <td><?= $this->Number->format($academic->academics_year) ?></td>
        </tr>
        <tr>
            <td><?= __('Academics Start') ?></td>
            <td><?= h($academic->academics_start) ?></td>
        </tr>
        <tr>
            <td><?= __('Academics End') ?></td>
            <td><?= h($academic->academics_end) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($academic->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($academic->modified) ?></td>
        </tr>
    </table>
</div>

