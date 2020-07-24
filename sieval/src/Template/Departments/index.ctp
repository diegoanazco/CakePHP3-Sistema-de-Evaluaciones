<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Department'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('departments_id'); ?></th>
            <th><?= $this->Paginator->sort('faculties_id'); ?></th>
            <th><?= $this->Paginator->sort('departments_name'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($departments as $department): ?>
        <tr>
            <td><?= $this->Number->format($department->departments_id) ?></td>
            <td>
                <?= $department->has('faculty') ? $this->Html->link($department->faculty->faculties_name, ['controller' => 'Faculties', 'action' => 'view', $department->faculty->faculties_id]) : '' ?>
            </td>
            <td><?= h($department->departments_name) ?></td>
            <td><?= h($department->created) ?></td>
            <td><?= h($department->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $department->departments_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $department->departments_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $department->departments_id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->departments_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
