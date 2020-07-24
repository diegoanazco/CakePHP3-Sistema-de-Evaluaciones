<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New College'), ['action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('college_id'); ?></th>
            <th><?= $this->Paginator->sort('college_name'); ?></th>
            <th><?= $this->Paginator->sort('college_address'); ?></th>
            <th><?= $this->Paginator->sort('college_phone'); ?></th>
            <th><?= $this->Paginator->sort('college_cellphone'); ?></th>
            <th><?= $this->Paginator->sort('college_email'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($colleges as $college): ?>
        <tr>
            <td><?= $this->Number->format($college->college_id) ?></td>
            <td><?= h($college->college_name) ?></td>
            <td><?= h($college->college_address) ?></td>
            <td><?= h($college->college_phone) ?></td>
            <td><?= h($college->college_cellphone) ?></td>
            <td><?= h($college->college_email) ?></td>
            <td><?= h($college->created) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $college->college_id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $college->college_id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $college->college_id], ['confirm' => __('Are you sure you want to delete # {0}?', $college->college_id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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
