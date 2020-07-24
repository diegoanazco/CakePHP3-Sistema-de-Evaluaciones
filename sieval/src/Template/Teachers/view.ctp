<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->teachers_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->teachers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->teachers_id)]) ?> </li>
<li><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->teachers_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->teachers_id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->teachers_id)]) ?> </li>
<li><?= $this->Html->link(__('List Teachers'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Teacher'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($teacher->teachers_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $teacher->has('user') ? $this->Html->link($teacher->user->Array, ['controller' => 'Users', 'action' => 'view', $teacher->user->users_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Teachers Id') ?></td>
            <td><?= $this->Number->format($teacher->teachers_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($teacher->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($teacher->modified) ?></td>
        </tr>
    </table>
</div>

