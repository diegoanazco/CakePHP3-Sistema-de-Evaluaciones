<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Director'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('directors_id'); ?></th>
            <th><?= $this->Paginator->sort('users_id'); ?></th>
            <th><?= $this->Paginator->sort('departments_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($directors as $director): ?>
        <tr>
            <td><?= $this->Number->format($director->directors_id) ?></td>
            <td>
                <?= $director->has('user') ? $this->Html->link($director->user->Array, ['controller' => 'Users', 'action' => 'view', $director->user->users_id]) : '' ?>
            </td>
            <td>
                <?= $director->has('department') ? $this->Html->link($director->department->departments_name, ['controller' => 'Departments', 'action' => 'view', $director->department->departments_id]) : '' ?>
            </td>
            <td><?= h($director->created) ?></td>
            <td><?= h($director->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $director->directors_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $director->directors_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $director->directors_id], ['confirm' => __('Are you sure you want to delete # {0}?', $director->directors_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
