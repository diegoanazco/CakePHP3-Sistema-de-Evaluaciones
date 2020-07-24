<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Dean'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('deans_id'); ?></th>
            <th><?= $this->Paginator->sort('users_id'); ?></th>
            <th><?= $this->Paginator->sort('faculties_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($deans as $dean): ?>
        <tr>
            <td><?= $this->Number->format($dean->deans_id) ?></td>
            <td>
                <?= $dean->has('user') ? $this->Html->link($dean->user->Array, ['controller' => 'Users', 'action' => 'view', $dean->user->users_id]) : '' ?>
            </td>
            <td>
                <?= $dean->has('faculty') ? $this->Html->link($dean->faculty->faculties_name, ['controller' => 'Faculties', 'action' => 'view', $dean->faculty->faculties_id]) : '' ?>
            </td>
            <td><?= h($dean->created) ?></td>
            <td><?= h($dean->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $dean->deans_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $dean->deans_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $dean->deans_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dean->deans_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
