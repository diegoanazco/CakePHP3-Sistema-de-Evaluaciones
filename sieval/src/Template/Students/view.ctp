<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->students_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->students_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->students_id)]) ?> </li>
<li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->students_id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->students_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->students_id)]) ?> </li>
<li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
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
        <h3 class="panel-title"><?= h($student->students_id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $student->has('user') ? $this->Html->link($student->user->Array, ['controller' => 'Users', 'action' => 'view', $student->user->users_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('School') ?></td>
            <td><?= $student->has('school') ? $this->Html->link($student->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $student->school->schools_id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Students Id') ?></td>
            <td><?= $this->Number->format($student->students_id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($student->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($student->modified) ?></td>
        </tr>
    </table>
</div>

