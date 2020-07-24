<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New User'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('users_id'); ?></th>
            <th><?= $this->Paginator->sort('roles_id'); ?></th>
            <th><?= $this->Paginator->sort('degrees_id'); ?></th>
            <th><?= $this->Paginator->sort('users_name'); ?></th>
            <th><?= $this->Paginator->sort('users_fathersurname'); ?></th>
            <th><?= $this->Paginator->sort('users_mothersurname'); ?></th>
            <th><?= $this->Paginator->sort('users_email'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->users_id) ?></td>
            <td>
                <?= $user->has('role') ? $this->Html->link($user->role->roles_description, ['controller' => 'Roles', 'action' => 'view', $user->role->roles_id]) : '' ?>
            </td>
            <td>
                <?= $user->has('degree') ? $this->Html->link($user->degree->degrees_description, ['controller' => 'Degrees', 'action' => 'view', $user->degree->degrees_id]) : '' ?>
            </td>
            <td><?= h($user->users_name) ?></td>
            <td><?= h($user->users_fathersurname) ?></td>
            <td><?= h($user->users_mothersurname) ?></td>
            <td><?= h($user->users_email) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $user->users_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $user->users_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $user->users_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->users_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
