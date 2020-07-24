<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('faculties_id'); ?></th>
            <th><?= $this->Paginator->sort('college_id'); ?></th>
            <th><?= $this->Paginator->sort('faculties_name'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($faculties as $faculty): ?>
        <tr>
            <td><?= $this->Number->format($faculty->faculties_id) ?></td>
            <td>
                <?= $faculty->has('college') ? $this->Html->link($faculty->college->college_name, ['controller' => 'Colleges', 'action' => 'view', $faculty->college->college_id]) : '' ?>
            </td>
            <td><?= h($faculty->faculties_name) ?></td>
            <td><?= h($faculty->created) ?></td>
            <td><?= h($faculty->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $faculty->faculties_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $faculty->faculties_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $faculty->faculties_id], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->faculties_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
