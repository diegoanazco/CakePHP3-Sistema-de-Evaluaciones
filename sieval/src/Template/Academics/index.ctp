<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Academic'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('academics_id'); ?></th>
            <th><?= $this->Paginator->sort('coordinators_id'); ?></th>
            <th><?= $this->Paginator->sort('schools_id'); ?></th>
            <th><?= $this->Paginator->sort('academics_year'); ?></th>
            <th><?= $this->Paginator->sort('academics_period'); ?></th>
            <th><?= $this->Paginator->sort('academics_start'); ?></th>
            <th><?= $this->Paginator->sort('academics_end'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($academics as $academic): ?>
        <tr>
            <td><?= $this->Number->format($academic->academics_id) ?></td>
            <td>
                <?= $academic->has('coordinator') ? $this->Html->link($academic->coordinator->coordinators_id, ['controller' => 'Coordinators', 'action' => 'view', $academic->coordinator->coordinators_id]) : '' ?>
            </td>
            <td>
                <?= $academic->has('school') ? $this->Html->link($academic->school->schools_name, ['controller' => 'Schools', 'action' => 'view', $academic->school->schools_id]) : '' ?>
            </td>
            <td><?= $this->Number->format($academic->academics_year) ?></td>
            <td><?= h($academic->academics_period) ?></td>
            <td><?= h($academic->academics_start) ?></td>
            <td><?= h($academic->academics_end) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $academic->academics_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $academic->academics_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $academic->academics_id], ['confirm' => __('Are you sure you want to delete # {0}?', $academic->academics_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
