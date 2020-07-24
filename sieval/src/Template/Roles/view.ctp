<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->roles_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->roles_id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->roles_id)]) ?> </li>
<li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->roles_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->roles_id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->roles_id)]) ?> </li>
<li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($role->roles_description) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Roles Description') ?></td>
            <td><?= h($role->roles_description) ?></td>
        </tr>
        <tr>
            <td><?= __('Roles Id') ?></td>
            <td><?= $this->Number->format($role->roles_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($role->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($role->modified) ?></td>
        </tr>
    </table>
</div>

