<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Rector'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Colleges'), ['controller' => 'Colleges', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New College'), ['controller' => 'Colleges', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('rectors_id'); ?></th>
            <th><?= $this->Paginator->sort('users_id'); ?></th>
            <th><?= $this->Paginator->sort('college_id'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rectors as $rector): ?>
        <tr>
            <td><?= $this->Number->format($rector->rectors_id) ?></td>
            <td>
                <?= $rector->has('user') ? $this->Html->link($rector->user->Array, ['controller' => 'Users', 'action' => 'view', $rector->user->users_id]) : '' ?>
            </td>
            <td>
                <?= $rector->has('college') ? $this->Html->link($rector->college->college_name, ['controller' => 'Colleges', 'action' => 'view', $rector->college->college_id]) : '' ?>
            </td>
            <td><?= h($rector->created) ?></td>
            <td><?= h($rector->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $rector->rectors_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $rector->rectors_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $rector->rectors_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rector->rectors_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
