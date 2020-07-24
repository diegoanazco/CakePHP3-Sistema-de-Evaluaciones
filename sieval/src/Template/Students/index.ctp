<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Student'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('students_id'); ?></th>
            <th><?= $this->Paginator->sort('users_id'); ?></th>
            <th><?= $this->Paginator->sort('schools_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $this->Number->format($student->students_id) ?></td>
            <td>
                <?= $student->has('user') ? $this->Html->link($student->user->Array, ['controller' => 'Users', 'action' => 'view', $student->user->users_id]) : '' ?>
            </td>
            <td>
                <?= $student->has('school') ? $this->Html->link($student->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $student->school->schools_id]) : '' ?>
            </td>
            <td><?= h($student->created) ?></td>
            <td><?= h($student->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $student->students_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $student->students_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $student->students_id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->students_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
