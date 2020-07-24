<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Dean'), ['action' => 'edit', $dean->deans_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Dean'), ['action' => 'delete', $dean->deans_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dean->deans_id)]) ?> </li>
<li><?= $this->Html->link(__('List Deans'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Dean'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Dean'), ['action' => 'edit', $dean->deans_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Dean'), ['action' => 'delete', $dean->deans_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dean->deans_id)]) ?> </li>
<li><?= $this->Html->link(__('List Deans'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Dean'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($dean->deans_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $dean->has('user') ? $this->Html->link($dean->user->Array, ['controller' => 'Users', 'action' => 'view', $dean->user->users_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Faculty') ?></td>
            <td><?= $dean->has('faculty') ? $this->Html->link($dean->faculty->faculties_name, ['controller' => 'Faculties', 'action' => 'view', $dean->faculty->faculties_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Deans Id') ?></td>
            <td><?= $this->Number->format($dean->deans_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($dean->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($dean->modified) ?></td>
        </tr>
    </table>
</div>

