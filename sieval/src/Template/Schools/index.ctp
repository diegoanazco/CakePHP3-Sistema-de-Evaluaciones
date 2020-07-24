<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New School'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('schools_id'); ?></th>
            <th><?= $this->Paginator->sort('departments_id'); ?></th>
            <th><?= $this->Paginator->sort('schools_name'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($schools as $school): ?>
        <tr>
            <td><?= $this->Number->format($school->schools_id) ?></td>
            <td>
                <?= $school->has('department') ? $this->Html->link($school->department->departments_name, ['controller' => 'Departments', 'action' => 'view', $school->department->departments_id]) : '' ?>
            </td>
            <td><?= h($school->schools_name) ?></td>
            <td><?= h($school->created) ?></td>
            <td><?= h($school->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $school->schools_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $school->schools_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $school->schools_id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->schools_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
