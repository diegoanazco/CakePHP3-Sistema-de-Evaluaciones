<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Coordinator'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('coordinators_id'); ?></th>
            <th><?= $this->Paginator->sort('users_id'); ?></th>
            <th><?= $this->Paginator->sort('schools_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($coordinators as $coordinator): ?>
        <tr>
            <td><?= $this->Number->format($coordinator->coordinators_id) ?></td>
            <td>
                <?= $coordinator->has('user') ? $this->Html->link($coordinator->user->Array, ['controller' => 'Users', 'action' => 'view', $coordinator->user->users_id]) : '' ?>
            </td>
            <td>
                <?= $coordinator->has('school') ? $this->Html->link($coordinator->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $coordinator->school->schools_id]) : '' ?>
            </td>
            <td><?= h($coordinator->created) ?></td>
            <td><?= h($coordinator->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $coordinator->coordinators_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $coordinator->coordinators_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $coordinator->coordinators_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinator->coordinators_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
